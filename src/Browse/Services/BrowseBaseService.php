<?php
namespace DTS\eBaySDK\Browse\Services;

/**
 * Base class for the Browse service.
 */
class BrowseBaseService extends \DTS\eBaySDK\Services\BaseRestService
{
    /**
     * Constants for the various HTTP headers required by the API.
     */
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
     * Get an array of service uri parameter definitions.
     *
     * @return array
     */
    public static function getParameterDefinitions()
    {
        return [
            'getItem' => [
                'item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ],
            'search' => [
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

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        return $headers;
    }
}
