<?php

Route::get('timezones/{timezone}',
'raphaelb\timezones\TimezonesController@index');

Route::get('timezones',
    'raphaelb\timezones\TimezonesController@index');