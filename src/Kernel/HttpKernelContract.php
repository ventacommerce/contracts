<?php

namespace Venta\Contracts\Kernel;

/**
 * Interface HttpKernelInterface
 *
 * @package Venta\Contracts
 */
interface HttpKernelContract
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
     * @param  \Venta\Http\Interfaces\RequestInterface $request
     * @return \Venta\Http\Interfaces\ResponseInterface
     */
    public function handle($request);

    /**
     * Terminate function.
     * This function is executed after response is sent to browser
     *
     * @param  \Venta\Http\Interfaces\RequestInterface $request
     * @param  \Venta\Http\Interfaces\ResponseInterface $response
     * @return void
     */
    public function terminate($request, $response);
}