<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \DTS\eBaySDK\Fulfillment\Types\ShippingFulfillment[] $fulfillments
 * @property integer $total
 * @property \DTS\eBaySDK\Fulfillment\Types\ErrorDetailV3[] $warnings
 */
class ShippingFulfillmentPagedCollection extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'fulfillments' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\ShippingFulfillment',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'fulfillments'
        ],
        'total' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
