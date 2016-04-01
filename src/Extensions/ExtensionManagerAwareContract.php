<?php declare(strict_types = 1);

namespace Venta\Contracts\Extensions;

/**
 * Interface ExtensionManagerAwareContract
 *
 * @package Venta\Contracts\Extensions
 */
interface ExtensionManagerAwareContract
{
    /**
     * Extensions manager setter
     *
     * @param  ManagerContract $manager
     */
    public function setExtensionsManager(ManagerContract $manager);

    /**
     * Extensions manager getter
     *
     * @return ManagerContract
     */
    public function getExtensionManager(): ManagerContract;
}