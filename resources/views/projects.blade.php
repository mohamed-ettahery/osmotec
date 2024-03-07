@extends('layouts.master')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img2">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Projets
                </h1>
                <ul class="breadcrumbs-area">
                    <li title="Go to Osmotec">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li>Projets</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Project Section Start -->
    <div class="rs-project project-style1 gray-bg pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="{{ route('details', $project->slug) }}">
                                    @if (!empty($project->miniature))
                                        <img src="{{ asset('uploads/projects/miniatures/' . $project->miniature) }}"
                                            alt="{{ $project->name }} | miniature | OSMOTEC">
                                    @else
                                        <img src="{{ asset('uploads/projects/' . $project->image) }}"
                                            alt="{{ $project->name }} | miniature | OSMOTEC">
                                    @endif
                                </a>
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <h3 class="title"><a
                                            href="{{ route('details', $project->slug) }}">{{ $project->name }}</a></h3>
                                    <span class="category">Solutions mobiles</span>
                                </div>
                                <div class="p-icon"><a href="{{ route('details', $project->slug) }}"><i
                                            class="flaticon-next"></i></a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Project Section End -->
@endsection
