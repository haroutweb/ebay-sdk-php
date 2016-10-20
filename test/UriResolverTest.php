<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\UriResolver;
use DTS\eBaySDK\Test\Mocks\StaticMethods;

class UriResolverTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaults()
    {
        $r = new UriResolver([
            'test' => [
                'array' => [
                    'valid' => ['array'],
                    'default' => ['foo', 'bar']
                ],
                'bool' => [
                    'valid' => ['bool'],
                    'default' => true
                ],
                'callable' => [
                    'valid' => ['int'],
                    'default' => [StaticMethods::class, 'defaultConfigValue']
                ],
                'int' => [
                    'valid' => ['int'],
                    'default' => -1
                ],
                'string' => [
                    'valid' => ['string'],
                    'default' => 'foo'
                ]
            ]
        ]);

        $this->assertEquals(
            $r->resolve('test', 'https://example.com', 'v1', 'item'),
            'https://example.com/v1/item?array=foo%2Cbar&bool=true&callable=-1&int=-1&string=foo'
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Unable to resolve uri parameters for bar
     */
    public function testOperationRequired()
    {
        $r = new UriResolver([
            'foo' => [
                'foo' => [
                    'valid' => ['int'],
                    'required' => true
                ]
            ]
        ]);
        $r->resolve('bar', 'https://example.com', 'v1', 'item');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Missing required uri parameters
     */
    public function testRequired()
    {
        $r = new UriResolver([
            'test' => [
                'foo' => [
                    'valid' => ['int'],
                    'required' => true
                ]
            ]
        ]);
        $r->resolve('test', 'https://example.com', 'v1', 'item');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected array, but got int(-1)
     */
    public function testValidatesArray()
    {
        $r = new UriResolver([
            'test' => [
                'foo' => [
                    'valid' => ['array']
                ]
            ]
        ]);
        $r->resolve('test', 'https://example.com', 'v1', 'item', ['foo' => -1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected bool, but got int(-1)
     */
    public function testValidatesBool()
    {
        $r = new UriResolver([
            'test' => [
                'foo' => [
                    'valid' => ['bool']
                ]
            ]
        ]);
        $r->resolve('test', 'https://example.com', 'v1', 'item', ['foo' => -1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected callable, but got int(-1)
     */
    public function testValidatesCallable()
    {
        $r = new UriResolver([
            'test' => [
                'foo' => [
                    'valid' => ['callable']
                ]
            ]
        ]);
        $r->resolve('test', 'https://example.com', 'v1', 'item', ['foo' => -1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected int, but got string(3)
     */
    public function testValidatesInt()
    {
        $r = new UriResolver([
            'test' => [
                'foo' => [
                    'valid' => ['int']
                ]
            ]
        ]);
        $r->resolve('test', 'https://example.com', 'v1', 'item', ['foo' => 'foo']);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected string, but got int(-1)
     */
    public function testValidatesStrings()
    {
        $r = new UriResolver([
            'test' => [
                'foo' => [
                    'valid' => ['string']
                ]
            ]
        ]);
        $r->resolve('test', 'https://example.com', 'v1', 'item', ['foo' => -1]);
    }

    public function testAllowsValid()
    {
        $r = new UriResolver([
            'test' => [
                'array' => [
                    'valid' => ['array']
                ],
                'bool' => [
                    'valid' => ['bool']
                ],
                'callable' => [
                    'valid' => ['callable']
                ],
                'int' => [
                    'valid' => ['int']
                ],
                'string' => [
                    'valid' => ['string']
                ]
            ]
        ]);

        $params = [
            'array' => [],
            'bool' => true,
            'callable' => function () {
            },
            'int' => 1,
            'string' => 'foo'
        ];
        $this->assertEquals(
            $r->resolve('test', 'https://example.com', 'v1', 'item', $params),
            'https://example.com/v1/item?array=&bool=true&callable=&int=1&string=foo'
        );
    }

    public function testFn()
    {
        $r = new UriResolver([
            'test' => [
                'foo' => [
                    'valid' => ['int'],
                    'fn' => [StaticMethods::class, 'applyConfigValue']
                ]
            ]
        ]);
        $this->assertEquals(
            $r->resolve('test', 'https://example.com', 'v1', 'item', ['foo' => 1]),
            'https://example.com/v1/item?foo=3'
        );
    }
}
