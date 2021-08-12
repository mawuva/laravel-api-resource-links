<?php

namespace Mawuekom\LaravelApiResourceLinks;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelApiResourceLinks\Skeleton\SkeletonClass
 */
class LaravelApiResourceLinksFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-api-resource-links';
    }
}
