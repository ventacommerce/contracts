<?php declare(strict_types = 1);

namespace Venta\Contracts\Event;

use Venta\Contracts\Event\EventContract;

/**
 * Interface DispatcherContract
 *
 * @package Venta\Contracts\Event
 */
interface DispatcherContract
{
    /**
     * Add new event observer
     *
     * @param string $name
     * @param callable $listener
     * @param int $priority
     */
    public function observe(string $name, callable $listener, int $priority = 0);

    /**
     * Fire an event
     *
     * @param  string $name
     * @param  array $arguments
     * @param  callable $stepCallback
     * @return EventContract
     */
    public function dispatch(string $name, array $arguments = [], callable $stepCallback = null): EventContract;

    /**
     * Returns observers array for an event
     *
     * @param  string $name
     * @return array
     */
    public function getObservers(string $name): array;

    /**
     * Defines, if event has any observers
     *
     * @param  string $name
     * @return bool
     */
    public function hasObservers(string $name): bool;
}