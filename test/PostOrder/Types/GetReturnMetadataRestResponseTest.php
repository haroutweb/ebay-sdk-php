<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\GetReturnMetadataRestResponse;

class GetReturnMetadataRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnMetadataRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnMetadataRestResponse', $this->obj);
    }

    public function testExtendsGetMetadataResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetMetadataResponse', $this->obj);
    }
}
