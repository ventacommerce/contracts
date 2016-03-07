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
     * @param  \Venta\ExtensionsLoader\Collectors\BindingsCollector $container
     * @return array
     */
    public function bindings($container);

    /**
     * Returns array with provided commands and console configuration
     *
     * @return array
     */
    public function commands();
}