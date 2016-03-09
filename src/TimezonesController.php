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
     * @param \Illuminate\Http\Request $request
     * @param null                     $input
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Raphaelb\Timezones\Timezones
     */
    public function index(Request $request, $input = null)
    {
        /**
         * @var $currentTime Timezones
         */
        $currentTime = app()->make('timezones');
        $currentTime = $currentTime->toTimezone(Carbon::now(), $input);

        $timezone = $input;

        // Auto updating time.
        if($request->ajax()){
            return $currentTime;
        }

        return view('timezones::time', compact('currentTime', 'timezone'));
    }
}

