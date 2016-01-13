<?php namespace Raphaelb\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider {

    /**
     * If you don't like the default styling, create your own view via artisan vendor:publish.
     *
     * @return void
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

        $this->app->bind('timezone', 'Raphaelb\Timezones\Timezone');

    }
}
