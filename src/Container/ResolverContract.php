<?php declare(strict_types = 1);

namespace Venta\Contracts\Container;

/**
 * Interface ResolverContract
 *
 * @package Venta\Contracts\Container
 */
interface ResolverContract
{
    /**
     * Function, called on resolver in order to resolve item
     *
     * @param  ItemContract $item
     * @param  array $arguments
     * @return mixed
     */
    public function resolve(ItemContract $item, array $arguments = []);
}