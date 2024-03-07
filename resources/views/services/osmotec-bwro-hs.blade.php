@extends('layouts.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img2">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    OSMOTEC BWRO HS
                </h1>
                <ul class="breadcrumbs-area">
                    <li title="Go to Osmotec">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">Services</a>
                    </li>
                    <li>OSMOTEC BWRO HS</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Services Single Start -->
    <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-50">
                    <div class="services-img mb-35">
                        <img src="{{ asset('assets/images/all/IMG-20230321-WA0036.webp') }}" alt="OSMOTEC BWRO HS">
                    </div>
                    <div class="services-title pb-24">
                        <h2 class="title">OSMOTEC BWRO HS</h2>
                    </div>
                    <p class="desc-part pb-24">
                        Unité de déminéralisation OSMOTEC BWRO HS, pour l'alimentation en eau potable,l'irrigation et
                        industries, à travers une filtration sur sable et déminéralisation par membranes d'Osmose Inverse.
                    </p>
                    <ul class="check-lists3">
                        <li>Unité préfabriquée, assemblée et testée en usine, pour permettre son installation et mise en
                            route immédiate sans besoin de travaux génie civil.</li>
                        <li>Filtration sur sable, pour l'élimination de solides en suspension de taille supérieure à 30
                            micron.</li>
                    </ul>
                    <div class="cus-divider"></div>

                    <ul class="check-lists3">
                        <li>Traitement par membranes d'Osmose Inverse pour l'eau saumâtre, pour l'élimination de sels
                            dissous: sels minéraux, métaux lourds, matière organique dissoute, pesticides, etc.</li>
                        <li> Espace minimum d'implantation et configuration modulaire extensible pour les besoins futurs
                            accrus.</li>
                        <li>Système totalement automatisé, pour l'opération autonome de l'unité sans besoin de personnel
                            qualifié.</li>
                    </ul>

                </div>
                <div class="col-lg-4 pl-36 md-pl-15">
                    @include('components.services_aside')
                    @include('components.call_aside')
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/all/industry-generic-2-6.webp') }}"
                            alt="OSMOTEC TRUCK | OSMOTEC BWRO HS">
                    </div>
                    <div class="col-md-6 pt-50">
                        <ul class="check-lists3">
                            <li>Neutralisation et conditionnement de l'eau traitée dans le cas de l'eau industriel.</li>
                            <li>Alimentation éléctrique en energie solaire dans les zones non reliées au réseau électrique.
                            </li>
                            <li>Télégestion et commande à distance.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->
@endsection
