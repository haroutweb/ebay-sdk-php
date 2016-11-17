<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\AddShippingLabelInfoRestResponse;

class AddShippingLabelInfoRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddShippingLabelInfoRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\AddShippingLabelInfoRestResponse', $this->obj);
    }

    public function testExtendsProvideLabelResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ProvideLabelResponse', $this->obj);
    }
}
