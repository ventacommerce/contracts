<?php declare(strict_types = 1);

namespace Venta\Contracts\Container;

/**
 * Interface ItemContract
 *
 * @package Venta\Contracts\Event
 */
interface ItemContract
{
    /**
     * Item construct function
     *
     * @param  mixed $item
     * @param  bool $share
     */
    public function __construct($item, bool $share = false);

    /**
     * Main item resolving function
     *
     * @param  array $arguments
     * @return mixed
     */
    public function resolve(array $arguments = []);

    /**
     * Called on one method resolving out of container
     *
     * @param  array $arguments
     * @return mixed
     */
    public function call(array $arguments = []);

    /**
     * Returns item, we are trying to resolve
     *
     * @return mixed
     */
    public function getResolvingItem();
}