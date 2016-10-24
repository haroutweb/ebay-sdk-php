<?php
namespace DTS\eBaySDK\Browse\Services;

/**
 * Base class for the Browse service.
 */
class BrowseBaseService extends \DTS\eBaySDK\Services\BaseRestService
{
    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    public static $operations = [
        'getItem' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\Item',
            'params' => [
                'item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'getItemFeed' => [
            'method' => 'GET',
            'resource' => 'item_feed',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\ItemFeedResponse',
            'params' => [
                'category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'date' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'feed_type' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'getItemGroup' => [
            'method' => 'GET',
            'resource' => 'item_group/{item_group_id}',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\ItemGroup',
            'params' => [
                'item_group_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'searchForItems' => [
            'method' => 'GET',
            'resource' => 'item_summary/search',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\SearchPagedCollection',
            'params' => [
                'filter' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ],
                'sort' => [
                    'valid' => ['string']
                ]
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
        parent::__construct('https://api.ebay.com/buy/browse', 'https://api.sandbox.ebay.com/buy/browse', $config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\Browse\Services\BrowseService::API_VERSION,
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
        $headers[self::HDR_AUTHORIZATION] = 'Bearer '.$this->getConfig('authorization');

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        return $headers;
    }
}
