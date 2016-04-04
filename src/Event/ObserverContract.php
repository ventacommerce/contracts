<?php declare(strict_types = 1);

namespace Venta\Contracts\Event;

/**
 * Interface ObserverContract
 *
 * @package Venta\Contracts\Event
 */
interface ObserverContract
{
    /**
     * Function, called in order to handle an event
     *
     * @param EventContract $event
     */
    public function handle(EventContract $event);
}