<?php declare(strict_types = 1);

namespace Venta\Contracts\Extensions;

use Venta\Contracts\Extensions\ManagerContract;

/**
 * Interface MethodContract
 *
 * @package Venta\Contracts
 */
interface MethodContract extends ExtensionManagerAwareContract
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
     * @return mixed|array|null
     */
    public function getArguments();

    /**
     * Returns method name as usable string for calling on object
     *
     * @return string
     */
    public function getMethodName(): string;
}