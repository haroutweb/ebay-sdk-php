<?php
namespace DTS\eBaySDK\PostOrder\Services;

/**
 * Base class for the PostOrder service.
 */
class PostOrderBaseService extends \DTS\eBaySDK\Services\BaseRestService
{
    public static $operations = [
        'searchCancellations' => [
            'method' => 'GET',
            'resource' => 'cancellation/search',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\FindCancelResponse',
            'params' => [
            ]
        ]
    ];

    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_AUTHORIZATION = 'Authorization';
    const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://api.ebay.com/post-order', 'https://api.sandbox.ebay.com/post-order', $config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\PostOrder\Services\PostOrderService::API_VERSION,
                'required' => true
            ],
            'marketplaceId' => [
                'valid' => ['string']
            ]
        ];
    }

    /**
     * Build the needed eBay HTTP headers.
     *
     * @return array An associative array of eBay http headers.
     */
    protected function getEbayHeaders()
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_AUTHORIZATION] = 'TOKEN '.$this->getConfig('authorization');

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        return $headers;
    }
}
