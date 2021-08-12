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
}
