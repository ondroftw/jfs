@extends('layouts.main')

@section('content')
    <section id="main" class="d-flex align-items-center justify-content-center">
        <div class="heading-wrapper text-center">
            <h1 class="color-white font-dancing-script">Reštaurácia JFS</h1>
            <p class="color-white">Najlepšie jedlá v Hlohovci</p>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex align-items-center">
                    <div class="about-content-wrapper">
                        <h2 class="font-dancing-script">O nás</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consequatur cupiditate delectus doloremque, eaque eum ex in ipsa labore nesciunt omnis provident ratione vel vero vitae voluptates! Illo, neque!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consequatur cupiditate delectus doloremque, eaque eum ex in ipsa labore nesciunt omnis provident ratione vel vero vitae voluptates! Illo, neque!</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('static/dishes.png') }}" alt="" class="img-fluid rounded elevated-shadow">
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-5 bg-lightbrown">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/features/005-food tray.svg') }}" class="img-fluid w-25 mb-0 mb-lg-4" alt="">
                    <h3 class="font-dancing-script">Výhoda 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dignissimos eaque maxime. Corporis doloribus esse neque nihil non nostrum quaerat quos vero? Amet consequuntur distinctio fugit maxime nisi repellendus. Quam!</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/features/008-plate.svg') }}" class="img-fluid w-25  mb-0 mb-lg-4" alt="">
                    <h3 class="font-dancing-script">Výhoda 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dignissimos eaque maxime. Corporis doloribus esse neque nihil non nostrum quaerat quos vero? Amet consequuntur distinctio fugit maxime nisi repellendus. Quam!</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/features/018-cupcake.svg') }}" class="img-fluid w-25  mb-0 mb-lg-4" alt="">
                    <h3 class="font-dancing-script">Výhoda 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dignissimos eaque maxime. Corporis doloribus esse neque nihil non nostrum quaerat quos vero? Amet consequuntur distinctio fugit maxime nisi repellendus. Quam!</p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.gallery')
@endsection
