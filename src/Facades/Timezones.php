<?php

/*
 * This file is part of the Timezones package.
 *
 * Raphael Bronsveld <raphaelbronsveld@outlook.com>
 *
 * For the full license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Raphaelb\Timezones\Facades;

use Illuminate\Support\Facades\Facade;

class Timezones extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezones';
    }
}