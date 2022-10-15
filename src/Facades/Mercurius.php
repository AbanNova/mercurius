<?php

namespace AbanNova\Mercurius\Facades;

use Illuminate\Support\Facades\Facade;

class Mercurius extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mercurius';
    }
}
