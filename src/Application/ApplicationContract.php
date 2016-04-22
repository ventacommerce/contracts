<?php declare(strict_types = 1);

namespace Venta\Contracts\Application;

use Interop\Container\ContainerInterface;

/**
 * Interface ApplicationContract
 *
 * @package Venta\Contracts\Application
 */
interface ApplicationContract extends ContainerInterface
{
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
    public function path(string $addition = null): string;

    /**
     * Add application affector
     *
     * @param  AffectorContract $affector
     * @return $this
     */
    public function addApplicationAffector(AffectorContract $affector);

    /**
     * Returns application singleton instance
     *
     * @return ApplicationContract
     */
    public static function getInstance(): ApplicationContract;

    /**
     * Application boot function
     * Called first in a row, while launching application
     */
    public function boot();

    /**
     * Application run function
     */
    public function run();

    /**
     * Function called on application termination
     */
    public function terminate();
    
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
}