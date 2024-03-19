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
    <x-frontend.layout.topbar></x-frontend.layout.topbar>

    <x-frontend.layout.navbar></x-frontend.layout.navbar>

    {{ $slot }}


</body>

</html>
