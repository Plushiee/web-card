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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <!-- END CSS CDN -->

</head>

<body>
    <header>
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand ms-md-5 p-0" href="/">
                    <img src="/img/navbar/PlushieWhy watermark.png" class="d-inline-block align-text-top" alt="Logo"
                        width="130">
                    <span class="tulisan-tangan d-none d-md-inline">Web Card</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            <img src="/img/navbar/PlushieWhy watermark.png" class="d-inline-block align-text-top"
                                alt="Logo" width="100">
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Web Card</a>
                            </li>
                            <li class="nav-item dropdown info-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    More Info!
                                </a>
                                <ul class="dropdown-menu px-2 info-dropdown-menu">
                                    <li class="mb-2">
                                        <a class="btn btn-primary w-100" href="https://www.instagram.com/plushiewhy/"
                                            target="_blank">
                                            <i class="bi bi-instagram float-start"></i>
                                            Instagram
                                            <div class="transparent-item float-end"></div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="btn btn-primary w-100" href="https://www.facebook.com/Plushiee.Tika"
                                            target="_blank">
                                            <i class="bi bi-facebook float-start"></i>
                                            Facebook
                                            <div class="transparent-item float-end"></div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="btn btn-primary w-100" href="https://twitter.com/Plushiewhy"
                                            target="_blank">
                                            <i class="bi bi-twitter-x float-start"></i>
                                            X - Twitter
                                            <div class="transparent-item float-end"></div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="btn btn-primary w-100" href="https://plushie.my.id/map"
                                            target="_blank">
                                            <i class="bi bi-map float-start"></i>
                                            Mineceraft Server
                                            <div class="transparent-item float-end"></div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="btn btn-primary w-100" id="gtaButtonSideBar">
                                            <i class="bi bi-dpad-fill float-start" id="ikonKiriGTASideBar"></i>
                                            <span id="buttonTextGTASideBar">GTA RP</span>
                                            <div class="transparent-item float-end" id="ikonKananGTASideBar"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-danger w-100 nsfwButton"
                                            id="nsfwButtonSideBar">
                                            <i class="bi bi-exclamation-triangle-fill float-start"
                                                id="ikonKiriNSFWSideBar"></i>
                                            <span id="buttonTextNSFWSideBar">NSFW ACCOUNT</span>
                                            <i class="bi bi-exclamation-triangle-fill float-end"
                                                id="ikonKananNSFWSideBar"></i>
                                        </button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="mt-3" role="search">
                            @csrf
                            <div class="mb-3">
                                <label for="artCode" class="form-label">Art Tracking</label>
                                <div class="input-group">
                                    <input class="form-control me-2" type="search" placeholder="Art Code..."
                                        aria-label="Art Code..." name="artCode">
                                    <button class="btn btn-outline-primary" type="submit">Coming Soon!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-background" id="container-background">
            <img src="/img/background/63_onlyback.png" id="langit" alt="langit.png">
            <img src="/img/background/63_onlychar.png" id="karakter" alt="karakter.png" data-aos="fade-left" data-aos-duration="3000">
            <img src="/img/background/63_onlywatermark.png" id="watermark" alt="watermark.png"
                class="d-none d-md-block">
        </div>
        <div class="container-fluid main">
            <div class="container-card row align-items-center pt-3 pt-sm-0">
                <div class="card p-3 col-md-12 col-lg-6 mx-auto mx-md-5 my-auto">
                    <img class="rounded-circle shadow-lg card-img-top mx-auto d-block" src="{{ $profilePictureUrl }}"
                        alt="Plushiewhy Instagram profile Picture.png">
                    <div class="card-body text-center">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h5 class="card-title text-center">@PlushieWhy</h5>
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
                            <a class="btn btn-primary w-100" href="https://plushie.my.id/map" target="_blank">
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
    <footer class="text-center p-0 fixed-bottom offcanvas-footer" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        </div>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.20); color: white;">
            © 2023 - {{ date('Y') }} Copyright @PlushieWhy
        </div>
        <!-- Copyright -->
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- END CDNnya Script-->

    <!-- START JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- END JavaScript -->
</body>

</html>
