<?php

namespace Venta\Contracts\Configuration;

use Venta\Contracts\Support\Arrayable;

/**
 * Interface ConfigurationReaderContract
 *
 * @package Venta\Contracts
 */
interface ConfigurationSourceContract extends Arrayable
{
    /**
     * Returns reader name
     *
     * @throws \LogicException
     * @return string
     */
    public function getName();

    /**
     * Main read function, called by configuration loader
     * Should return array of loaded configuration for this particular reader
     *
     * @param  array $data
     * @return array
     */
    public function read(array $data = []);

    /**
     * {@inheritdoc}
     *
     * @param  array $data
     * @return array
     */
    public function toArray(array $data = []);
}