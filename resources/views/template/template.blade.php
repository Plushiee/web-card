<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="keywords" content="Plushiee, web, card, furry" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- START CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('css')
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
                                        <a class="btn btn-primary w-100" href="https://plushiee.my.id/map"
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
                                            <span id="buttonTextNSFWSideBar">ANOTHER ACCOUNT</span>
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
    @yield('main');
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
    @yield('javascript')
    <!-- END JavaScript -->
</body>

</html>
