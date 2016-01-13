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

    /**
     * Time to the EST timezone.
     * @param $input
     * @return static
     */
    public function toEST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
            ->timezone('America/New_york');
    }

    /**
     * Time to the AKST timezone.
     * @param $input
     * @return static
     */
    public function toAKST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
            ->timezone('America/Anchorage');
    }

    /**
     * Time to the MST timezone.
     * @param $input
     * @return static
     */
    public function toMST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
            ->timezone('America/Denver');
    }

    /**
     * Time to the AMT timezone.
     * @param $input
     * @return static
     */
    public function toAMT($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
            ->timezone('America/Manaus');
    }

    /**
     * Time to the BRST timezone.
     * @param $input
     * @return static
     */
    public function toBRST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
            ->timezone('America/Sao_Paulo');
    }

    /**
     * Time to the BRST timezone.
     * @param $input
     * @return static
     */
    public function toCST($input)
    {
        return Carbon::createFromTimestamp(strtotime($input))
            ->timezone('America/Mexico_City');
    }








}

