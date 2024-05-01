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
    @vite(['resources/backend/app.css', 'resources/backend/app.js'])
    @stack('dynamic_css')
    @livewireStyles
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <livewire:backend.partials.sidebar />
        <!-- /sidebar -->

        <livewire:backend.partials.header />
        <!-- /header -->

        <!-- main content -->
        <div class="page-wrapper">
            <div class="page-content">
                {{ $slot }}
            </div>
        </div>
        <!-- end: main content -->

        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
    </div>


    @stack('dynamic_js')
    @livewireScripts
    <script type="module">
    /* Toast notification after any action */
    window.addEventListener('toast_alert', event => {
        event.preventDefault();
        Toast.fire({
            icon: event.detail.type,
            title: event.detail.message,
        });
    })
    /* End: Toast notification after success */


    /* Notify a confirmation alert before proceed any further action */
    window.addEventListener('are_you_sure', event => {
        const {
            component,
            message,
        } = event.detail;
        event.preventDefault();
        Swal.fire({
            title: message,
            text: "You can not revert this operation later!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                window.livewire.emitTo(component, 'confirmed_event');
            }
        })
    })
    /* End: Notify a confirmation alert before proceed any further action */
    </script>
</body>

</html>