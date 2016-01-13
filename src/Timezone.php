<?php namespace Raphaelb\Timezones;

use Carbon\Carbon;

class Timezone {

    /**
     * Take input as date & timezone as timezone.
     * @param $input
     * @param null $timezone
     * @return static
     */
    public function toTimezone ($input, $timezone = NULL)
    {
        return Carbon::createFromTimestamp(strtotime($input))
            ->timezone($timezone);
    }
}

