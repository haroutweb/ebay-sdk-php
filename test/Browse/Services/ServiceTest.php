<?php
namespace DTS\eBaySDK\Test\Browse\Services;

use DTS\eBaySDK\Browse\Services\BrowseBaseService;
use DTS\eBaySDK\Browse\Services\BrowseService;
use DTS\eBaySDK\Test\Browse\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\HttpRestHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = BrowseBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'default' => BrowseService::API_VERSION,
            'required' => true
        ], $d['apiVersion']);

        $this->assertArrayHasKey('marketplaceId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['marketplaceId']);
    }

    public function testParameterDefinitions()
    {
        $d = BrowseBaseService::getParameterDefinitions();

        $this->assertArrayHasKey('getItem', $d);
        $this->assertEquals([
            'item_id' => [
                'valid' => ['string'],
                'required' => true
            ],
        ], $d['getItem']);

        $this->assertArrayHasKey('getItemFeed', $d);
        $this->assertEquals([
            'category_id' => [
                'valid' => ['string'],
                'required' => true
            ],
            'date' => [
                'valid' => ['string'],
                'required' => true
            ],
            'feed_type' => [
                'valid' => ['string'],
                'required' => true
            ]
        ], $d['getItemFeed']);

        $this->assertArrayHasKey('getItemGroup', $d);
        $this->assertEquals([
            'item_group_id' => [
                'valid' => ['string'],
                'required' => true
            ]
        ], $d['getItemGroup']);

        $this->assertArrayHasKey('searchForItems', $d);
        $this->assertEquals([
            'filter' => [
                'valid' => ['string']
            ],
            'limit' => [
                'valid' => ['string']
            ],
            'offset' => [
                'valid' => ['string']
            ],
            'q' => [
                'valid' => ['string']
            ],
            'sort' => [
                'valid' => ['string']
            ]
        ], $d['searchForItems']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authorization' => '321',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(BrowseBaseService::HDR_AUTHORIZATION, $h->headers);
        $this->assertEquals('Bearer 321', $h->headers[BrowseBaseService::HDR_AUTHORIZATION ]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(BrowseBaseService::HDR_MARKETPLACE_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpRestHandler();

        $s = new Service([
            'authorization' => '321',
            'marketplaceId' => '123',
            'httpHandler' => $h
        ]);

        $s->testOperation();

        $this->assertArrayHasKey(BrowseBaseService::HDR_MARKETPLACE_ID, $h->headers);
        $this->assertEquals('123', $h->headers[BrowseBaseService::HDR_MARKETPLACE_ID]);
    }
}
