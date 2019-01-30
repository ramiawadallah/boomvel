<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fullscreen-bg">

<head>
    <title>{{ config('app.name', 'Laravel') }} {{ ucfirst(config('multiauth.prefix')) }}</title>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/themes/default/assets/backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/themes/default/assets/backend/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/themes/default/assets/backend/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/themes/default/assets/backend/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ url('/') }}/themes/default/assets/backend/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/themes/default/assets/backend/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('/') }}/themes/default/assets/backend/img/favicon.png">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img width="120" alt="Responsive image" src="{{ url('/') }}/themes/default/assets/backend/img/logo-dark.png" alt="BoomVel"></div>
                                <p class="lead">
                                    @yield('paneltitle') 
                                </p>
                            </div>

                            @yield('content')

                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Free Bootstrap dashboard template</h1>
                            <p>by The Develovers</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>