<?php declare(strict_types = 1);

namespace Venta\Contracts\Container;

/**
 * Interface CallbackManagerContract
 *
 * @package Venta\Contracts\Container
 */
interface CallbackManagerContract
{
    /**
     * Add resolving callback to the stack
     *
     * @param  string $alias
     * @param  \Closure $callback
     * @return mixed
     */
    public function resolving(string $alias, \Closure $callback);

    /**
     * Add resolved callback to the stack
     *
     * @param  string $alias
     * @param  \Closure $callback
     * @return mixed
     */
    public function resolved(string $alias, \Closure $callback);

    /**
     * Fires all callbacks for specified item
     *
     * @param  mixed $resolving
     * @param  string $alias
     * @return mixed
     */
    public function fireCallbacks($resolving, string $alias);
}