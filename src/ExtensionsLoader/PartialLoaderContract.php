<?php

namespace Venta\Contracts\ExtensionsLoader;

/**
 * Partial loader contract.
 * There loaders are responsible for loading different extension provided parts
 *
 * @package Venta\Contracts
 */
interface PartialLoaderContract
{
    /**
     * Main loading function, called by extensions loader
     *
     * @param  \Venta\Contracts\ExtensionsLoader\ExtensionProviderContract[] $providers
     * @return mixed
     */
    public function load($providers);
}