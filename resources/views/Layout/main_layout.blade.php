<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI TENSI DESA</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&family=Sanchez&display=swap" rel="stylesheet">
    <!-- MAIN CSS -->
    <link href="{{ asset('css/layout_skeleton.css') }}" rel="stylesheet">
    <link href="{{ asset('mdb4/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('topsource')
    @livewireStyles
</head>
<body class="bg-white">
    <!-- MODAL SECTION -->
    @stack('modal_section')
    <!-- END MODAL SECTION -->
    <!-- BODY -->

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- HEADER -->
        <div class="header bg-primary text-white shadow" id="title">
            <div class="title w-25 text-center m-2">
                {{ Config('app.name') }}
            </div>
        </div>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="content">
            
            <!-- SIDE BAR -->
            <div class="sidenav bg-primary text-nowrap" id="sidenav">
                
                    <!--Navbar-->
                    <nav id="sidebar">
                        <div class="sidebar-header mb-3">
                            <h3 class="text-center text-white font-weight-bold text-nowrap w-100">@yield('page')</h3>
                        </div>

                        <p class="text-center text-white mb-5 text-nowrap">Sistem Informasi Potensi Desa</p>
                        
                        @yield('sidebar')

                    </nav>
                    <!--.Navbar-->
            </div>
            <!-- END SIDENAV -->

            <!-- MAIN -->
            <div class="main">
                @yield('main')
            </div>
            <!-- END MAIN -->
        
        </div>
        <!-- END CONTENT -->

        <div class="footer bg-primary">
            <div>
                <h6 class="text-white text-center">I Putu Alin Winata Gotama | 1805551029</h6>
            </div>
        </div>

    </div>
    <!-- END WRAPPER -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="{{ asset('mdb4/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mdb4/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mdb4/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mdb4/js/mdb.min.js') }}"></script>
    @yield('bottomsource')
    @livewireScripts
    @stack('bottomlivewirescripts')
<!-- END BODY -->
</body>
    
</html>