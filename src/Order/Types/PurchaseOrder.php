<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Order\Types;

/**
 *
 * @property \DTS\eBaySDK\Order\Types\LineItem_0[] $lineItems
 * @property \DTS\eBaySDK\Order\Types\PaymentInstrument $paymentInstrument
 * @property \DTS\eBaySDK\Order\Types\PricingSummary_0 $pricingSummary
 * @property string $purchaseOrderCreationDate
 * @property string $purchaseOrderId
 * @property \DTS\eBaySDK\Order\Enums\PurchaseOrderPaymentStatusEnum $purchaseOrderPaymentStatus
 * @property \DTS\eBaySDK\Order\Enums\PurchaseOrderStatusEnum $purchaseOrderStatus
 * @property \DTS\eBaySDK\Order\Types\Amount_0 $refundedAmount
 * @property \DTS\eBaySDK\Order\Types\ShippingAddress_0 $shippingAddress
 * @property \DTS\eBaySDK\Order\Types\ShippingFulfillment[] $shippingFulfillments
 * @property \DTS\eBaySDK\Order\Types\ErrorDetailV3[] $warnings
 */
class PurchaseOrder extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'lineItems' => [
            'type' => 'DTS\eBaySDK\Order\Types\LineItem_0',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItems'
        ],
        'paymentInstrument' => [
            'type' => 'DTS\eBaySDK\Order\Types\PaymentInstrument',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentInstrument'
        ],
        'pricingSummary' => [
            'type' => 'DTS\eBaySDK\Order\Types\PricingSummary_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'purchaseOrderCreationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderCreationDate'
        ],
        'purchaseOrderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderId'
        ],
        'purchaseOrderPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderPaymentStatus'
        ],
        'purchaseOrderStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderStatus'
        ],
        'refundedAmount' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundedAmount'
        ],
        'shippingAddress' => [
            'type' => 'DTS\eBaySDK\Order\Types\ShippingAddress_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingAddress'
        ],
        'shippingFulfillments' => [
            'type' => 'DTS\eBaySDK\Order\Types\ShippingFulfillment',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingFulfillments'
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\Order\Types\ErrorDetailV3',
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
