<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container-fluid">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a wire:navigate href="{{ route('web.home') }}">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo-one" alt="Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav nav-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" wire:navigate href="{{ route('web.home') }}">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo-one" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.home') }}" class="nav-link">
                                {{ __('home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.about') }}" class="nav-link">
                                {{ __('about') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.contact') }}" class="nav-link">
                                {{ __('contact') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('web.blogs') }}" class="nav-link" wire:navigate>
                                {{ __('blog') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('web.products') }}" class="nav-link" wire:navigate>
                                {{ __('products') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('web.solutions') }}" class="nav-link" wire:navigate>
                                {{ __('solutions') }}
                            </a>
                        </li>
                    </ul>
                    <div class="nav-sidebar">
                        <div class="nav-btn">
                            <a href="javascript:void(0)" class="default-btn border-radius-5">Request For Demo</a>
                        </div>
                    </div>
                    <div class="mobile-nav-area">
                        <div class="mobile-btn">
                            <a href="javascript:void(0)" class="default-btn border-radius-5">Request For Demo</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
