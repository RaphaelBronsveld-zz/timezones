#### Introduction

Timezones is a **Laravel** package providing additional Time functionality.

Very easy to use.

=======

#### Live updating example
```php
// First off all get the view.

php artisan vendor:publish

// Access the page at yourpage.com/timezones/{timezone}
```

#### Real life example 

```php
class User {
    
    /**
     * Resolving from the container.
     */
    public function getCreatedAtAttribute($date)
    {
        return app()->make('timezones')->toTimezone($date, 'GMT');
    }
    
    /**
     * Getting an instance the facade way.
     */
    public function getUpdatedAtAttribute($date)
    {
        return Timezones::toTimezone($date, 'PST');
    }
    
    /**
     * Or step by step.
     */
    public function time()
    {
        // Constructor accepts a different format for your needs.
        $time = new Timezones('m-d-Y H:i:s');
        return $time->toTimezone('09-03-2016 16:00:00', 'EST');
    }
        
}
```

#### Copyright/License
Copyright 2015 [Raphael Bronsveld](https://github.com/RaphaelBronsveld) - [MIT Licensed](http://RaphaelBronsveld.mit-license.org)