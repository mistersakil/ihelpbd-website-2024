<!doctype html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | iHelpKL</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">


    @vite(['resources/frontend/app.css', 'resources/frontend/app.js'])

    @livewireStyles
</head>

<body>
    <x-frontend.layout.topbar></x-frontend.layout.topbar>

    <x-frontend.layout.navbar></x-frontend.layout.navbar>

    {{ $slot }}

    <x-frontend.layout.footer></x-frontend.layout.footer>

    @livewireScripts
</body>

</html>
