<!DOCTYPE html>
<html>
<head>
    <title>Raphaël Bronsveld | Laravel Timezones</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
            font-family: 'Lato', sans-serif;
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

        .footer {
            padding-top: 50px;
            font-size: 40px;
        }

        .github {
            font-size: 2.5em;
            text-decoration: none;
        }

        .timezone {
            padding-top: 30px;
            font-size: 30px;
        }

        .notimezone {
            color: red;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>{{ $currentTime }}</h1>
            <div class="timezone">
                @if($timezone)
                    <span>Your Timezone: {{ $timezone }}</span>
                @else
                    <span class="notimezone">No timezone selected. Use the url to see the changes. E.g. yoursite.com/timezones/est</span>
                @endif
                <br/>
            </div>
            <div class="footer">By Raphaël Bronsveld</div>
            <div class="github">
                <a href="https://github.com/raphaelbronsveld">
                    <i class="fa fa-github fa-2x"></i>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
