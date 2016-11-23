<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\BulkDeleteAdsByListingIDRestRequest;

class BulkDeleteAdsByListingIDRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BulkDeleteAdsByListingIDRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\BulkDeleteAdsByListingIDRestRequest', $this->obj);
    }

    public function testExtendsBulkDeleteAdRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\BulkDeleteAdRequest', $this->obj);
    }
}