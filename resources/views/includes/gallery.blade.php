<section id="gallery" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="font-dancing-script">Galéria</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam cupiditate delectus dicta doloremque eaque ipsum laudantium nisi, perspiciatis praesentium quam, quo rem repellendus. Dolorum esse laborum pariatur quae suscipit?</p>
            </div>
        </div>
        <div class="row">
            @foreach(range(1,4) as $number)
                <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                    <a href="{{ asset("static/gallery/$number.jpg") }}" data-lightbox="restauracia">
                        <img src="{{ asset("static/gallery/$number.jpg") }}" class="img-fluid img-thumbnail" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
