![Laravel logo](http://laravel.com/assets/img/laravel-logo.png)  Laravel Timezones
========================

[![Build Status](https://img.shields.io/badge/build-passing-brightgreen.svg)](https://packagist.org/packages/raphaelb/timezones)
[![GitHub Version](https://img.shields.io/github/release/raphaelbronsveld/timezones.svg?branch=master&style=flat-square)](https://packagist.org/packages/raphaelb/timezones)
[![Code Coverage](https://img.shields.io/badge/coverage-100%-green.svg?style=flat-square)](https://packagist.org/packages/raphaelb/timezones)
[![Total Downloads](https://img.shields.io/packagist/dt/raphaelb/timezones.svg?style=flat-square)](https://packagist.org/packages/raphaelb/timezones)
[![License](http://img.shields.io/badge/license-MIT-ff69b4.svg?style=flat-square)](http://RaphaelBronsveld.mit-license.org)


| **Laravel** | 5.1 |
|:-----------:|:----:|
| Timezones | [v1.1](tree/master) |
  
**Laravel** package providing easy Timezone functionality via the Carbon class.

## 1.1 Released
- [**Additional Features**]
    
Extra timezone usability.

###### Composer
```JSON
"raphaelb/timezones": "~1.1"
```

###### Laravel
```php
Raphaelb\Timezones\TimezoneServiceProvider::class
'Timezone'  => Raphaelb\Timezones\Facades\Timezone::class,

use Timezone;
```

###### Examples
```php
//Always returning Carbon instances so you can do whatever you want with it.

return Timezone::toGMT($date);

return Timezone::toPST($date)->format('d-m-Y');
```

### Copyright/License
Copyright 2016 [Raphael Bronsveld](https://github.com/RaphaelBronsveld) - [MIT Licensed](http://RaphaelBronsveld.mit-license.org) 