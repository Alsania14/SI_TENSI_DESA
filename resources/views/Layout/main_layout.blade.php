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

</head>
<body>
    <!-- BODY -->

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- HEADER -->
        <header class="bg-primary text-white shadow" id="title">
            <h6 class="ml-3 mt-2">{{ Config('app.name') }}</h6>
        </header>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="content">      
            <!-- SIDE BAR -->
            <div class="sidenav bg-primary">
                <!--Navbar-->
                <nav class="navbar pt-4 navbar-dark bg-primary">

                <!-- Navbar brand -->
                <a class="w-100 mb-1 p-0 navbar-brand text-white navbar-toggler toggler-example" href="#" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
                    aria-label="Toggle navigation">Data Desa</a>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto mt-3 ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Nama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Atur Polygon</a>
                        </li>
                    </ul>
                    <!-- Links -->
                   
                </div>
                <!-- Collapsible content -->
                

                </nav>
                <!--.Navbar-->

            </div>
            <!-- END SIDENAV -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->
        
    
    <!-- END BODY -->
    <!-- BOOTSTRAP MIN JS -->
    <script type="text/javascript" src="{{ asset('css/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/mdb.min.js') }}"></script>

</body>
    
</html>