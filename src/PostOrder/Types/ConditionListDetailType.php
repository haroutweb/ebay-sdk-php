<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\ListDataType[] $all
 * @property boolean $isMultiple
 * @property \DTS\eBaySDK\PostOrder\Types\ListDataType[] $selected
 */
class ConditionListDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'all' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ListDataType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'all'
        ],
        'isMultiple' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'isMultiple'
        ],
        'selected' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ListDataType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'selected'
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
