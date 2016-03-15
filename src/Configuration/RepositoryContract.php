<?php

namespace Venta\Contracts\Configuration;

use Venta\Contracts\Support\Arrayable;

/**
 * Interface RepositoryContract
 *
 * @package Venta\Contracts
 */
interface RepositoryContract extends \ArrayAccess, Arrayable
{
    /**
     * Insuring repo can be constructed with items
     *
     * @param array $items
     */
    public function __construct(array $items = []);

    /**
     * Returns configuration item
     *
     * @param  string $key
     * @param  null $default
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Configuration item setter
     *
     * @param  string|array $key
     * @param  mixed $value
     * @return void
     */
    public function set($key, $value);

    /**
     * Defines, if item exists
     *
     * @param  string $key
     * @return mixed
     */
    public function has($key);

    /**
     * Returns configuration array
     *
     * @return array
     */
    public function all();
}