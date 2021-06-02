@extends('layouts.main')

@section('content')

    <section id="card" class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6" v-for="dish in dishes">
                    <h2 class="font-dancing-script">@{{ dish.name }}</h2>
                    <ul class="card-list">
                        <li class="d-flex justify-content-between" v-for="dishObject in dish.dishes">
                            <span>@{{ dishObject.name }}</span>
                            <span>@{{ dishObject.price.toFixed(2) }} €</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script>
        var app = new Vue({
            el: '#card',
            data: {
                dishes: 'Hello Vue!'
            },
            mounted() {
                fetch('/dishes-xml')
                    .then(response => response.json())
                    .then(data => this.dishes = data);
            }
        })
    </script>
@endpush
