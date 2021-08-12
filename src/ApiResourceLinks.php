<?php

namespace Mawuekom\ApiResourceLinks;

trait ApiResourceLinks
{
    /**
     * Format api resource link.
     * 
     * @param string $$resource_route
     * @param int|string $$resource_id
     * 
     * @return array
     */
    public function resourceLinks(string $resource_route, int|string $resource_id): array
    {
        return [
            'show'      => url($resource_route . '/' . $resource_id),
            'update'    => url($resource_route . '/' . $resource_id),
            'delete'    => url($resource_route . '/' . $resource_id),
        ];
    }

    /**
     * Format api resource link in details.
     * 
     * @param string $$resource_route
     * @param int|string $$resource_id
     * 
     * @return array
     */
    public function resourceLinksDetails(string $resource_route, int|string $resource_id): array
    {
        return [
            'show'          => [
                'method'    => 'get',
                'action'    => url($resource_route . '/' . $resource_id),
            ],

            'update'        => [
                'method'    => 'put',
                'action'    => url($resource_route . '/' . $resource_id)
            ],

            'delete'        => [
                'method'    => 'delete',
                'action'    => url($resource_route . '/' . $resource_id)
            ],
        ];
    }

    /**
     * Format api resource collection link.
     *
     * @param string $resource_route
     *
     * @return array
     */
    public function collectionLinks(string $resource_route): array
    {
        return [
            'index' => url($resource_route),
            'store' => url($resource_route),
        ];
    }

    /**
     * Format api resource collection link in details
     *
     * @param string $resource_route
     *
     * @return array
     */
    public function collectionLinksDetails(string $resource_route): array
    {
        return [
            'index'         => [
                'method'    => 'get',
                'action'    => url($resource_route)
            ],

            'store'         => [
                'method'    => 'post',
                'action'    => url($resource_route)
            ],
        ];
    }
}
