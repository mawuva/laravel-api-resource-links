<?php

namespace Mawuekom\ApiResourceLinks;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\ApiResourceLinks\Skeleton\SkeletonClass
 */
class ApiResourceLinksFacade extends Facade
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
