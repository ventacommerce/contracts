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
     * Function, called on application booting
     *
     * @param  ApplicationContract $application
     */
    public function booting(ApplicationContract $application);

    /**
     * Function, called on application run
     *
     * @param  ApplicationContract $application
     */
    public function run(ApplicationContract $application);

    /**
     * Function, called on application terminate
     *
     * @param  ApplicationContract $application
     */
    public function terminate(ApplicationContract $application);
}