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
                    ->timezone('PST');
    }

    /**
     * Time to the GMT timezone.
     * @param $input
     * @return static
     */
    public function toGMT($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('GMT');
    }

    /**
     * Time to the CET timezone.
     * @param $input
     * @return static
     */
    public function toCET($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('CET');
    }

    /**
     * Time to the EST timezone.
     * @param $input
     * @return static
     */
    public function toEST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('EST');
    }

    /**
     * Time to the AKST timezone.
     * @param $input
     * @return static
     */
    public function toAKST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('AKST');
    }

    /**
     * Time to the MST timezone.
     * @param $input
     * @return static
     */
    public function toMST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('MST');
    }

    /**
     * Time to the AMT timezone.
     * @param $input
     * @return static
     */
    public function toAMT($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('AMT');
    }

    /**
     * Time to the BRST timezone.
     * @param $input
     * @return static
     */
    public function toBRST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('BRST');
    }

    /**
     * Time to the CST timezone.
     * @param $input
     * @return static
     */
    public function toCST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
                    ->timezone('CST');
    }
}

