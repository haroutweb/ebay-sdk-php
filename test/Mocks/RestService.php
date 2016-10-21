<?php
namespace DTS\eBaySDK\Test\Mocks;

class RestService extends \DTS\eBaySDK\Test\Mocks\BaseRestService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public static function getParameterDefinitions()
    {
        return [
            'foo' => [],
            'bar' => [
                'foo' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'bar' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ],
        ];
    }


    public function foo(array $request)
    {
        return $this->callOperationAsync(
            'foo',
            'GET',
            '',
            $request,
            '\DTS\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(array $request)
    {
        return $this->callOperationAsync(
            'bar',
            'POST',
            '{foo}',
            $request,
            '\DTS\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
