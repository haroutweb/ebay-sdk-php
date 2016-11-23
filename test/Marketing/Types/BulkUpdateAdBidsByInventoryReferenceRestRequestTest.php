<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestRequest;

class BulkUpdateAdBidsByInventoryReferenceRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BulkUpdateAdBidsByInventoryReferenceRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestRequest', $this->obj);
    }

    public function testExtendsBulkCreateAdsByInventoryReferenceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\BulkCreateAdsByInventoryReferenceRequest', $this->obj);
    }
}