<?php

namespace Venta\Contracts\Application;

/**
 * Application interface
 *
 * @package Venta\Contracts
 */
interface ApplicationContract
{
    /**
     * Construct function
     * If options as passed as a string, then it is assumed base path only is passed
     *
     * @param string|array $options
     */
    public function __construct($options = []);

    /**
     * Returns application root path
     *
     * @param  null|mixed $postfix
     * @return string
     */
    public function path($postfix = null);

    /**
     * Returns application version
     *
     * @return string
     */
    public function version();

    /**
     * Bind item to container
     *
     * @param  string $alias
     * @param  mixed  $item
     * @return void
     */
    public function bind($alias, $item);

    /**
     * Bind shared item to container
     *
     * @param  string $alias
     * @param  mixed  $item
     * @return void
     */
    public function share($alias, $item);

    /**
     * Returns an item from container
     *
     * @param  string $alias
     * @return mixed
     */
    public function make($alias);

    /**
     * Performs rewrite of existing definition in container
     *
     * @param  string $alias
     * @param  mixed $item
     * @return void
     */
    public function rewrite($alias, $item);

    /**
     * Resolves out of container and calls method on passed class and returns result
     *
     * @param  string $method
     * @param  array  $arguments
     * @return mixed
     */
    public function call($method, $arguments = []);

    /**
     * Defines, if binding exists in container
     *
     * @param  string $alias
     * @return bool
     */
    public function has($alias);

    /**
     * Defines environment name
     *
     * @return string
     */
    public function environment();

    /**
     * Runs application
     *
     * @return void
     */
    public function run();

    /**
     * Function called on application termination
     *
     * @return void
     */
    public function terminate();
}