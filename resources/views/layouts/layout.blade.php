<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Inter&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <title>{{ config('app.name') }}</title>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0 float-left">Let Us Pray</a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="has-children">
                        <a href="sermons.html">Felloweship with Us</a>
                        <ul class="dropdown">
                            <li><a href="https://www.gospelhouse.at/" target="_blank">Gospel House[Klagenfurt]</a></li>
                            <li><a href="https://www.lifechurch.at/villach" target="_blank">Life Church [Villach]</a></li>

                        </ul>
                    </li>
                    {{-- <li><a href="contact.html">Contact</a></li> --}}
                    <li class="cta-button"><a href="{{ route('contact.show') }}">Prayer Request</a></li>
                </ul>



                <a href="#"
                    class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>


            </div>
        </div>
    </nav>
    <!-- style="background-image: url('images/hero_1.jpg'); " -->
    <div class="hero overlay" style="background-image: url('images/logo-color.png); ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 me-auto text-start pe-lg-5">
                    <div class="intro-text">
                        <div class="mb-4">
                            <h1 data-aos="fade-left" class="hero-heading">Arise &amp; Shine</h1>
                        </div>
                        <div class="">
                            <p class="mb-5 opacity-5" data-aos="fade-left" data-aos-delay="200">Spiritual Awakening:
                                Prayer is the means through which believers "arise" spiritually, waking up from any
                                state of stagnation or spiritual slumber. It reignites their passion for God and His
                                purpose in their lives.<br>
                                Through prayer, you become sensitive to God's calling to rise up, be active in your
                                faith, and step into the light of His purpose. Isaiah 60:1 speaks to this awakening as
                                you recognize that "your light has come," meaning that God's presence and guidance are
                                now with you.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    {{-- <a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="video-bg glightbox"> --}}
                    {{-- <span class="icon"><span class="icon-play"></span></span> --}}
                    <img src="images/prayer4.jpg" alt="Image" class="img-fluid rounded">
                    </a>
                </div>
            </div>
        </div>
    </div>

    @yield('content')



    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>




    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
