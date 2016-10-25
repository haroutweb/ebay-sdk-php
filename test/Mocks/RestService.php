<?php
namespace DTS\eBaySDK\Test\Mocks;

class RestService extends \DTS\eBaySDK\Test\Mocks\BaseRestService
{
    public static $operations =  [
        'foo' => [
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

    public function foo(array $request = [])
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }
}
