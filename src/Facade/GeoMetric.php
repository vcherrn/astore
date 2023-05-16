<?php

namespace Apackage\Astore\Facade;
use Illuminate\Support\Facades\Facade;


class GeoMetric extends Facade
{
    
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * 
     */
    protected static function getFacadeAccessor()
    {
        return 'geometric';
    }

}