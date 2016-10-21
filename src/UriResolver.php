<?php
namespace DTS\eBaySDK;

/**
 * @internal Resolves a resource uri.
 */
class UriResolver
{
    /** @var array */
    private $definitions;

    /** @var array Map of type to function that confirms type. */
    private static $typeMap = [
        'array' => 'is_array',
        'bool' => 'is_bool',
        'callable' => 'is_callable',
        'int' => 'is_int',
        'string' => 'is_string'
    ];

    /**
     * @param array $definitions Definitions for each operation uri parameters.
     */
    public function __construct($definitions)
    {
        $this->definitions = $definitions;
    }

    /**
     * Resolve and validate the passed uri.
     *
     * @param string $operation Operation's name.
     * @param string $uri Uri to resolve.
     * @param string $version API version.
     * @param string $resource The name of the resource.
     * @param array $parameters Associative array of uri parameters for the operation.
     *
     * @return string Returns a resolved resource uri.
     * @throws \InvalidArgumentException.
     */
    public function resolve($operation, $uri, $version, $resource, array $parameters = [])
    {
        if (!array_key_exists($operation, $this->definitions)) {
            throw new \InvalidArgumentException("Unable to resolve uri parameters for $operation");
        }

        foreach ($parameters as $param => $value) {
            if (!array_key_exists($param, $this->definitions[$operation])) {
                throw new \InvalidArgumentException("Unknown uri parameter \"$param\" provided");
            }
        }

        foreach ($this->definitions[$operation] as $key => $def) {
            if (!isset($parameters[$key])) {
                if (isset($def['default'])) {
                    $parameters[$key] = is_callable($def['default'])
                        ? $def['default']($parameters)
                        : $def['default'];
                } elseif (empty($def['required'])) {
                    continue;
                } else {
                    $this->throwRequired($parameters);
                }
            }

            $this->checkType($def['valid'], $key, $parameters[$key]);

            if (isset($def['fn'])) {
                $def['fn']($parameters[$key], $parameters);
            }
        }

        return $uri.'/'.$version.'/'.$this->fillPathParams($resource, $parameters).$this->queryParameters($parameters);
    }

    private function checkType($valid, $name, $provided)
    {
        foreach ($valid as $check) {
            if (isset(self::$typeMap[$check])) {
                $fn = self::$typeMap[$check];
                if ($fn($provided)) {
                    return;
                }
            } elseif ($provided instanceof $check) {
                return;
            }
        }

        $expected = implode('|', $valid);
        $msg = sprintf(
            'Invalid uri parameter value provided for "%s". Expected %s, but got %s',
            $name,
            $expected,
            describeType($provided)
        );
        throw new \InvalidArgumentException($msg);
    }

    private function throwRequired($parameters)
    {
        $missing = [];

        foreach ($this->definitions as $key => $def) {
            if (empty($def['required'])
                || isset($def['default'])
                || array_key_exists($key, $parameters)
            ) {
                continue;
            }
            $missing[] = $key;
        }

        $msg = "Missing required uri parameters: \n\n";
        $msg .= implode("\n\n", $missing);
        throw new \InvalidArgumentException($msg);
    }

    private function fillPathParams($uri, &$params)
    {
        return preg_replace_callback('/{(\S+)}/U', function ($matches) use (&$params) {
            $path = $matches[1];
            if (array_key_exists($path, $params)) {
                $value = $params[$path];
                unset($params[$path]);
            } else {
                $value = $path;
            }
            return $value;
        }, $uri);
    }

    private function queryParameters($parameters)
    {
        $query = [];
        foreach ($parameters as $param => $value) {
            if (is_array($value)) {
                $value = join(',', $value);
            } else if (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            } else if (is_callable($value)) {
                $value = $value();
            }
            $query[] = $param.'='.urlencode($value);
        }
        return '?'.join('&', $query);
    }
}
