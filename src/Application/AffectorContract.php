<?php declare(strict_types = 1);

namespace Venta\Contracts\Application;

use Venta\Contracts\Event\EventContract;

/**
 * Interface AffectorContract
 *
 * @package Venta\Contracts
 */
interface AffectorContract
{
    /**
     * Main affector function
     *
     * @param ApplicationContract $application
     */
    public function affect(ApplicationContract $application);

    /**
     * Wrapper for affect function, in order to make it callable
     *
     * @param EventContract $event
     */
    public function __invoke(EventContract $event);
}