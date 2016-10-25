<?php
namespace DTS\eBaySDK\PostOrder\Services;

class PostOrderService extends \DTS\eBaySDK\PostOrder\Services\PostOrderBaseService
{
    const API_VERSION = 'v2';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *     }
     * }
     * @return \DTS\eBaySDK\PostOrder\Types\FindCancelResponse
     */
    public function searchCancellations(array $request = [])
    {
        return $this->searchCancellationsAsync($request)->wait();
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *     }
     * }
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCancellationsAsync(array $request = [])
    {
        return $this->callOperationAsync('searchCancellations', $request);
    }
}
