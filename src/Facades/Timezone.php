<?php namespace Raphaelb\Timezones\Facades;

use Illuminate\Support\Facades\Facade;

class Timezone extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezone';
    }
}