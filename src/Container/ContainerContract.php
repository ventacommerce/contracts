<?php

namespace Venta\Contracts\Container;

/**
 * Container interface
 *
 * @package Venta\Contracts
 */
interface ContainerContract extends \Interop\Container\ContainerInterface
{
    /**
     * Add definition to container
     *
     * @param  string $alias
     * @param  mixed $concrete
     * @return void
     */
    public function bind($alias, $concrete);

    /**
     * Add shared definition to container
     *
     * @param  string $alias
     * @param  mixed $concrete
     * @return void
     */
    public function share($alias, $concrete);

    /**
     * Convenient wrapper for get function
     *
     * @param  string $alias
     * @return mixed
     */
    public function make($alias);

    /**
     * Resolves out of container and calls method on passed class and returns result
     *
     * @param  string $method
     * @param  array  $arguments
     * @return mixed
     */
    public function call($method, $arguments = []);

    /**
     * Performs rewrite of existing definition in container
     *
     * @param  string $alias
     * @param  mixed $item
     * @return void
     */
    public function rewrite($alias, $item);
}