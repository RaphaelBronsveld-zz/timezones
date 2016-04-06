<?php

/*
 * This file is part of the Timezones package.
 *
 * Raphael Bronsveld <raphaelbronsveld@outlook.com>
 *
 * For the full license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Raphaelb\Timezones;

use Carbon\Carbon;

class Timezones {

    public $format;

    /**
     * Constructor. Setting default laravel format.
     *
     * @param null|string $format
     */
    public function __construct($format = 'Y-m-d H:i:s')
    {
        $this->format = $format;
    }

    /**
     * Given string to a different timezone.
     *
     * @param $timestring
     * @param $timezone
     *
     * @return static
     */
    public function toTimezone($timestring, $timezone)
    {
        return Carbon::createFromFormat($this->format, $timestring)
                        ->timezone($timezone);
    }
}

