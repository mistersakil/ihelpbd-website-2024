<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <title>{{ $title ?? 'Dashboard' }} | {{ config('app.name') }}</title>


    {{-- {{ Vite::useHotFile('hot')->useBuildDirectory('build_backend')->withEntryPoints('resources/backend/backendCss.css', 'resources/backend/backendJs.js') }} --}}

    @vite('resources/backend/backendCss.css')
    @vite('resources/backend/backendJs.js')
</head>

<body>
    <h1>
        something wrong
    </h1>
</body>

</html>
