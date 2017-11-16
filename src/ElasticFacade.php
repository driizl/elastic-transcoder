<?php

namespace Driizl\Elastic;

class ElasticFacade extends Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'elastic';
    }
}
