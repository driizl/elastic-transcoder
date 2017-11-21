<?php

namespace Driizl\Elastic;

use Illuminate\Support\Facades\Facade;

class ElasticFacade extends Facade
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
