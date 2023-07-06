<?php

namespace Saifur\LogViewer\app\Facades\Helpers;

use Illuminate\Support\Facades\Facade;

class SLVCommonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'slvcommonhelper';
    }
}
