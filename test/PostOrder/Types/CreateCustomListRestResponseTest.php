<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\CreateCustomListRestResponse;

class CreateCustomListRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateCustomListRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateCustomListRestResponse', $this->obj);
    }

    public function testExtendsCreateCustomListResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateCustomListResponse', $this->obj);
    }
}