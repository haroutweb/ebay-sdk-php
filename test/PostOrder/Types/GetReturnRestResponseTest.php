<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\GetReturnRestResponse;

class GetReturnRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnRestResponse', $this->obj);
    }

    public function testExtendsGetDetailResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetDetailResponse', $this->obj);
    }
}
