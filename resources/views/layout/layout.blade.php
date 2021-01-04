<!DOCTYPE html>
<html>

<head>
    <title>Nation Parks | Discover the national parks</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css" media="all" />

    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">

    <!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <div class="main-content" id="home">

        <!-- header -->
        <header class="header">
            <div class="container">
                <!-- nav -->
                <nav class="py-3">
                    <div id="logo">
                        <h1> <a class="navbar-brand" href="/">Nation Parks</a>
                        </h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="{{ request()->is('/') ? 'active' : '' }}">
                            <a href="/">Home</a>
                        </li>
                        <li class="{{ request()->is('discover') ? 'active' : '' }}">
                            <a href="/discover">Discover</a>
                        </li>
                        <li class="{{ request()->is('contact') ? 'active' : '' }}">
                            <a href="/contact">Contact</a>
                        </li>
                        <li class="dropdown">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down"
                                    aria-hidden="true"></span> </label>
                            <a href="#">More Info ><span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="features.html">Features</a>
                                </li>
                                <li><a href="gallery.html">Gallery</a>
                                </li>
                                <li><a href="features.html">Services</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ request()->is('register') ? 'active' : '' }}">
                            <a href="/register">Register</a>
                        </li>
                        <li class="{{ request()->is('login') ? 'active' : '' }}">
                            <a href="/login">Login</a>
                        </li>
                    </ul>


                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->


        @yield('content')


        <!--footer -->
        <footer>
            <div class="footer_1its py-5">
                <div class="container py-md-4">

                    <div class="row footer-top mb-md-5 mb-4">
                        <div class="col-lg-4 col-md-6 footer-grid_section_1its" data-aos="fade-right">
                            <div class="footer-title-w3pvt">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="footer-text">
                                <p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                            <div class="footer-title-w3pvt">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="row no-gutters">
                                <ul class="links">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/discover">Discover </a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="/register">Register</a></li>
                                    <li><a href="/login">Login</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its"
                            data-aos="fade-left">
                            <div class="footer-title-w3pvt">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="footer-text">
                                <p>By subscribing to our mailing list you will always get latest news and updates from
                                    us.
                                </p>
                                <form action="#" method="post">
                                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                                    <button class="btn btn-success btn-block">Sign Up</button>
                                    <div class="clearfix"> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //footer -->
        <!-- copyright -->
        <div class="cpy-right py-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <p class="copy-w3layouts">© 2020 Nation Parks. All rights reserved.
                        </p>
                    </div>
                    <div class="col-md-4 footer-grid_section">

                    </div>
                </div>
            </div>
        </div>
        <!-- //copyright -->
</body>

</html>