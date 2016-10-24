<?php
namespace DTS\eBaySDK\Test\Browse\Mocks;

use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \DTS\eBaySDK\Browse\Services\BrowseBaseService
{
    public static $operations = [
        'testOperation' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync('testOperation', ['body' => new ComplexClass()])->wait();
    }
}
