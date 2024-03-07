@extends('layouts.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Détails du projet
                </h1>
                <span class="sub-text">
                    {{ $project->name }}
                </span>
                <ul class="breadcrumbs-area">
                    <li title="Go to Osmotec">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li><a href="{{ route('projects') }}">Projets</a></li>
                    <li>{{ $project->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Slider Section Start -->
    <div class="rs-slider case-slider-style3 pt-120 md-pt-80">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
                data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true"
                data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                <div class="slider-img">
                    <img src="{{ asset('uploads/projects/' . $project->image) }}" alt="{{$project->name}} | OSMOTEC">
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Project Details Section Start -->
    <div class="rs-project-details pt-70 md-pt-80">
        <div class="container">
            <div class="project-information mb-45">
                <div class="row">
                    @if ($project->client)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Client</h4>
                                <div class="description">
                                    <p>{{ $project->client }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->localisation)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Localisation</h4>
                                <div class="description">
                                    <p>{{ $project->localisation }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->budget)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Budget</h4>
                                <div class="description">
                                    <p>{{ $project->budget }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->date_realisation)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Date de realisation</h4>
                                <div class="description">
                                    <p>{{ $project->date_realisation }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->capacite)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Capacité</h4>
                                <div class="description">
                                    <p>{{ $project->capacite }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->choix_site)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Choix du site</h4>
                                <div class="description">
                                    <p>{{ $project->choix_site }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->order_service)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Ordre de service</h4>
                                <div class="description">
                                    <p>{{ $project->order_service }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->fabrication_montage)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Fabrication et montage</h4>
                                <div class="description">
                                    <p>{{ $project->fabrication_montage }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->travaux_site)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Travaux sur site</h4>
                                <div class="description">
                                    <p>{{ $project->travaux_site }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->mise_place)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Mise en place de la station</h4>
                                <div class="description">
                                    <p>{{ $project->mise_place }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->demarrage_mise_service)
                        <div class="col-lg-3 col-md-6 mb-40 md-mb-30">
                            <div class="project-content text-center">
                                <div class="project-right-border"></div>
                                <h4 class="title">Démarrage et mise en service</h4>
                                <div class="description">
                                    <p>{{ $project->demarrage_mise_service }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="project-txt mb-30">
                <div class="desc">
                    {{ $project->description }}
                </div>
            </div>
        </div>
        <!-- Call To Action Choose Start -->
        @include('components.call_action')
        <!-- Call To Action Choose End -->
    </div>
    <!-- Project Details Section End -->
@endsection
