<?php declare(strict_types = 1);

namespace Venta\Contracts\Application;

use Venta\Contracts\Container\ContainerAwareContract;
use Venta\Contracts\Extensions\ExtensionManagerAwareContract;

/**
 * Interface ApplicationContract
 *
 * @package Venta\Contracts\Application
 */
interface ApplicationContract extends ExtensionManagerAwareContract, ContainerAwareContract
{
    /**
     * Application boot function
     * Called first in a row, while launching application
     */
    public function boot();

    /**
     * Returns application version
     *
     * @return string
     */
    public function version(): string;

    /**
     * Returns application path
     * Argument is added to that path string, if passed
     *
     * @param  string $addition
     * @return string
     */
    public function path(string $addition = ''): string;

    /**
     * Bind item to container
     *
     * @param  string $alias
     * @param  mixed  $concrete
     * @param  bool   $shared
     */
    public function bind(string $alias, $concrete, bool $shared = false);

    /**
     * Bind shared item to container
     *
     * @param  string $alias
     * @param  mixed  $concrete
     */
    public function share(string $alias, $concrete);

    /**
     * Returns an item from container
     *
     * @param  string $alias
     * @return mixed
     */
    public function make(string $alias);

    /**
     * Resolves out of container and calls method on passed class and returns result
     *
     * @param  mixed $method
     * @param  array  $arguments
     * @return mixed
     */
    public function call($method, array $arguments = []);

    /**
     * Defines, if binding exists in container
     *
     * @param  string $alias
     * @return bool
     */
    public function has(string $alias): bool;

    /**
     * Returns path to extension providers file
     *
     * @return string
     */
    public function getExtensionProvidersFile(): string;

    /**
     * Application run function
     */
    public function run();

    /**
     * Function called on application termination
     */
    public function terminate();
}