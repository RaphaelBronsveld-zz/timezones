<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Timezones</title>
 
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
 
        <style>
            html, body {
                height: 100%;
            }
 
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
 
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
 
            .content {
                text-align: center;
                display: inline-block;
            }
 
            .time {
                font-size: 96px;
            }

            .title {
                font-size: 70px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
            <div class="title">Your server time</div>
                <div class="time" id="time">{{ $currentTime }}</div>
            </div>
        </div>
    </body>
</html>