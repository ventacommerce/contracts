<?php

namespace Venta\Contracts\Configuration;

use Venta\Contracts\Support\Arrayable;

/**
 * Interface ConfigurationLoaderContract
 *
 * @package Venta\Contracts
 */
interface ConfigurationLoaderContract extends Arrayable
{
    /**
     * Add configuration reader to loader
     *
     * @param  \Venta\Contracts\Configuration\ConfigurationSourceContract $reader
     * @param  int $priority
     * @return void
     */
    public function addSource(ConfigurationSourceContract $reader, $priority = 0);

    /**
     * Perform reading of all configuration available
     *
     * @param  array $data
     * @return array
     */
    public function performReading(array $data = []);
}