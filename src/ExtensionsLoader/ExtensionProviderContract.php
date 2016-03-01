<?php

namespace Venta\Contracts\ExtensionsLoader;

/**
 * Extension provider interface
 *
 * @package Venta\Contracts
 */
interface ExtensionProviderContract
{
    /**
     * This function is launched on application boot.
     * Array is expected as an output of this function,
     * where key is container alias and value is concrete to bind
     *
     * @return array
     */
    public function bindings();

    /**
     * Returns array with provided commands and console configuration
     *
     * @return array
     */
    public function commands();
}