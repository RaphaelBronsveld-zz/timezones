![Laravel logo](http://laravel.com/assets/img/laravel-logo.png)  Laravel Timezones
========================

[![Build Status](https://img.shields.io/badge/build-passing-brightgreen.svg)](https://packagist.org/packages/raphaelb/timezones)
[![GitHub Version](https://img.shields.io/github/release/raphaelbronsveld/timezones.svg?branch=master&style=flat-square)](https://packagist.org/packages/raphaelb/timezones)
[![Code Coverage](https://img.shields.io/badge/coverage-100%-green.svg?style=flat-square)](https://packagist.org/packages/raphaelb/timezones)
[![Total Downloads](https://img.shields.io/packagist/dt/raphaelb/timezones.svg?style=flat-square)](https://packagist.org/packages/raphaelb/timezones)
[![License](http://img.shields.io/badge/license-MIT-ff69b4.svg?style=flat-square)](http://RaphaelBronsveld.mit-license.org)


| **Laravel** | 5.1 |
|:-----------:|:----:|
| Timezones |  [v1.2](https://packagist.org/packages/raphaelb/timezones) |
  
**Laravel** package providing easy Timezone functionality via the Carbon class & making your code cleaner.

## 1.2 Released
- [**Additional Features**]
    
Extra timezone usability.

###### Composer
```JSON
"raphaelb/timezones": "~1.2"
```

###### Laravel
```php
//Add to the providers array in your app config file.
Raphaelb\Timezones\TimezoneServiceProvider::class

//Add to the alias array in your app config file.
'Timezone'  => Raphaelb\Timezones\Facades\Timezone::class,

use Timezone;
```

###### Features
```
Index page with controller/route/view to demonstrate @ 'yoursite.com/timezones/{timezone}'
Returning carbon instances so you can do whatever you want.
```

###### Examples
```php
return Timezone::toTimezone($date, 'GMT');

print Timezone::toTimezone($date, 'PST')->format('d-m-Y');

return Timezone::toTimezone('11:32 13-1-2016', 'CST');
```

### Copyright/License
Copyright 2016 [Raphael Bronsveld](https://github.com/RaphaelBronsveld) - [MIT Licensed](http://RaphaelBronsveld.mit-license.org) 