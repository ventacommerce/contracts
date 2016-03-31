<?php declare(strict_types = 1);

namespace Venta\Contracts\Extensions;

use Venta\Contracts\Extensions\ManagerContract;

/**
 * Interface MethodContract
 *
 * @package Venta\Contracts
 */
interface MethodContract
{
    /**
     * Defines method name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns array of arguments to be passed into called method
     *
     * @return array
     */
    public function getArguments(): array;

    /**
     * Normalises data for returning result.
     * This method receives same arguments, returned from static::getArguments() method.
     * Return value of this method will be returned as call result
     *
     * @param  mixed $arguments
     * @return mixed
     */
    public function getReturnValue(...$arguments);

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