<?php

namespace Raphaelb\Timezones;

use Carbon\Carbon;

class TimezonesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the returned instance from the toTimezone method.
     */
    public function testInstanceReturnedFromToTimezoneMethod()
    {
        $tz = new Timezones();
        $carbon = $tz->toTimezone('2017-01-01 12:00:00', 'gmt');
        $this->assertInstanceOf(Carbon::class, $carbon);
    }
}
