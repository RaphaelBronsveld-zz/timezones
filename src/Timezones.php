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
     * Timezone constructor.
     *
     * @param null|string $format
     */
    public function __construct($format = 'Y-n-j G:i:s')
    {
        $this->format = $format;
    }

    /**
     * toTimezone method
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

