<?php
namespace DTS\eBaySDK\Test\Mocks;

class BaseRestService extends \DTS\eBaySDK\Services\BaseRestService
{
    protected static $endPoints = [
        'sandbox'    => 'http://sandbox.com',
        'production' => 'http://production.com'
    ];

    protected static $operations =  [
        'foo' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ],
        'bar' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => 'v1',
                'required' => true
            ]
        ];
    }

    protected function getEbayHeaders()
    {
        return [];
    }
}
