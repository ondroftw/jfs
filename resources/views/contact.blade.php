@extends('layouts.main')

@section('content')

    <section id="form" class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <h2 class="font-dancing-script">Zanechajte nám správu</h2>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 mb-5">
                            <label for="email" class="form-label">Emailová adresa <span class="required">*</span></label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-6 mb-5">
                            <label for="name" class="form-label">Meno a priezvisko <span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Ohodnoťte nás od 1-5 (1 najlepšie)</label>
                            <input type="number" max="5" min="1" step="1" class="form-control" id="name" name="name">
                        </div>
                        <div class="col-6 mb-2">
                            <p>Čo by ste vylepšili ?</p>
                            <div class="form check">
                                <input class="form-check-input" type="radio" value="personal" name="review" id="personal">
                                <label class="form-check-label" for="personal">
                                    Personál
                                </label>
                            </div>
                            <div class="form check">
                                <input class="form-check-input" type="radio" value="jedlo" name="review" id="jedlo">
                                <label class="form-check-label" for="jedlo">
                                    Jedlo
                                </label>
                            </div>
                            <div class="form check">
                                <input class="form-check-input" type="radio" name="review" value="priestor" id="priestor">
                                <label class="form-check-label" for="priestor">
                                    Priestor
                                </label>
                            </div>
                            <div class="form check">
                                <input class="form-check-input" type="radio" value="cakanie" name="review" id="cakanie">
                                <label class="form-check-label" for="cakanie">
                                    Doba čakania
                                </label>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="message">Vaša správa <span class="required">*</span></label>
                            <textarea class="form-control" rows="5" placeholder="Vaša správa" name="message" id="message"></textarea>
                        </div>
                        <div class="col-12 mb-2">
                            <input type="checkbox" class="form-check-input" name="gdpr" id="gdpr">
                            <label class="form-check-label" for="gdpr">Súhlasím so spracovaním osobných údajov</label>
                        </div>
                        <div class="col-12 mb-2">
                            <button class="btn btn-primary">Odoslať</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-info" class="py-5 bg-lightbrown">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/contact/013-mail.svg') }}" class="img-fluid w-25 mb-0 mb-lg-4" alt="">
                    <h3>restauracia@jfs.sk</h3>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/contact/018-map.svg') }}" class="img-fluid w-25  mb-0 mb-lg-4" alt="">
                    <h3>Najlepšia 123/50 <br> 92241 Hlohovec</h3>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('static/contact/029-telephone-1.svg') }}" class="img-fluid w-25  mb-0 mb-lg-4" alt="">
                    <h3>0908 089 078</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="map">
        <div class="row">
            <div class="col-12">
                <div class="responsive-iframe-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84725.60728005922!2d17.728190847365973!3d48.42437909839939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b5a553ecec53f%3A0x400f7d1c696fc20!2sHlohovec!5e0!3m2!1sen!2ssk!4v1622652802725!5m2!1sen!2ssk" class="responsive-iframe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
