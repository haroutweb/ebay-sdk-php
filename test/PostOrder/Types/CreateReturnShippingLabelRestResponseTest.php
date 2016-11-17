<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\CreateReturnShippingLabelRestResponse;

class CreateReturnShippingLabelRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateReturnShippingLabelRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateReturnShippingLabelRestResponse', $this->obj);
    }

    public function testExtendsInitiateShippingLabelResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\InitiateShippingLabelResponse', $this->obj);
    }
}
