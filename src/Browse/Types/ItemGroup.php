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
 * @property string $categoryPath
 * @property string $generatedShortDescription
 * @property \DTS\eBaySDK\Browse\Types\Image $image
 * @property string $itemGroupId
 * @property \DTS\eBaySDK\Browse\Types\ItemDigest[] $items
 * @property \DTS\eBaySDK\Browse\Types\ReviewRating $reviewRating
 * @property string $sellerProvidedDescription
 * @property string $title
 * @property \DTS\eBaySDK\Browse\Types\TypedNameValue[] $variesByLocalizedAspects
 * @property \DTS\eBaySDK\Browse\Types\ErrorDetailV3[] $warnings
 */
class ItemGroup extends \DTS\eBaySDK\Types\BaseType
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
        'categoryPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryPath'
        ],
        'generatedShortDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'generatedShortDescription'
        ],
        'image' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'image'
        ],
        'itemGroupId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupId'
        ],
        'items' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ItemDigest',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'items'
        ],
        'reviewRating' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ReviewRating',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reviewRating'
        ],
        'sellerProvidedDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerProvidedDescription'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'variesByLocalizedAspects' => [
            'type' => 'DTS\eBaySDK\Browse\Types\TypedNameValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'variesByLocalizedAspects'
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ErrorDetailV3',
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
