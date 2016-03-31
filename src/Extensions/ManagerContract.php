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
     * Add new data loading method for extension loader to support
     *
     * @param  MethodContract $method
     */
    public function addMethod(MethodContract $method);

    /**
     * Defines, if method exists
     *
     * @param  string $name
     * @return bool
     */
    public function hasMethod(string $name): bool;

    /**
     * Alias for hasMethod()
     *
     * @param  string $name
     * @return bool
     */
    public function supports(string $name): bool;

    /**
     * Calls method on extension provider
     *
     * @param string $name
     */
    public function call(string $name);
}