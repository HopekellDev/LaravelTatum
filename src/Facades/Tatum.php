<?php

namespace HopekellDev\LaravelTatum\Facades;

use Illuminate\Support\Facades\Facade;

class Tatum extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tatum';
    }
}
