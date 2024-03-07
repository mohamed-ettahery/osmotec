@extends('layouts.master')
@section('content')
    <!-- 404 Section Start -->
    <div class="404-content">
        <div class="container">
            <div class="box-item text-center my-5">
                <img src="{{ asset('assets/images/404.svg') }}" width="500" alt="404 image">
                <div class="box-btn mt-4">
                    <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa-solid fa-circle-caret-left"></i> Retour
                        à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Section End -->
@endsection
