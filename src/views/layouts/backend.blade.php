<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <link rel="shortcut icon" href="{{url('/')}}/themes/default/assets/backend/media/favicons/512X512.png">
        <link rel="icon" type="image/png" sizes="192x192" href="{{url('/')}}/themes/default/assets/backend/media/favicons/192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/themes/default/assets/backend/media/favicons/180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css">
        <link rel="stylesheet" href="{{url('/')}}/themes/default/assets/backend/js/plugins/dropzone/dist/min/dropzone.min.css">

        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="{{url('/')}}/themes/default/assets/backend/css/boomvel.css">
        <link rel="stylesheet" id="css-main" href="{{url('/')}}/themes/default/assets/backend/css/style.css">

        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

        <script>
              var editor_config = {
                path_absolute : "/",
                selector: "textarea",
                plugins: [
                  "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                  "searchreplace wordcount visualblocks visualchars code fullscreen",
                  "insertdatetime media nonbreaking save table contextmenu directionality",
                  "emoticons template paste textcolor colorpicker textpattern"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                relative_urls: false,
                file_browser_callback : function(field_name, url, type, win) {
                  var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                  var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                  var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                  if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                  } else {
                    cmsURL = cmsURL + "&type=Files";
                  }

                  tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                  });
                }
              };

              tinymce.init(editor_config);
        </script>

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <link rel="stylesheet" id="css-theme" href="{{url('/')}}/themes/default/assets/backend/css/themes/city.min.css">
        <!-- END Stylesheets -->
    </head>
    <body>
        
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="{{ url('/admin')}}">
                        <img width="50" style="margin-left: -15px;" src="{{url('/')}}/themes/default/assets/backend/media/photos/boomvel-logo-02.png">
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">Boom<b>vel</b></span>
                        </span>
                    </a>
                    <!-- END Logo -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('/admin')}}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('/')}}" target="_new"">
                                <i class="nav-main-link-icon si si-rocket"></i>
                                <span class="nav-main-link-name">Frontend</span>
                            </a>
                        </li>
                      
                        <li class="nav-main-heading">Admin Interface</li>

                        <li class="nav-main-item {{ active_menu('pages')[0] }}">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-book-open"></i>
                                <span class="nav-main-link-name">{{ trans('lang.pages' )}}</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ url('admin/pages') }}">
                                        <span class="nav-main-link-name">{{ trans('lang.pages' )}}</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ url('admin/pages/create') }}">
                                        <span class="nav-main-link-name">{{ trans('lang.add-new-page') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-main-item {{ active_menu('admins')[0] }}">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-users"></i>
                                <span class="nav-main-link-name">Admin</span>
                            </a>
                            <ul class="nav-main-submenu">
                                @admin('super')
                                  <li class="nav-main-item">
                                      <a class="nav-main-link" href="{{ route('admin.show') }}">
                                        <span class="nav-main-link-name">{{ ucfirst(config('multiauth.prefix')) }}</span>
                                      </a>
                                  </li>
                                  <li class="nav-main-item">
                                      <a class="nav-main-link" href="{{ route('admin.roles') }}">
                                        <span class="nav-main-link-name">Roles</span>
                                      </a>
                                  </li>
                                @endadmin
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="si si-magnifier"></i>
                        </button>
                        <!-- END Open Search Section -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-none d-sm-inline-block ml-1">{{ auth('admin')->user()->name }}</span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{url('/')}}/themes/default/assets/backend/media/avatars/avatar10.jpg" alt="">
                                </div>
                                <div class="p-2">
                                    <h5 class="dropdown-header text-uppercase">User Options</h5>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span>{{ __('Logout') }}</span>
                                        <i class="si si-logout ml-1"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <div class="bg-image overflow-hidden" style="background-image: url('{{url('/')}}/themes/default/assets/backend/media/photos/photo29@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-narrow content-full">
                            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                                <div class="flex-sm-fill">
                                    <h1 class="font-w600 text-white mb-0 js-appear-enabled animated fadeIn" data-toggle="appear">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</h1>
                                    <h2 class="h4 font-w400 text-white-75 mb-0 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="250">
                                        @if (session('status'))
                                        <p class="panel-subtitle">{{ session('status') }}</p>
                                        @endif You are logged in to {{ config('multiauth.prefix') }} side!
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Content -->
                <div class="content">
                     @include('admin.message')
                     @yield('content')
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://ramiawadallah.com" target="_new">Rami Awadallah</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="https://ramiawadallah.com" target="_blank">Boomvel</a> &copy; <span data-toggle="year-copy">2018</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
         </div>

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out {{url('/')}}/themes/default/assets/backend/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the {{url('/')}}/themes/default/assets/backend/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            {{url('/')}}/themes/default/assets/backend/js/core/jquery.min.js
            {{url('/')}}/themes/default/assets/backend/js/core/bootstrap.bundle.min.js
            {{url('/')}}/themes/default/assets/backend/js/core/simplebar.min.js
            {{url('/')}}/themes/default/assets/backend/js/core/jquery-scrollLock.min.js
            {{url('/')}}/themes/default/assets/backend/js/core/jquery.appear.min.js
            {{url('/')}}/themes/default/assets/backend/js/core/js.cookie.min.js
        -->
        <script src="{{url('/')}}/themes/default/assets/backend/js/boomvel.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at {{url('/')}}/themes/default/assets/backend/_es6/main/app.js
        -->
        <script src="{{url('/')}}/themes/default/assets/backend/js/boomvel.app.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/main.js"></script>

        <!-- Page JS Plugins -->
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/buttons/buttons.print.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="{{url('/')}}/themes/default/assets/backend/js/plugins/dropzone/dropzone.min.js"></script>



        <!-- Page JS Code -->
        <script src="{{url('/')}}/themes/default/assets/backend/js/pages/be_tables_datatables.min.js"></script>
        <script>jQuery(function(){ One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });</script>

        @if (Session::has('sweet_alert.alert'))
            <script>
                swal({!! Session::get('sweet_alert.alert') !!});
            </script>
        @endif

        <script>

            var has_errors = {{ $errors->count() > 0 ? 'true' : 'false' }};

            if(has_errors){
                swal({
                    title: "Errors",
                    text : "@foreach($errors->all() as $error) <ul class='btn btn-lg btn-block btn-danger'>{{$error}}</ul> @endforeach()",
                    type: "error",   
                    html: jQuery("#ERROR_COPY").html(),
                    confirmButtonColor: "rgba(150, 0, 72, 1)",
                });
            };
            
        </script>
    </body>
</html>
