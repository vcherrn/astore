<?php

namespace Apackage\Astore\Facade;
use Illuminate\Support\Facades\Facade;


class Currency extends Facade
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
        return 'currency';
    }

}