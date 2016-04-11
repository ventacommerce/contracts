<?php declare(strict_types = 1);

namespace Venta\Contracts\Event;

use Ds\PriorityQueue;

/**
 * Interface EventContract
 *
 * @package Venta\Contracts\Event
 */
interface EventContract
{
    /**
     * Construct function.
     * Insuring event can be constructed with name and observers
     *
     * @param string $name
     * @param PriorityQueue|null $observers
     */
    public function __construct(string $name, PriorityQueue $observers = null);

    /**
     * Returns event name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Function to prevent event propagation
     */
    public function stop();

    /**
     * Defines, if event was stopped
     *
     * @return bool
     */
    public function wasStopped(): bool;

    /**
     * Event data setter
     *
     * @param  string $key
     * @param  mixed $value
     */
    public function setData(string $key, $value);

    /**
     * Event data getter.
     * If not key is passed, array of all data is returned
     *
     * @param  string|null $key
     * @param  null $default
     * @return mixed
     */
    public function getData(string $key = null, $default = null);

    /**
     * Add new observer to an event
     *
     * @param  callable $observer
     * @param  int $priority
     */
    public function addObserver(callable $observer, int $priority = 0);

    /**
     * Defines, if event has any observers
     *
     * @return bool
     */
    public function hasObservers(): bool;

    /**
     * Returns array with all of observers
     *
     * @return array
     */
    public function getObservers(): array;
}