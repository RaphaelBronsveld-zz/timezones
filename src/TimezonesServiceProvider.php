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

class TimezonesServiceProvider extends ServiceProvider {

    /**
     * boot method
     */
    public function boot() {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');

        $this->publishes([
                __DIR__.'/views' => base_path('resources/views/raphaelb/timezones'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Raphaelb\Timezones\TimezonesController');

        $this->app->bind('timezones', 'Raphaelb\Timezones\Timezones');

    }
}
