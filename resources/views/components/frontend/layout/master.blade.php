<!doctype html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | iHelpKL</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">


    @vite(['resources/frontend/app.css', 'resources/frontend/app.js'])
</head>

<body>

    {{-- <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div> --}}


    <header class="top-header top-header-bg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8 col-sm-7">
                    <div class="header-left">
                        <ul>
                            <li>
                                <i class='bx bx-phone'></i>
                                <a href="tel:+8256987456">+8256987456</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:webmaster@example.com">info@ihelpkl.com</a>.<br>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <x-frontend.layout.navbar></x-frontend.layout.navbar>

    {{ $slot }}


</body>

</html>
