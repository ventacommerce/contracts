<?php declare(strict_types = 1);

namespace Venta\Contracts\Extensions;

/**
 * Interface ManagerContract
 *
 * @package Venta\Contracts\Extensions
 */
interface ManagerContract
{
    /**
     * Add extension provider to the stack
     *
     * @param ProviderContract $provider
     * @param int $priority
     */
    public function addExtensionProvider(ProviderContract $provider, int $priority = null);
    
    /**
     * Calls method on extension provider
     *
     * @param  string $name
     * @param  array ...$arguments
     */
    public function call(string $name, ...$arguments);
}