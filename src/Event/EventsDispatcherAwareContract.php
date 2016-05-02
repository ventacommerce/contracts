<?php declare(strict_types = 1);

namespace Venta\Contracts\Event;

use Venta\Contracts\Event\DispatcherContract;

/**
 * Interface EventsDispatcherAwareContract
 *
 * @package Venta\Contracts\Event
 */
interface EventsDispatcherAwareContract
{
    /**
     * Events dispatcher setter
     *
     * @param DispatcherContract $dispatcher
     */
    public function setEventsDispatcher(DispatcherContract $dispatcher);

    /**
     * Events dispatcher getter
     *
     * @return DispatcherContract
     */
    public function getEventsDispatcher(): DispatcherContract;
}