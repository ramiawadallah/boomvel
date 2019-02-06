<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fullscreen-bg">

 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ config('app.name', 'Laravel') }} {{ ucfirst(config('multiauth.prefix')) }}</title>

        <meta name="description" content="Boomvel is an laravel admin panel">
        <meta name="author" content="Rami Awadallah">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Boomvel is an laravel admin panel">
        <meta property="og:site_name" content="Boomvel">
        <meta property="og:description" content="Boomvel is an laravel admin panel">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{url('/')}}/themes/default/assets/backend/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="{{url('/')}}/themes/default/assets/backend/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/themes/default/assets/backend/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">

        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="{{url('/')}}/themes/default/assets/backend/css/boomvel.css">
        <link rel="stylesheet" id="css-main" href="{{url('/')}}/themes/default/assets/backend/css/style.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{url('/')}}/themes/default/assets/backend/css/themes/city.min.css"> -->
        <!-- END Stylesheets -->
    </head>
<body>
    <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('{{url('/')}}/themes/default/assets/backend/media/photos/photo29@2x.jpg');">
                    <div class="hero-static bg-white-95">
                        <div class="content">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4">
                                    <!-- Sign In Block -->
                                    <div class="block block-fx-shadow mb-0">
                                        <div class="block-header">
                                            <div class="header-title"><img width="140" style="margin: 10px auto 0 auto;" src="{{url('/')}}/themes/default/assets/backend/media/photos/boomvel-logo-01.png"></div>
                                        </div>
                                        <hr>
                                        <div class="block-content">
                                            <div class="p-sm-3 px-lg-4 py-lg-2">
                                                <p>@yield('paneltitle')</p>

                                                @yield('content')
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Sign In Block -->
                                </div>
                            </div>
                        </div>
                        <div class="content content-full font-size-sm text-muted text-center">
                            <div class="py-1 text-center ">
                                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://ramiawadallah.com" target="_new">Rami Awadallah</a> | 
                                <a class="font-w600" href="https://ramiawadallah.com" target="_blank">Boomvel</a> &copy; <span data-toggle="year-copy">2019 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>

</body>

</html 