<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\Sdk;

class SdkTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->sdk = new Sdk([
            'apiVersion' => '',
            'appId' => '',
            'authToken' => '',
            'authorization' => '',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '',
            'siteId' => 0
        ]);
    }

    public function testCanCreateServices()
    {
        $s = new Sdk([
            'appId' => '123',
            'apiVersion' => '999',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'Finding' => [
                'appId' => '321'
            ],
            'Trading' => [
                'siteId' => 0
            ]
        ]);
        $f = $s->createFinding();
        $t = $s->createTrading();

        $this->assertEquals('321', $f->getConfig('appId'));
        $this->assertEquals('999', $f->getConfig('apiVersion'));

        $this->assertEquals('123', $t->getConfig('appId'));
        $this->assertEquals('999', $t->getConfig('apiVersion'));
        $this->assertEquals(0, $t->getConfig('siteId'));

        /**
         * Options passed in via the create methods overwrite existing.
         */
        $t = $s->createTrading([
            'appId' => '111',
            'apiVersion' => '222',
            'siteId' => 333
        ]);

        $this->assertEquals('111', $t->getConfig('appId'));
        $this->assertEquals('222', $t->getConfig('apiVersion'));
        $this->assertEquals(333, $t->getConfig('siteId'));
    }

    public function testCallingUnknownMethod()
    {
        $this->setExpectedException('\BadMethodCallException', 'Unknown method: foo');

        $this->sdk->foo();
    }

    public function testCanCreateBrowse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Services\BrowseService', $this->sdk->createBrowse());
    }

    public function testCanCreateBulkDataExchange()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService', $this->sdk->createBulkDataExchange());
    }

    public function testCanCreateBusinessPoliciesManagement()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService', $this->sdk->createBusinessPoliciesManagement());
    }

    public function testCanCreateFileTransfer()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferService', $this->sdk->createFileTransfer());
    }

    public function testCanCreateFinding()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->sdk->createFinding());
    }

    public function testCanCreateFulfillment()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Services\FulfillmentService', $this->sdk->createFulfillment());
    }

    public function testCanCreateHalfFinding()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Services\HalfFindingService', $this->sdk->createHalfFinding());
    }

    public function testCanCreateMarketing()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Services\MarketingService', $this->sdk->createMarketing());
    }

    public function testCanCreateMetadata()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Services\MetadataService', $this->sdk->createMetadata());
    }

    public function testCanCreateOrder()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Services\OrderService', $this->sdk->createOrder());
    }

    public function testCanCreatePostOrder()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Services\PostOrderService', $this->sdk->createPostOrder());
    }

    public function testCanCreateResolutionCaseManagement()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService', $this->sdk->createResolutionCaseManagement());
    }

    public function testCanCreateReturnManagement()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Services\ReturnManagementService', $this->sdk->createReturnManagement());
    }

    public function testCanCreateShopping()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingService', $this->sdk->createShopping());
    }

    public function testCanCreateTrading()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingService', $this->sdk->createTrading());
    }
}
