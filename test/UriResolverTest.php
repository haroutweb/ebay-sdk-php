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
            'https://example.com/v1/item?array=foo%2Cbar&bool=true&callable=-1&int=-1&string=foo',
            $r->resolve('test', 'https://example.com', 'v1', 'item')
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
            'https://example.com/v1/item?array=&bool=true&callable=&int=1&string=foo',
            $r->resolve('test', 'https://example.com', 'v1', 'item', $params)
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
            'https://example.com/v1/item?foo=3',
            $r->resolve('test', 'https://example.com', 'v1', 'item', ['foo' => 1])
        );
    }

    public function testFillsInPathParameters()
    {
        $r = new UriResolver([
            'test' => [
                'path1' => [
                    'valid' => ['string']
                ],
                'path2' => [
                    'valid' => ['string']
                ],
                'param1' => [
                    'valid' => ['string']
                ],
                'param2' => [
                    'valid' => ['string']
                ]
            ]
        ]);
        $this->assertEquals(
            'https://example.com/v1/item/foo/bar?param1=baz&param2=shaz',
            $r->resolve('test', 'https://example.com', 'v1', 'item/{path1}/{path2}', [
                'path1' => 'foo',
                'path2' => 'bar',
                'param1' => 'baz',
                'param2' => 'shaz'
            ])
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Unknown uri parameter "bar" provided
     */
    public function testParamMustExist()
    {
        $r = new UriResolver([
            'test' => [
                'foo' => [
                    'valid' => ['string']
                ]
            ]
        ]);
        $r->resolve('test', 'https://example.com', 'v1', 'item', ['bar' => -1]);
    }
}
