<?php
namespace DTS\eBaySDK\Browse\Services;

class BrowseService extends \DTS\eBaySDK\Browse\Services\BrowseBaseService
{
    const API_VERSION = 'v1';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function getItem(array $request)
    {
        return $this->getItemAsync($request)->wait();
    }

    public function getItemAsync(array$request)
    {
        return $this->callOperationAsync(
            'getItem',
            'GET',
            'item/{item_id}',
            $request,
            '\DTS\eBaySDK\Browse\Types\Item'
        );
    }

    public function search(array $request)
    {
        return $this->searchAsync($request)->wait();
    }

    public function searchAsync(array$request)
    {
        return $this->callOperationAsync(
            'search',
            'GET',
            'item_summary/search',
            $request,
            '\DTS\eBaySDK\Browse\Types\SearchPagedCollection'
        );
    }
}
