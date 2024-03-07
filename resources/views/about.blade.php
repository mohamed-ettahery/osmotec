@extends('layouts.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    À Propos De Nous
                </h1>
                <ul class="breadcrumbs-area">
                    <li title="Go to Osmotec">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li>À Propos De Nous</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Start -->
    <div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-75">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('assets/images/all/picture_8978999.webp') }}"
                            alt="Main about us image | OSMOTEC">
                    </div>
                </div>
                <div class="col-lg-6 pl-50 md-pl-15">
                    <div class="sec-title">
                        <span class="sub-text">
                            <img src="{{ asset('assets/images/shape-1.webp') }}" alt="Four dots shape | OSMOTEC">
                            QUI NOUS SOMMES
                        </span>
                        <h2 class="title pb-20">
                            Présentation de la marque
                        </h2>
                        <p class="desc pb-3">
                            Osmotec est une marque marocaine deposee en 1996 avec une experience de 25 ans dans la
                            fabrication des unites de traitement des eaux par osmose inverse
                        </p>
                        <p class="desc pb-37">
                            Les technologies les meilleures et les plus fiables de traitement des eaux sont savamment
                            configurées pour l’optimisation de traitement et de l’espace.
                        </p>
                        <div class="row y-middle">
                            <div class="col-lg-4 col-md-4 sm-mb-30">
                                <div class="about-img">
                                    <img src="{{ asset('assets/images/all/picture_9456854.webp') }}"
                                        alt="About Us Description Image | OSMOTEC">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <ul class="check-lists">
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">OSMOTEC SWRO</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">OSMOTEC BWRO HS</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">OSMOTEC BWRO MS</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">OSMOTEC BWRO LS</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Skillbar Choose Start -->
    <div class="rs-skillbar skillbar-style1 skillbar-modify5 bg22 pt-120 pb-120">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 pr-60 md-pr-15 mt-40 md-mb-40">
                    <div class="sec-title mb-45">
                        <h2 class="title title4 pb-30">
                            L'AVANTAGE
                        </h2>
                        <p class="desc desc8">
                            Les technologies les meilleures et les plus fiables de traitement des eaux sont savamment
                            configurées pour l’optimisation de traitement et de l’espace.
                        </p>
                        <p class="desc desc8">
                            Le résultat est des unités compactes, faciles à transporter et robustes qui peuvent être livrées
                            sur place prêtes pour une installation rapide et un démarrage immédiat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 video-img">
                    <div class="rs-videos">
                        <div class="animate-border">
                            <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=E-HA-N5fEwc">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skillbar Choose End -->

    <div class="pt-30 pb-30">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 pl-50 md-pl-15">
                    <div class="sec-title">
                        <h2 class="title pb-20">
                            Notre mission
                        </h2>
                        <p class="desc pb-3">
                            Avec plus de 25 ans d’expérience dans le domaine de l’eau et plusieurs références chaque année,
                            OSMOTEC élargit constamment son expertise, tout en restant proche de ces clients, conduisant à
                            de nombreuses réalisations qui font la fierté de l’entreprise et tamponnent son image de marque.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('assets/images/all/picture_8927942.webp') }}" alt="Our mission image | OSMOTEC">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Start -->
    <div class="mt-30 mb-30 pb-50" style="background: aliceblue;">
        @include('components.services')
    </div>
    <!-- Services Section End -->
    <!-- Call To Action Choose Start -->
    @include('components.call_action')
    <!-- Call To Action Choose End -->
@endsection
