<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>@yield('title', 'Osmotec')</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.webp') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.webp') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.webp') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description"
        content="osmotec est une marque marocaine deposee en 1996 avec une experience de 25 ans dans la fabrication des unites de traitement des eaux par osmose inverse">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/pro/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/pro/css/sharp-light.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/pro/css/sharp-regular.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/pro/css/sharp-solid.css') }}">
    <!-- Uicons Regular Rounded css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/uicons-regular-rounded.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
    {{-- sweetAlert --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('assets/images/icons/fav.webp') }}"
                        alt="Osmotec - Traitement des eaux "></div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header header-style1">
                <!-- Middle Header Area End -->
                <div class="middle-header hidden-md">
                    <div class="container">
                        <div class="row-table">
                            <div class="col-cell header-logo">
                                <div class="logo-part">
                                    <a href="{{ route('home') }}"><img
                                            src="{{ asset('assets/images/icons/logo.webp') }}"
                                            alt="Osmotec logo | OSMOTEC"></a>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="rs-contact-info">
                                    <div class="contact-part">
                                        <div class="info-icon">
                                            <i class="fi fi-rr-map-marker-home"></i>
                                        </div>
                                        <div class="contact-info">
                                            <div class="info-title">
                                                Contactez-nous
                                            </div>
                                            <div class="info-des">
                                                {{ $site_address }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-part">
                                        <div class="info-icon">
                                            <i class="fi fi-rr-envelope-plus"></i>
                                        </div>
                                        <div class="contact-info">
                                            <div class="info-title">
                                                E-mail
                                            </div>
                                            <div class="info-des">
                                                <a href="mailto:support@Osmotec.net">
                                                    {{ $site_email }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-part margin-no">
                                        <div class="info-icon">
                                            <i class="fi fi-rr-phone-call"></i>
                                        </div>
                                        <div class="contact-info">
                                            <div class="info-title">
                                                Appelez-nous
                                            </div>
                                            <div class="info-des">
                                                <a href="tel:(+0885)-23456789">{{ $site_phone }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Middle Header Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row-table">
                            <div class="col-cell header-logo">
                                <div class="logo-area">
                                    <a href="{{ route('home') }}">
                                        <img class="sticky-logo" src="{{ asset('assets/images/icons/logo.webp') }}"
                                            alt="logo | OSMOTEC">
                                        <img class="normal-logo" src="{{ asset('assets/images/icons/logo.webp') }}"
                                            alt="logo | OSMOTEC">
                                    </a>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu hidden-md">
                                            <ul class="nav-menu">
                                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a
                                                        href="{{ route('home') }}">Accueil</a></li>
                                                <li class="{{ Request::is('about') ? 'active' : '' }}"><a
                                                        href="{{ route('about') }}">À propos de nous</a></li>
                                                <li
                                                    class="menu-item-has-children {{ Request::is('services') || Request::is('services/*') ? 'active' : '' }}">
                                                    <a href="{{ route('services') }}">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('osmotec.swro') }}">OSMOTEC SWRO</a>
                                                        </li>
                                                        <li><a href="{{ route('osmotec.bwro.hs') }}">OSMOTEC BWRO
                                                                HS</a></li>
                                                        <li><a href="{{ route('osmotec.bwro.ms') }}">OSMOTEC BWRO
                                                                MS</a></li>
                                                        <li><a href="{{ route('osmotec.bwro.ls') }}">OSMOTEC BWRO
                                                                LS</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Request::is('projects') ? 'active' : '' }}"><a
                                                        href="{{ route('projects') }}">Projets</a></li>
                                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a
                                                        href="{{ route('contact') }}">Contact</a></li>
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li class="toolbar-sl-share">
                                            <ul class="clearfix">
                                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="btn-quote"><a class="quote-button"
                                                href="{{ route('contact') }}">Obtenir un devis<i
                                                    class="fi fi-rr-arrow-small-right"></i></a></li>
                                        <li class="humburger">
                                            <a id="nav-expander" class="nav-expander bar" href="#">
                                                <div class="bar">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Mobile Menu start -->
                <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                    <div class="close-btn">
                        <a id="nav-close2" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <ul class="nav-menu">
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">À
                                propos de nous</a></li>
                        <li
                            class="menu-item-has-children {{ Request::is('services') || Request::is('services/*') ? 'active' : '' }}">
                            <a href="{{ route('services') }}">Services</a>
                            <ul class="sub-menu">
                                <li
                                    class="{{ Request::is('services') || Request::is('services/osmotec-swro') ? 'active' : '' }}">
                                    <a href="{{ route('osmotec.swro') }}">OSMOTEC SWRO</a>
                                </li>
                                <li
                                    class="{{ Request::is('services') || Request::is('services/osmotec-bwro-hs') ? 'active' : '' }}">
                                    <a href="{{ route('osmotec.bwro.hs') }}">OSMOTEC BWRO
                                        HS</a>
                                </li>
                                <li
                                    class="{{ Request::is('services') || Request::is('services/osmotec-bwro-ms') ? 'active' : '' }}">
                                    <a href="{{ route('osmotec.bwro.ms') }}">OSMOTEC BWRO
                                        MS</a>
                                </li>
                                <li
                                    class="{{ Request::is('services') || Request::is('services/osmotec-bwro-ls') ? 'active' : '' }}">
                                    <a href="{{ route('osmotec.bwro.ls') }}">OSMOTEC BWRO
                                        LS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('projects') || Request::is('projects/*') ? 'active' : '' }}"><a
                                href="{{ route('projects') }}">Projets</a></li>
                        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a
                                href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <!-- //.nav-menu -->

                    <!-- //.nav-menu -->
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="fi fi-rr-map-marker-home"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Contact</h4>
                                    <em>{{ $site_address }}</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="fi fi-rr-envelope-plus"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:{{ $site_email }}">{{ $site_email }}</a></em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="fi fi-rr-phone-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Appelez-nous</h4>
                                    <em>{{ $site_phone }}</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->
        @yield('content')
    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer footer-main-home">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 pr-20 md-pr-15 md-mb-20">
                        <div class="footer-logo mb-51 md-mb-30">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/icons/logo.webp') }}"
                                    alt="Footer Logo | OSMOTEC"></a>
                        </div>
                        <div class="textwidget">
                            <p class="pb-20">
                                osmotec est une marque marocaine deposee en 1996 avec une experience de 25 ans dans la
                                fabrication des unites de traitement des eaux par osmose inverse.
                            </p>
                            <p class="pb-25"><strong>Horaires d'ouvertures</strong> : Lun - Ven: 8:30 am to 5:30 pm
                            </p>
                        </div>
                        <ul class="footer-social md-mb-30">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 md-mb-10">
                        <h3 class="footer-title">Contact</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="fi fi-rr-map-marker-home"></i>
                                <div class="desc">
                                    {{ $site_address }}
                                </div>
                            </li>
                            <li>
                                <i class="fi fi-rr-phone-call"></i>
                                <div class="desc">
                                    <a href="tel:{{ $site_phone }}">{{ $site_phone }}</a><br>
                                    <a href="tel:{{ $site_phone2 }}">{{ $site_phone2 }}</a>
                                </div>
                            </li>
                            <li>
                                <i class="fi fi-rr-envelope-plus"></i>
                                <div class="desc">
                                    <a href="mailto:{{ $site_email }}">{{ $site_email }}</a><br>
                                    <a href="mailto:{{ $site_email2 }}">{{ $site_email2 }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 md-mb-10">
                        <h3 class="footer-title">Nos services</h3>
                        <ul class="site-map">
                            <li><a href="{{ route('osmotec.swro') }}">OSMOTEC SWRO</a></li>
                            <li><a href="{{ route('osmotec.bwro.hs') }}">OSMOTEC BWRO HS</a></li>
                            <li><a href="{{ route('osmotec.bwro.ms') }}">OSMOTEC BWRO MS</a></li>
                            <li><a href="{{ route('osmotec.bwro.ls') }}">OSMOTEC BWRO LS</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-title">Newsletter</h3>
                        <p class="widget-desc">vous pouvez vous inscrire avec nous en entrant votre email.</p>
                        <form action="{{ route('newsletters.new') }}" method="POST">
                            @csrf
                            <p>
                                <input type="email" name="email" placeholder="Votre adresse e-mail" required>
                                <input type="submit" value="S'abonner">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-8 md-mb-10 text-lg-end text-center order-last">
                        <ul class="copy-right-menu">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="{{ route('about') }}">À Propos De Nous</a></li>
                            <li><a href="{{ route('services') }}">Nos services</a></li>
                            <li><a href="{{ route('projects') }}">Projets</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="copyright text-lg-start text-center">
                            <p>© {{ date('Y') }} Osmotec</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->
    <!-- modernizr js -->
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- waypoints.min js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- counterup.min js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // script for tab steps
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

            var href = $(e.target).attr('href');
            var $curr = $(".process-model  a[href='" + href + "']").parent();

            $('.process-model li').removeClass();

            $curr.addClass("active");
            $curr.prevAll().addClass("visited");
        });
        // end  script for tab steps
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: 'Succés',
                text: "{{ session()->get('success') }}",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif

</body>

<!-- Mirrored from Osmotec.net/products/html/Osmotec/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 09:41:29 GMT -->

</html>
