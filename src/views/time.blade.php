<!DOCTYPE html>
<html>
<head>
    <title>Laravel Timezones</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
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

        .title {
            font-size: 96px;
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
    <div id="app" class="content">
        <current time="{{ $currentTime }}"></current>
        <template id="time-template">
            <div class="title">Current Time</div>
            <div class="title">@{{ time }}</div>
            <div class="timezone">
                @if($timezone)
                    <span>Your Timezone: {{ $timezone }}</span>
                @else
                    <span class="notimezone">No timezone selected. Use the url to see the changes. E.g. yoursite.com/timezones/est</span>
                @endif
            </div>
            <div class="footer">By Raphael Bronsveld</div>
            <div class="github"><a target="blank" href="https://github.com/raphaelbronsveld"><i class="fa fa-github fa-2x"></i></a></div>
        </template>
    </div>
</div>
</body>
<script>
    Vue.component('current', {
        template: '#time-template',
        props: ['time'],

        ready: function(){
            this.time = this.getCurrentTime();
        },

        methods: {
            getCurrentTime() {
                this.$http.get(window.location.pathname, {
                    timeout: 1000,
                    time: this.time
                }).then(function(time)
                {
                    window.setTimeout(this.getCurrentTime, 1000);
                    this.time = time.data;
                });
            }
        }
    });

    new Vue({
        el: '#app'
    });
</script>
</html>>