<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Trading\Enums;

use DTS\eBaySDK\Trading\Enums\QuantityAvailableHintCodeType;

class QuantityAvailableHintCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new QuantityAvailableHintCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\QuantityAvailableHintCodeType', $this->obj);
    }
}
