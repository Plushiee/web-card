<!doctype html>
<html lang="en">

<head>
    <title>Plushiee Web Card</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- START CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <!-- END CSS CDN -->

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container-fluid">
            <div class="card-container row align-items-center">
                <div class="card p-3 col-md-12" style="width: 22rem;">
                    <img class="rounded-circle shadow-lg card-img-top mx-auto d-block"
                        src="{{ route('instagram.plushiee_profile_picture') }}"
                        alt="Plushiewhy Instagram profile Picture.png">
                    <div class="card-body text-center">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h5 class="card-title text-center">@PlushieWhy</a></h5>
                        <p class="card-text mb-0 pb-0" id="jumlahInstagram"> <b
                                class="text-muted">{{ $followersCount }}</b>
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
                            <a href="https://twitter.com/Plushiewhy" target="_blank" class="btn btn-primary"
                                type="button">
                                <i class="bi bi-twitter-x float-start"></i>
                                X - Twitter
                                <div class="transparent-item float-end"></div>
                            </a>
                            <a href="https://github.com/Plushiee/" target="_blank" class="btn btn-primary"
                                type="button">
                                <i class="bi bi-github float-start"></i>
                                GitHub
                                <div class="transparent-item float-end"></div>
                            </a>
                            <button class="btn btn-primary" type="button" id="gtaButton">
                                <i class="bi bi-dpad-fill float-start" id="ikonKiriGTA"></i>
                                <span id="buttonTextGTA">GTA RP</span>
                                <div class="transparent-item float-end" id="ikonKananGTA"></div>
                            </button>
                            <button type="button" class="btn btn-danger" id="nsfwButton">
                                <i class="bi bi-exclamation-triangle-fill float-start" id="ikonKiri"></i>
                                <span id="buttonText">NSFW ACCOUNT</span>
                                <i class="bi bi-exclamation-triangle-fill float-end" id="ikonKanan"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- START Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- END Bootstrap JavaScript Libraries -->

    <!-- START CDNnya Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- END CDNnya Script-->

    <!-- START JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- END JavaScript -->
</body>

</html>
