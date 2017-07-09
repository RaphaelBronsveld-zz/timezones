<?php
/**
 * This file is part of the Timezones package.
 *
 * Raphael Bronsveld <raphaelbronsveld@outlook.com>
 *
 * For the full license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Raphaelb\Timezones\Tests;

use Carbon\Carbon;
use Raphaelb\Timezones\Timezones;

class TimezonesTest extends TestCase
{
     /** @test */
    public function carbonInstanceGetsReturned()
    {
        $tz = new Timezones();
        $carbon = $tz->toTimezone('2017-01-01 12:00:00', 'gmt');
        $this->assertInstanceOf(Carbon::class, $carbon);
    }

    /** @test */
    public function timezoneGetsProperlySet()
    {
        $now = Carbon::now()->tz('Europe/London');
        $ts2 = (new Timezones())->toTimezone($now->format('Y-m-d H:i:s'), 'gmt');
        $this->assertTrue($now->diffInHours($ts2) === 1);
    }
}
