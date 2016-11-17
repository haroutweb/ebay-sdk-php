<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Order\Types;

use DTS\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest;

class UpdateGuestPaymentInfoRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateGuestPaymentInfoRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest', $this->obj);
    }

    public function testExtendsUpdatePaymentInformation()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdatePaymentInformation', $this->obj);
    }
}
