<?php declare(strict_types = 1);

namespace Venta\Contracts\Container;

/**
 * Container interface
 *
 * @package Venta\Contracts\Container
 */
interface ContainerContract
{
    /**
     * Bind item to container
     *
     * @param  string $alias
     * @param  mixed $item
     * @param  bool $share
     * @throws \InvalidArgumentException
     */
    public function bind(string $alias, $item, bool $share = false);

    /**
     * Bind a singleton to container
     *
     * @param  string $alias
     * @param  mixed  $item
     */
    public function share(string $alias, $item);

    /**
     * Defines, if alias exists in container
     *
     * @param  string $alias
     * @return bool
     */
    public function has(string $alias): bool;

    /**
     * Convenient wrapper for get function
     *
     * @param  string $alias
     * @param  array  $arguments
     * @return mixed
     */
    public function make(string $alias, array $arguments = []);

    /**
     * Returns item out of container
     *
     * @param  string $id
     * @param  array $arguments
     * @return mixed
     */
    public function get($id, array $arguments = []);

    /**
     * Resolves out of container and calls method on passed class and returns result
     *
     * @param  string $method
     * @param  array  $arguments
     * @return mixed
     */
    public function call($method, array $arguments = []);

    /**
     * Tag container items for resolving at once
     *
     * @param  array $items
     * @param  string $tag
     */
    public function tag(array $items, string $tag);

    /**
     * Returns resolved all tagged items as an array
     *
     * @param  string $tag
     * @return array
     */
    public function tagged(string $tag): array;

    /**
     * Add callback to object resolving
     *
     * @param  string $className
     * @param  \Closure $callback
     */
    public function resolving(string $className, \Closure $callback);

    /**
     * Function, launched after item is resolved
     *
     * @param string $className
     * @param \Closure $callback
     */
    public function resolved(string $className, \Closure $callback);
}