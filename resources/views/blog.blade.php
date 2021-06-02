@extends('layouts.main')

@section('content')

    <section id="blog" class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1 class="font-dancing-script">Blog</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium alias, aliquam consequuntur culpa distinctio eos expedita facilis hic maxime minima officiis quibusdam, sunt, vel velit veniam voluptates. Quod, ullam?</p>
                    @foreach(range(1,4) as $number)
                        <div class="blog-item mt-5 pb-5">
                            <img src="{{ asset('static/blog.png') }}" class="img-fluid mb-4" alt="">
                            <h2 class="font-dancing-script">Nadpis článku {{ $number }}</h2>
                            <p><strong>Autor: </strong> Jozef František | <strong>Publikované: </strong> 24.03.2021</p>
                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit laborum mollitia nobis nulla pariatur possimus quod sint tempora, velit! Aliquam autem eum ipsa, magnam magni nam neque quidem quos.</p>
                            <a href="#" class="btn btn-secondary">Čítať viac</a>
                        </div>
                    @endforeach
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sidebar mt-5">
                        <h3 class="font-dancing-script">Najčítanejšie</h3>
                        <div class="row">
                            @foreach(range(1,4) as $number)
                                <div class="col-6">
                                    <div class="blog-item sidebar-blog-item pb-2 mt-2 mb-2 no-dash">
                                        <img src="{{ asset('static/blog.png') }}" class="img-fluid mb-1" alt="">
                                        <h4 class="mb-1">Nadpis článku {{ $number }}</h4>
                                        <p class="fst-italic mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                        <a href="#">Čítať viac</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="sidebar mt-5">
                        <h3 class="font-dancing-script">Najnovšie</h3>
                        <div class="row">
                            @foreach(range(1,4) as $number)
                                <div class="col-6">
                                    <div class="blog-item sidebar-blog-item pb-2 mt-2 mb-2 no-dash">
                                        <img src="{{ asset('static/blog.png') }}" class="img-fluid mb-1" alt="">
                                        <h4 class="mb-1">Nadpis článku {{ $number }}</h4>
                                        <p class="fst-italic mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                        <a href="#">Čítať viac</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
