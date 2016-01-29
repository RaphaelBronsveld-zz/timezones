<?php namespace Raphaelb\Timezones;

use Carbon\Carbon;

class Timezone {

    /**
     * Take input and return a carbon instance.
     * @param $input
     * @param null $timezone
     * @return static
     */
    public function toTimezone ($input, $timezone = NULL)
    {

        $time =  Carbon::createFromTimestamp(strtotime($input))
                    ->timezone($timezone);

        return $time;
    }
}

