#### Introduction
Timezones is a **Laravel** package providing additional Timezones functionality.
Very easy to use.



#### An example
```php

class Actor extends Model
{
    /**
     * @param $date
     * @return string
     */
    public function getCreatedAtAttribute($date)
    {
        return Timezone::toTimezone($date, 'GMT');
    }

    /**
     * @param $date
     * @return string
     */
    public function getUpdatedAtAttribute($date)
    {
        return Timezone::toTimezone($date, 'PST');
    }
}

```


#### Copyright/License
Copyright 2015 [Raphael Bronsveld](https://github.com/RaphaelBronsveld) - [MIT Licensed](http://RaphaelBronsveld.mit-license.org)