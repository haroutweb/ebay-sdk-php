<?php
namespace DTS\eBaySDK\Test\PostOrder\Mocks;

use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \DTS\eBaySDK\PostOrder\Services\PostOrderBaseService
{
    public static $operations = [
        'testOperation' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
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
