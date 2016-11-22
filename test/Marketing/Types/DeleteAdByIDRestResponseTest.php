<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\DeleteAdByIDRestResponse;

class DeleteAdByIDRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DeleteAdByIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\DeleteAdByIDRestResponse', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
