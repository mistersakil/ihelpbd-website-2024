<!doctype html>
<html lang="en" data-sidenav-view="hidden">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes">
    <meta name="keywords"
        content="ihelpbd, Call Center in Bangladesh, call center solution and software provider in Bangladesh, CRM software provider in Bangladesh, omnichannel contact center software, call center software inbound, ticketing system, customer service ticketing system, visual ivr technology solution fo customer service, visual interactive voice Response (VIVR), social media manager software, interactive voice response (IVR)">

    <meta name="description"
        content="ihelpbd offering call centers,CRM software solution, ticketing systems, omnichannel, inbound call center software, and visual IVR technology. Additionally, social media manager software, along with interactive voice response solutions and BPO">
    <meta name="author" content="Md Sakil Mahmud <sakil.diu.cse@gmail.com>" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @isset($title)
        <title> {{ __($title) }} | iHelpKL </title>
    @else
        <title>{{ __('meta title') }} | iHelpKL </title>
    @endisset

    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicon.png') }}">


    @vite(['resources/frontend/app.css', 'resources/frontend/app.js'])

    @livewireStyles
</head>

<body>
    <x-frontend.layout.topbar />
    <x-frontend.layout.navbar />

    @if (!request()->routeIs('web.home'))
        @isset($innerBanner)
            {{ $innerBanner }}
        @else
            <x-frontend.layout.inner-banner />
        @endisset
    @endif

    {{ $slot }}

    <x-frontend.layout.footer />

    @livewireScripts
</body>

</html>
