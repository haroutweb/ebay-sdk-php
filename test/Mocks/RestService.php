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
        ],
        'bar' => [
            'method' => 'POST',
            'resource' => '{foo}',
            'responseClass' => '\DTS\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
                'foo' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'bar' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function foo(array $request)
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }

    public function bar(array $request)
    {
        return $this->callOperationAsync('bar', $request)->wait();
    }
}
