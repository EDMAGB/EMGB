<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A" name="description" />
    <meta content="Edna GB" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="https://i.ibb.co/GT8S9Yr/favicon.png">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    @endphp

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/appSty.css']['file']) }}">

    <!-- App js -->
    <script src="{{ asset('build/' . $manifest['resources/js/appJS.js']['file']) }}"></script>



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9TNTRX6P5J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9TNTRX6P5J');
    </script>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ml-1">
                            {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0 text-white">
                                ¡Bienvenido!
                            </h5>
                        </div>
                        {{-- <a href="{{ route('MenuP') }}" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Inicio</span>
                        </a> --}}
                        <!-- item-->
                        <a href="" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Mi cuenta</span>
                        </a>


                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        {{-- <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form> --}}



                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">{{ __('Cerrar Sesión') }}</button>
                        </form>

                    </div>
                </li>



            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="" class="logo text-center">
                    <span class="logo-lg">

                        <img src="https://i.ibb.co/B2ZBQLD/logo.png" alt="" height="70">
                    </span>
                    <span class="logo-sm">
                        <img src="https://i.ibb.co/zR08zD5/logo-sm.png" alt="" height="50">

                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </li>
            </ul>
        </div>

        <div>
            <!-- end Topbar -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-book-open"></i>
                                    <span>Panel de Control </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('dashboard') }}">
                                            <i class="la la-dashboard"></i>
                                            <span> Dashboard PC</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('PNusuario') }}">
                                            <i class="la la-dashboard"></i>
                                            <span> Usuarios</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fe-eye"></i>
                                            <span>Fases </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="">
                                            <i class="fe-edit"></i>
                                            <span>Proyectos</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    @yield('contenido')
                </div> <!-- content -->
            </div>
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2024 &copy; <a href="https://www.mvsideas.com/"> MVS EXPONENCIAL</a>
                        </div>
                        {{-- <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="assets/js/vendor.min.js"></script>

    <!-- Third Party js -->
    <script src="assets/libs/peity/jquery.peity.min.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
    <script src="assets/libs/katex/katex.min.js"></script>
    <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/libs/quill/quill.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-1.init.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <!-- Estilos para Botones de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/MotionPathPlugin.min.js"></script>


    @yield('scripts')
</body>


</html>
