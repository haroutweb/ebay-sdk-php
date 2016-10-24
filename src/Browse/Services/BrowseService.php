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

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *         @type string $item_id
     *     }
     * }
     * @return \DTS\eBaySDK\Browse\Types\Item
     */
    public function getItem(array $request)
    {
        return $this->getItemAsync($request)->wait();
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *         @type string $item_id
     *     }
     * }
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemAsync(array$request)
    {
        return $this->callOperationAsync('getItem', $request);
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *         @type string $category_id
     *         @type string $date
     *         @type string $feed_type
     *     }
     * }
     * @return \DTS\eBaySDK\Browse\Types\ItemFeedResponse
     */
    public function getItemFeed(array $request)
    {
        return $this->getItemFeedAsync($request)->wait();
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *         @type string $category_id
     *         @type string $date
     *         @type string $feed_type
     *     }
     * }
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemFeedAsync(array $request)
    {
        return $this->callOperationAsync('getItemFeed', $request);
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *         @type string $item_group_id
     *     }
     * }
     * @return \DTS\eBaySDK\Browse\Types\ItemGroup
     */
    public function getItemGroup(array $request)
    {
        return $this->getItemGroupAsync($request)->wait();
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *         @type string $item_group_id
     *     }
     * }
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemGroupAsync(array $request)
    {
        return $this->callOperationAsync('getItemGroup', $request);
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *         @type string $filter
     *         @type string $limit
     *         @type string $offset
     *         @type string $q
     *         @type string $sort
     *     }
     * }
     * @return \DTS\eBaySDK\Browse\Types\SearchPagedCollection
     */
    public function searchForItems(array $request)
    {
        return $this->searchForItemsAsync($request)->wait();
    }

    /**
     * @param array $request {
     *     Associative array of request data.
     *
     *     @type array $params {
     *         Associative array of URI parameters.
     *
     *         @type string $filter
     *         @type string $limit
     *         @type string $offset
     *         @type string $q
     *         @type string $sort
     *     }
     * }
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchForItemsAsync(array$request)
    {
        return $this->callOperationAsync('searchForItems', $request);
    }
}
