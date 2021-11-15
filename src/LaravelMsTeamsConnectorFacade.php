<?php

namespace Cberane\LaravelMsTeamsConnector;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cberane\LaravelMsTeamsConnector\Skeleton\SkeletonClass
 */
class LaravelMsTeamsConnectorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-ms-teams-connector';
    }
}
