<?php namespace Raphaelb\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($input = NULL)
    {
        $currentTime = ($input)
            ? Carbon::now(str_replace('-', '/', $input))
            : Carbon::now();

        return view('timezones::time', compact('currentTime'));
    }
}

