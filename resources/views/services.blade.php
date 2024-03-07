@extends('layouts.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Nos services
                </h1>
                <ul class="breadcrumbs-area">
                    <li title="Go to Osmotec">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Services Section Start -->
    @include('components.services')
    <!-- Services Section End -->

    {{-- Imortant service --}}
    <div class="important-service mt-50 mb-50">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-5 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('assets/images/all/IMG-20230321-WA0014.webp') }}" width="400px" alt="About image | OSMOTEC">
                    </div>
                </div>
                <div class="col-lg-7 pl-40 md-pl-15 pr-50 md-pr-15">
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
@endsection
