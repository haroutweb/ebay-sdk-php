<?php
namespace DTS\eBaySDK\Test\Mocks;

class BaseRestService extends \DTS\eBaySDK\Services\BaseRestService
{
    public function __construct(array $config)
    {
        parent::__construct('http://production.com', 'http://sandbox.com', $config);
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
