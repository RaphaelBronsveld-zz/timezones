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
        return Timezone::toGMT($date);
    }

    /**
     * @param $date
     * @return string
     */
    public function getUpdatedAtAttribute($date)
    {
        return Timezone::toGMT($date)->format('d-m-Y');
    }
}

```


#### Copyright/License
Copyright 2015 [Raphael Bronsveld](https://github.com/RaphaelBronsveld) - [MIT Licensed](http://RaphaelBronsveld.mit-license.org)