<?php
namespace DTS\eBaySDK\Test\Browse\Mocks;

use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \DTS\eBaySDK\Browse\Services\BrowseBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public static function getParameterDefinitions()
    {
        return [
            'testOperation' => []
        ];
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            'POST',
            '',
            ['body' => new ComplexClass()],
            '\DTS\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
