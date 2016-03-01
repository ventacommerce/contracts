<?php

namespace Venta\Contracts\Kernel;

/**
 * Console kernel interface
 *
 * @package Venta\Contracts
 */
interface ConsoleKernelContract
{
    /**
     * Constructor function
     *
     * @param \Venta\Contracts\Application\ApplicationContract $app
     */
    public function __construct(\Venta\Contracts\Application\ApplicationContract $app);

    /**
     * Main kernel handle function
     *
     * @return int
     */
    public function handle();

    /**
     * Terminate function.
     * This function is executed after response is sent to browser
     *
     * @param  int $exitStatus
     * @return void
     */
    public function terminate($exitStatus);
}