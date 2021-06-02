@extends('layouts.main')

@section('content')

    @include('includes.about', ['class' => 'mt-5'])

    @include('includes.gallery')

    <section id="features" class="py-5 bg-lightbrown">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="font-dancing-script mb-4">Naši kuchári</h2>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/chef.png') }}" class="img-fluid w-50 mb-0 mb-lg-4" alt="">
                    <h3 class="font-dancing-script">Jozef František</h3>
                    <p class="fst-italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dignissimos eaque maxime"</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/chef.png') }}" class="img-fluid w-50 mb-0 mb-lg-4" alt="">
                    <h3 class="font-dancing-script">František Štefanovič</h3>
                    <p class="fst-italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dignissimos eaque maxime"</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/chef.png') }}" class="img-fluid w-50 mb-0 mb-lg-4" alt="">
                    <h3 class="font-dancing-script">František Jozef</h3>
                    <p class="fst-italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dignissimos eaque maxime"</p>
                </div>
            </div>
        </div>
    </section>

@endsection
