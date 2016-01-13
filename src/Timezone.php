<?php namespace Raphaelb\Timezones;

use Carbon\Carbon;

class Timezone {

    /**
     * Time to the PST timezone.
     * @param $input
     * @return static
     */
    public function toPST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('America/Los_Angeles');
    }

    /**
     * Time to the GMT timezone.
     * @param $input
     * @return static
     */
    public function toGMT($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('Europe/London');
    }

    /**
     * Time to the CET timezone.
     * @param $input
     * @return static
     */
    public function toCET($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('Europe/Amsterdam');
    }

}

