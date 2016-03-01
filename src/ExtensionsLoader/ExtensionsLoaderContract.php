<?php

namespace Venta\Contracts\ExtensionsLoader;

/**
 * Extensions loader interface
 *
 * @package Venta\Contracts
 */
interface ExtensionsLoaderContract
{
    /**
     * Returns loaded data by it type name
     *
     * @param  string $type
     * @return mixed
     */
    public function getData($type);

    /**
     * Add extension provider to be loaded
     *
     * @param  string $provider
     * @return void
     */
    public function addExtensionProvider($provider);
}