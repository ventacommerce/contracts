<?php declare(strict_types = 1);

namespace Venta\Contracts\Extensions;

/**
 * Interface CollectorContract
 *
 * @package Venta\Contracts\Extensions
 */
interface CollectorContract
{
    /**
     * Returns collected data
     *
     * @return mixed
     */
    public function getCollectedData();
}