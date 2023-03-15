<?php

if (!function_exists('pageInfo')) {
    /**
     * Function get page info
     * 
     * @param Collection $resource
     * @return array
     */
    function pageInfo($resource)
    {
        return [
            'page' => $resource->currentPage(),
            'total' => $resource->total(),
        ];
    }
}
