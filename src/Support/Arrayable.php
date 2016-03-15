<?php

namespace Venta\Contracts\Support;

/**
 * Interface Arrayable
 *
 * @package Venta\Contracts
 */
interface Arrayable
{
    /**
     * Returns object representation as an array
     *
     * @return array
     */
    public function toArray();
}