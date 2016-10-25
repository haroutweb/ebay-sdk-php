<?php
namespace DTS\eBaySDK\Test\Mocks;

class RestService extends \DTS\eBaySDK\Test\Mocks\BaseRestService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function foo(array $request = [])
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }

    public function bar(array $request = [])
    {
        return $this->callOperationAsync('bar', $request)->wait();
    }
}
