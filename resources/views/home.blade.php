@extends('template.template')

@section('title', "Plushiee's Web Card")
@section('css')
    <link rel="stylesheet" href="/css/main.css">
@endsection

@section('main')
    <main>
        <div class="container-background" id="container-background">
            <img src="/img/background/63_onlyback.png" id="langit" alt="langit.png">
            <img src="/img/background/63_onlychar.png" id="karakter" alt="karakter.png" data-aos="fade-left"
                data-aos-duration="3000">
            <img src="/img/background/63_onlywatermark.png" id="watermark" alt="watermark.png" class="d-none d-md-block">
        </div>
        <div class="container-fluid main">
            <div class="container-card row align-items-center pt-3 pt-sm-0">
                <div class="card p-3 col-md-12 col-lg-6 mx-auto mx-md-5 my-auto">
                    <img class="rounded-circle shadow-lg card-img-top mx-auto d-block" src="{{ $profilePictureUrl }}"
                        data-profile-picture-url="{{ $profilePictureUrl }}" alt="Plushiewhy Instagram profile Picture.png"
                        id="profilePicture">

                    <div class="card-body text-center">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h5 class="card-title text-center">@PlushieWhy</h5>
                        <p class="card-text mb-0 pb-0" id="jumlahInstagram"> <b class="text-muted">{{ $followersCount }}</b>
                            Followers <i class="bi bi-dot"></i> <b class="text-muted">{{ $followingCount }}</b>
                            Following
                        </p>
                        <p class="card-text mt-0 pt-0" id="jumlahPost"><b class="text-muted">{{ $postsCount }}</b>
                            Post </p>
                        <div class="d-grid gap-2">
                            <a href="https://www.instagram.com/plushiewhy/" target="_blank" class="btn btn-primary"
                                type="button">
                                <i class="bi bi-instagram float-start"></i>
                                Instagram
                                <div class="transparent-item float-end"></div>
                            </a>
                            <a href="https://www.facebook.com/Plushiee.Tika" target="_blank" class="btn btn-primary"
                                type="button">
                                <i class="bi bi-facebook float-start"></i>
                                Facebook
                                <div class="transparent-item float-end"></div>
                            </a>
                            <a href="https://twitter.com/Plushiewhy" target="_blank" class="btn btn-primary" type="button">
                                <i class="bi bi-twitter-x float-start"></i>
                                X - Twitter
                                <div class="transparent-item float-end"></div>
                            </a>
                            <a class="btn btn-primary w-100" href="https://plushiee.my.id/map" target="_blank">
                                <i class="bi bi-map float-start"></i>
                                Mineceraft Server
                                <div class="transparent-item float-end"></div>
                            </a>
                            <a class="btn btn-primary" type="button" id="gtaButton">
                                <i class="bi bi-dpad-fill float-start" id="ikonKiriGTA"></i>
                                <span id="buttonTextGTA">GTA RP</span>
                                <div class="transparent-item float-end" id="ikonKananGTA"></div>
                            </a>
                            <button type="button" class="btn btn-danger nsfwButton" id="nsfwButton">
                                <i class="bi bi-exclamation-triangle-fill float-start" id="ikonKiriNSFW"></i>
                                <span id="buttonTextNSFW">NSFW ACCOUNT</span>
                                <i class="bi bi-exclamation-triangle-fill float-end" id="ikonKananNSFW"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('javascript')
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
