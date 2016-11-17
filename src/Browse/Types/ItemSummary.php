<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Browse\Types;

/**
 *
 * @property \DTS\eBaySDK\Browse\Types\Image[] $additionalImages
 * @property integer $bidCount
 * @property string[] $buyingOptions
 * @property \DTS\eBaySDK\Browse\Types\Category[] $categories
 * @property string $condition
 * @property \DTS\eBaySDK\Browse\Types\Amount_0 $currentBidPrice
 * @property \DTS\eBaySDK\Browse\Types\TargetLocation $distanceFromPickupLocation
 * @property string $energyEfficiencyClass
 * @property \DTS\eBaySDK\Browse\Types\Image $image
 * @property string $itemAffiliateWebUrl
 * @property string $itemGroupHref
 * @property string $itemId
 * @property \DTS\eBaySDK\Browse\Types\ItemLocationImpl $itemLocation
 * @property \DTS\eBaySDK\Browse\Types\MarketingPrice_0 $marketingPrice
 * @property \DTS\eBaySDK\Browse\Types\PickupOptionSummary[] $pickupOptions
 * @property \DTS\eBaySDK\Browse\Types\Amount_0 $price
 * @property \DTS\eBaySDK\Browse\Types\Seller $seller
 * @property \DTS\eBaySDK\Browse\Types\ShippingOptionSummary[] $shippingOptions
 * @property \DTS\eBaySDK\Browse\Types\Image[] $thumbnailImages
 * @property string $title
 * @property boolean $topRatedBuyingExperience
 */
class ItemSummary extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalImages' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'additionalImages'
        ],
        'bidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bidCount'
        ],
        'buyingOptions' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyingOptions'
        ],
        'categories' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Category',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categories'
        ],
        'condition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'condition'
        ],
        'currentBidPrice' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentBidPrice'
        ],
        'distanceFromPickupLocation' => [
            'type' => 'DTS\eBaySDK\Browse\Types\TargetLocation',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'distanceFromPickupLocation'
        ],
        'energyEfficiencyClass' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'energyEfficiencyClass'
        ],
        'image' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'image'
        ],
        'itemAffiliateWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemAffiliateWebUrl'
        ],
        'itemGroupHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupHref'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'itemLocation' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ItemLocationImpl',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemLocation'
        ],
        'marketingPrice' => [
            'type' => 'DTS\eBaySDK\Browse\Types\MarketingPrice_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketingPrice'
        ],
        'pickupOptions' => [
            'type' => 'DTS\eBaySDK\Browse\Types\PickupOptionSummary',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'pickupOptions'
        ],
        'price' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'price'
        ],
        'seller' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Seller',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
        'shippingOptions' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ShippingOptionSummary',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingOptions'
        ],
        'thumbnailImages' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'thumbnailImages'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'topRatedBuyingExperience' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'topRatedBuyingExperience'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
