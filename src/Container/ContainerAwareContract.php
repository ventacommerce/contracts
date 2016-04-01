<?php declare(strict_types = 1);

namespace Venta\Contracts\Container;

/**
 * Interface ContainerAwareContract
 *
 * @package Venta\Contracts
 */
interface ContainerAwareContract
{
    /**
     * Container setter
     *
     * @param ContainerContract $container
     */
    public function setContainer(ContainerContract $container);

    /**
     * Container getter
     *
     * @return ContainerContract
     */
    public function getContainer(): ContainerContract;
}