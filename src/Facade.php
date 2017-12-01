<?php

namespace AntwerpFactory\LightspeedRestaurant;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return LightspeedRestaurant::class;
    }
}
