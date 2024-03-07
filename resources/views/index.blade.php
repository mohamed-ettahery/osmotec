@extends('layouts.master')
@section('content')
    <!-- Slider Start -->
    <div class="rs-slider slider-style2">
        <div class="slider slider-slide-1">
            <div class="slider-item">
                <div class="slider-overlay"></div>
                <div class="container custom13">
                    <div class="slider-inner">
                        <div class="content-part">
                            <span class="sl-subtitle wow fadeInDown">Osmotec</span>
                            <h2 class="small-title2 wow fadeInLeft"> L'avenir de traitement <br /> de l'eau</h2>
                            <p class="sl-desc wow fadeInLeft2">
                                Les technologies les meilleures et les plus fiables <br /> de traitement des eaux
                            </p>
                            <div class="slider-bottom wow fadeinup">
                                <a class="readon more" href="{{ route('contact') }}">Découvrir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slide-bg2">
                <div class="slider-overlay"></div>
                <div class="container custom13">
                    <div class="slider-inner">
                        <div class="content-part">
                            <span class="sl-subtitle wow fadeInDown">Osmotec</span>
                            <h2 class="small-title2 wow fadeInLeft">La plus haute qualité</h2>
                            <p class="sl-desc fadeInLeft2">
                                Une équipe d’ingénieurs formés dans le domaine de traitement des eaux
                            </p>
                            <div class="slider-bottom wow fadeinup">
                                <a class="readon more" href="{{ route('contact') }}">Découvrir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- About Start -->
    <div class="rs-about about-style1 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('assets/images/all/picture_9456854.webp') }}" alt="About Image | OSMOTEC">
                    </div>
                </div>
                <div class="col-lg-6 pl-40 md-pl-15 pr-50 md-pr-15">
                    <div class="sec-title">
                        <span class="sub-text sub-text2">
                            À Propos De Nous
                        </span>
                        <h2 class="title pb-20">
                            Faites de votre vision une réalité.
                        </h2>
                        <p class="desc pb-20">
                            osmotec est une marque marocaine deposee en 1996 avec une experience de 25 ans dans la
                            fabrication des unites de traitement des eaux par osmose inverse.
                        </p>
                        <h4 class="small-title pb-15">
                            Nous avons beaucoup d'expérience <br /> avec des services de haute qualité.
                        </h4>
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <ul class="check-lists2">
                                    <li>OSMOTEC SWRO</li>
                                    <li>OSMOTEC BWRO HS</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <ul class="check-lists2">
                                    <li>OSMOTEC BWRO MS</li>
                                    <li>OSMOTEC BWRO LS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-part mt-28">
                            <a class="readon more know" href="{{ route('about') }}">Savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section Start -->
        @include('components.services')
        <!-- Services Section End -->
    </div>
    <!-- About End -->
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 pl-40 md-pl-15 pr-50 md-pr-15 pt-30">
                <div class="sec-title">
                    <span class="sub-text sub-text2">
                        FABRICATION DES UNITES DE TRAITEMENT DE L'EAU
                    </span>
                    <h2 class="title pb-20">
                        La plus haute qualité
                    </h2>
                    <p class="desc pb-20">
                        Les installations conteneurisés de dessalement de l’eau de mer pour produire de l’eau potable , eau
                        industrielle ou l‘eau pour l’irrigation des agricultures.
                    </p>
                    <p class="desc pb-20">
                        Les technologies les meilleures et les plus fiables de traitement des eaux sont savamment
                        configurées pour l’optimisation de traitement et de l’espace.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <img src="{{ asset('assets/images/all/IMG-20230321-WA0021.webp') }}" alt="About IMAGE 2 | OSMOTEC">
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Start -->
    <div class="rs-counter counter-style1 counter-modify1 bg6 pt-120 pb-120 md-pt-70 md-pb-75">
        <div class="container">
            <div class="row y-middle">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">60</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Projets réalisés</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">100</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Clients satisfaits</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">200</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Employé(e)s</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">25</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Années d'expérience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->
    {{-- Imortant service --}}
    <div class="important-service mt-3">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('assets/images/all/IMG-20230321-WA0014.webp') }}"
                            alt="Important Service Image | OSMOTEC">
                    </div>
                </div>
                <div class="col-lg-6 pl-40 md-pl-15 pr-50 md-pr-15">
                    <div class="sec-title">
                        <span class="sub-text sub-text2">
                            SERVICES SPÉCIAUX
                        </span>
                        <p class="desc pb-20">
                            Le résultat est des unités compactes, faciles à transporter et robustes qui peuvent être livrées
                            sur place prêtes pour une installation rapide et un démarrage immédiat.
                        </p>
                        <div class="row">
                            <ul class="check-lists2">
                                <li>Unité de dessalement de l'eau de mer</li>
                                <li>Unité de déminéralisation de l'eau</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Imortant service --}}

    {{-- Steps --}}
    <section class="design-process-section mt-30 d-none d-lg-block" id="process-tab">
        <div class="sec-title text-center">
            <span class="sub-text sub-text2 sub-text-procces text-white">
                COMMENT NOUS TRAVAILLONS
            </span>
            <h2 class="title text-white-50">
                Processus de travail supérieur
            </h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- design process steps-->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                        <li role="presentation">
                            <i class="fa-regular fa-lightbulb-on" aria-hidden="true"></i>
                            <p>IDÉE DE GÉNIE</p>
                        </li>
                        <li role="presentation">
                            <i class="fa-light fa-arrow-up-right-dots"></i>
                            <p>DÉVELOPPEMENT</p>
                        </li>
                        <li role="presentation">
                            <i class="fa-regular fa-truck-fast"></i>
                            <p>LIVRAISON</p>
                        </li>
                    </ul>
                    <!-- end design process steps-->
                </div>
            </div>
    </section>
    {{-- Steps --}}

    <!-- Project Section Start -->
    <div class="rs-project project-style2">
        <div class="sec-title text-center mb-50">
            <span class="sub-text sub-text2">
                DERNIER PROJETS
            </span>
            <h2 class="title">
                Nos derniers projets réalisés <br /> et en cours
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
            data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="true">
            @foreach ($projects as $project)
                <div class="project-item">
                    <div class="project-img">
                        @if ($project->miniature)
                            <img src="{{ asset('uploads/projects/miniatures/' . $project->miniature) }}"
                                alt="{{ $project->name }}">
                        @else
                            <img src="{{ asset('uploads/projects/' . $project->image) }}" alt="{{ $project->name }}">
                        @endif
                    </div>
                    <div class="project-content">
                        <div class="p-icon"><a href="{{ route('details', $project->slug) }}"><i
                                    class="fi fi-rr-arrow-small-right"></i></a>
                        </div>
                        <div class="project-inner">
                            <h3 class="title"><a href="{{ route('details', $project->slug) }}">{{ $project->name }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Project Section End -->

    <!-- Cta Start -->
    @include('components.call_action');
    <!-- Cta End -->
@endsection
