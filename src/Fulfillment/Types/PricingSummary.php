<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $adjustment
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $deliveryCost
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $deliveryDiscount
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $fee
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $priceDiscountSubtotal
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $priceSubtotal
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $tax
 * @property \DTS\eBaySDK\Fulfillment\Types\Amount $total
 */
class PricingSummary extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'adjustment' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'adjustment'
        ],
        'deliveryCost' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryCost'
        ],
        'deliveryDiscount' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryDiscount'
        ],
        'fee' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fee'
        ],
        'priceDiscountSubtotal' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceDiscountSubtotal'
        ],
        'priceSubtotal' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceSubtotal'
        ],
        'tax' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tax'
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