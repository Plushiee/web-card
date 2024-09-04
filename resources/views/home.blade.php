@extends('template.template')

@section('title', "Plushiee's Web Card")
@section('css')
    <link rel="stylesheet" href="/css/main.css">
@endsection

@section('main')
    <main>
        <div class="container-background" id="container-background">
            <img src="/img/background/63_onlyback.png" id="langit" alt="langit.png">
            <img src="/img/background/68.png" id="karakter" alt="karakter.png" data-aos="fade-left"
            data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
            <img src="/img/background/63_onlywatermark.png" id="watermark" alt="watermark.png" class="d-none d-md-block">
        </div>
        <div class="container-fluid main">
            <div class="container-card row align-items-center pt-3 pt-sm-0">
                <div class="card p-3 col-md-12 col-lg-6 mx-auto mx-md-5 my-auto">
                    <img class="rounded-circle shadow-lg card-img-top mx-auto d-block"
                        src="{{ $profilePictureUrl == '-' ? asset('img/Background/pfp.png') : $profilePictureUrl }}" alt="Plushiewhy Instagram profile Picture.png" id="profilePicture">
                    <div class="card-body text-center">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h5 class="card-title text-center">@PlushieWhy</h5>
                        <p class="card-text mb-0 pb-0" id="jumlahInstagram"> <b class="text-muted">{{ $followersCount == '-' ? 359 : $followersCount }}</b>
                            Followers <i class="bi bi-dot"></i> <b class="text-muted">{{ $followingCount == '-' ? 158 : $followingCount }}</b>
                            Following
                        </p>
                        <p class="card-text mt-0 pt-0" id="jumlahPost"><b class="text-muted">{{ $postsCount == '-' ? 40 : $postsCount }}</b>
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
                            <a href="https://discord.com/users/plushiee" target="_blank" class="btn btn-primary" type="button">
                                <i class="bi bi-discord float-start"></i>
                                Discord
                                <div class="transparent-item float-end"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('javascript')
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
