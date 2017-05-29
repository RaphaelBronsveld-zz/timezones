<?php

/*
 * This file is part of the Timezones package.
 *
 * Raphael Bronsveld <raphaelbronsveld@outlook.com>
 *
 * For the full license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Raphaelb\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('timezones', 'Raphaelb\Timezones\Timezones');
    }
}
