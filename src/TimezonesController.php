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
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimezonesController extends Controller
{

    /**
     * Return the proper time with the given timezone.
     *
     * @param null $timezone
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($timezone = null)
    {
        /**
         * @var $currentTime Timezones
         */
        $currentTime = app()->make('timezones');
        $currentTime = $currentTime->toTimezone(Carbon::now(), $timezone);

        return view('timezones::time', compact('currentTime', 'timezone'));
    }
}

