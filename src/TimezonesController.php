<?php namespace Raphaelb\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Raphaelb\Timezones\Timezone;

class TimezonesController extends Controller
{
    public function index($input = NULL)
    {
        $time = new Timezone();

        $currentTime = $time->toTimezone(Carbon::now(),$input);

        return view('timezones::time', compact('currentTime'));
    }
}

