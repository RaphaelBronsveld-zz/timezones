![Laravel logo](http://laravel.com/assets/img/laravel-logo.png)  Laravel Timezones
========================

[![Build status](https://travis-ci.org/RaphaelBronsveld/timezones.svg?branch=master)](https://travis-ci.org/RaphaelBronsveld/timezones)
[![GitHub Version](https://img.shields.io/github/release/raphaelbronsveld/timezones.svg?branch=master&style=flat-square)](https://packagist.org/packages/raphaelb/timezones)
[![Total Downloads](https://img.shields.io/packagist/dt/raphaelb/timezones.svg?style=flat-square)](https://packagist.org/packages/raphaelb/timezones)
[![License](http://img.shields.io/badge/license-MIT-ff69b4.svg?style=flat-square)](http://RaphaelBronsveld.mit-license.org)

| Timezones | v1.3 |
  
**Laravel** package providing easy Timezone functionality.

Made for people who really just want to have an easy way of going about dealing with time issues. 

###### Composer require
```JSON
"raphaelb/timezones": "~1.3"
```

###### Laravel
```php
Raphaelb\Timezones\TimezonesServiceProvider::class,
'Timezones'  => Raphaelb\Timezones\Facades\Timezones::class

use Raphaelb\Timezones\Facades\Timezones;
```

###### Examples

```php
class User {

    // Accessors in model class.
    
    /**
     * Get created_at attr.
     * @param $date
     * @return string
     */
    public function getCreatedAtAttribute($date)
    {
        return app('timezones')
            ->toTimezone($date, 'gmt')
            ->format('d-m-Y H:i:s');
    }

    /**
     * Get updated_at attr.
     * 
     * @param $date
     * @return string
     */
    public function getUpdatedAtAttribute($date)
    {
        return app('timezones')
                ->toTimezone($date, 'gmt')
                ->format('d-m-Y H:i:s');
    }
    
    /**
     * Or inject a format when you know the given one. 
     * Otherwise Carbon will fail. 
     */
    public function time()
    {
        // Constructor accepts a different format for your needs.
        $time = new Timezones('m-d-Y H:i:s');
        return $time->toTimezone('09-03-2016 16:00:00', 'EST');
    }
        
}
```
### License
[MIT Licensed](http://RaphaelBronsveld.mit-license.org) 
