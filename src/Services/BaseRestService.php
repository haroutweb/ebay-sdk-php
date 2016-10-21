<?php
namespace DTS\eBaySDK\Services;

use DTS\eBaySDK\Parser\XmlParser;
use DTS\eBaySDK\Exceptions;
use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\UriResolver;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use \DTS\eBaySDK as Functions;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

/**
 * The base class for every eBay REST service class.
 */
abstract class BaseRestService
{
    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_REQUEST_LANGUAGE = 'Content-Language';
    const HDR_RESPONSE_LANGUAGE = 'Accept-Language';

    /**
     * @var DTS\eBaySDK\ConfigurationResolver Resolves configuration options.
     */
    private $resolver;

    /**
     * @var DTS\eBaySDK\UriResolver Resolves uri parameters.
     */
    private $uriResolver;

    /**
     * @var array Associative array storing the current configuration option values.
     */
    private $config;

    /**
     * @var string The production URL for the service.
     */
    private $productionUrl;

    /**
     * @var string The sandbox URL for the service.
     */
    private $sandboxUrl;

    /**
     * @param string $productionUrl The production URL.
     * @param string $sandboxUrl The sandbox URL.
     * @param array $config Configuration option values.
     */
    public function __construct(
        $productionUrl,
        $sandboxUrl,
        array $config
    ) {
        $this->resolver = new ConfigurationResolver(static::getConfigDefinitions());
        $this->uriResolver = new UriResolver(static::getParameterDefinitions());
        $this->config = $this->resolver->resolve($config);
        $this->productionUrl = $productionUrl;
        $this->sandboxUrl = $sandboxUrl;
    }

    /**
     * Get an array of service configuration option definitions.
     *
     * @return array
     */
    public static function getConfigDefinitions()
    {
        return [
            'authorization' => [
                'valid' => ['string'],
                'required' => true
            ],
            'debug' => [
                'valid'   => ['bool', 'array'],
                'fn'      => 'DTS\eBaySDK\applyDebug',
                'default' => false
            ],
            'httpHandler' => [
                'valid'   => ['callable'],
                'default' => 'DTS\eBaySDK\defaultHttpHandler'
            ],
            'httpOptions' => [
                'valid'   => ['array'],
                'default' => []
            ],
            'requestLanguage' => [
                'valid' => ['string']
            ],
            'responseLanguage' => [
                'valid' => ['string']
            ],
            'sandbox' => [
                'valid'   => ['bool'],
                'default' => false
            ]
        ];
    }

    /**
     * Method to get the service's configuration.
     *
     * @return mixed Returns an associative array of configuration options if no parameters are passed, otherwise returns the value for the specified configuration option.
     */
    public function getConfig($option = null)
    {
        return $option === null
            ? $this->config
            : (isset($this->config[$option])
                ? $this->config[$option]
                : null);
    }

    public function setConfig($configuration)
    {
        $this->config = Functions\arrayMergeDeep(
            $this->config,
            $this->resolver->resolveOptions($configuration)
        );
    }

    /**
     * @return \DTS\eBaySDK\Credentials\CredentialsInterface
     */
    public function getCredentials()
    {
        return $this->getConfig('credentials');
    }

    /**
     * Sends an asynchronous API request.
     *
     * @param string The name of the PHP class that will be created from the XML response.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface A promise that will be resolved with an object created from the XML response.
     */
    protected function callOperationAsync($name, $method, $resource, array $request, $responseClass)
    {
        $url = $this->uriResolver->resolve(
            $name,
            $this->getUrl(),
            $this->getConfig('apiVersion'),
            $resource,
            array_key_exists('params', $request) ? $request['params'] : []
        );
        $body = $this->buildRequestBody($request);
        $headers = $this->buildRequestHeaders($request, $body);
        $debug = $this->getConfig('debug');
        $httpHandler = $this->getConfig('httpHandler');
        $httpOptions = $this->getConfig('httpOptions');
        if ($debug !== false) {
            $this->debugRequest($url, $headers, $body);
        }

        $request = new Request($method, $url, $headers, $body);

        return $httpHandler($request, $httpOptions)->then(
            function (ResponseInterface $res) use ($debug, $responseClass) {
                $json = $res->getBody()->getContents();

                if ($debug !== false) {
                    $this->debugResponse($json);
                }

                return new $responseClass(json_decode($json, true));
            }
        );
    }

    /**
     * Helper function to return the URL as determined by the sandbox configuration option.
     *
     * @return string Either the production or sandbox URL.
     */
    private function getUrl()
    {
        return $this->getConfig('sandbox') ? $this->sandboxUrl : $this->productionUrl;
    }

    /**
     * Builds the request body string.
     *
     * @return string The request body.
     */
    private function buildRequestBody(array $request)
    {
        return array_key_exists('body', $request)
            ? json_encode($request['body']->toArray())
            : '';
    }

    /**
     * Helper function that builds the HTTP request headers.
     *
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     * @param string $body The request body.
     *
     * @return array An associative array of HTTP headers.
     */
    private function buildRequestHeaders(array $request, $body)
    {
        $headers = $this->getEbayHeaders();

        $headers['Accept'] = 'application/json';
        $headers['Content-Type'] = 'application/json';
        $headers['Content-Length'] = strlen($body);

        // Add optional headers.
        if ($this->getConfig('requestLanguage')) {
            $headers[self::HDR_REQUEST_LANGUAGE] = $this->getConfig('requestLanguage');
        }

        if ($this->getConfig('responseLanguage')) {
            $headers[self::HDR_RESPONSE_LANGUAGE] = $this->getConfig('responseLanguage');
        }

        return $headers;
    }

    /**
     * Derived classes must implement this method that will build the needed eBay http headers.
     *
     * @return array An associative array of eBay http headers.
     */
    abstract protected function getEbayHeaders();

    /**
     * Sends a debug string of the request details.
     *
     * @param string $url API endpoint.
     * @param array  $headers Associative array of HTTP headers.
     * @param string $body The XML body of the POST request.
      */
    private function debugRequest($url, $headers, $body)
    {
        $str = $url.PHP_EOL;

        $str .= array_reduce(array_keys($headers), function ($str, $key) use ($headers) {
            $str .= $key.': '.$headers[$key].PHP_EOL;
            return $str;
        }, '');

        $str .= $body;

        $this->debug($str);
    }

    /**
     * Sends a debug string of the response details.
     *
     * @param string $body The XML body of the response.
      */
    private function debugResponse($body)
    {
        $this->debug($body);
    }

    /**
     * Sends a debug string via the attach debugger.
     */
    private function debug($str)
    {
        $debugger = $this->getConfig('debug');
        $debugger($str);
    }
}
