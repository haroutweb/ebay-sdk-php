<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \DTS\eBaySDK\Fulfillment\Types\AppliedPromotion[] $appliedPromotions
 * @property \DTS\eBaySDK\Fulfillment\Types\DeliveryCost $deliveryCost
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $discountedLineItemCost
 * @property \DTS\eBaySDK\Fulfillment\Types\GiftDetails $giftDetails
 * @property string $legacyItemId
 * @property string $legacyVariationId
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $lineItemCost
 * @property \DTS\eBaySDK\Fulfillment\Enums\LineItemFulfillmentStatusEnum $lineItemFulfillmentStatus
 * @property string $lineItemId
 * @property \DTS\eBaySDK\Fulfillment\Enums\MarketplaceIdEnum $listingMarketplaceId
 * @property \DTS\eBaySDK\Fulfillment\Types\LineItemProperties $properties
 * @property \DTS\eBaySDK\Fulfillment\Enums\MarketplaceIdEnum $purchaseMarketplaceId
 * @property integer $quantity
 * @property string $sku
 * @property \DTS\eBaySDK\Fulfillment\Enums\SoldFormatEnum $soldFormat
 * @property \DTS\eBaySDK\Fulfillment\Types\Tax[] $taxes
 * @property string $title
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $total
 */
class LineItem extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'appliedPromotions' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\AppliedPromotion',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'appliedPromotions'
        ],
        'deliveryCost' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\DeliveryCost',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryCost'
        ],
        'discountedLineItemCost' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'discountedLineItemCost'
        ],
        'giftDetails' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\GiftDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'giftDetails'
        ],
        'legacyItemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyItemId'
        ],
        'legacyVariationId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyVariationId'
        ],
        'lineItemCost' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemCost'
        ],
        'lineItemFulfillmentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemFulfillmentStatus'
        ],
        'lineItemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemId'
        ],
        'listingMarketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingMarketplaceId'
        ],
        'properties' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\LineItemProperties',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'properties'
        ],
        'purchaseMarketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseMarketplaceId'
        ],
        'quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantity'
        ],
        'sku' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sku'
        ],
        'soldFormat' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'soldFormat'
        ],
        'taxes' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Tax',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'taxes'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'total' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
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
