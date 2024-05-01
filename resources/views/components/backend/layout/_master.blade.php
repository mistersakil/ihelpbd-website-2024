<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::image('favicon.png') }}" type="image/png" />
    <title>{{ $meta_title ?? 'Dashboard' }} | {{ config('app.name') }}</title>

    <!-- Google fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    @vite([
    "resources/backend/css/app.css",
    "resources/backend/js/app.js",
    ])
    @stack('dynamic_css')
    @livewireStyles
</head>

<body>
    <div class="wrapper">
        <livewire:backend.partials.sidebar />
        <!-- /sidebar -->

        <livewire:backend.partials.header />
        <!-- /header -->

        <div class="page-wrapper">
            <div class="page-content">
                {{ $breadcrumb ?? null }}
                {{ $slot }}
            </div>
            <!-- /.page-content -->
        </div>
        <!-- /.page-wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright &copy; {{ date('Y') }}. All right reserved.</p>

        </footer>
        <!-- /.page-footer -->
    </div>
    <!-- /.wrapper -->

    @stack('dynamic_js')
    @livewireScripts
</body>

</html>