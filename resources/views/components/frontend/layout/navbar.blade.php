<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container-fluid">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a wire:navigate href="{{ route('web.home') }}">
                        <img src="{{ Vite::asset('resources/images/logo-dark.svg') }}" class="logo_img" alt="Logo">
                    </a>
                </div>
            </div>
            <!-- /.mobile-responsive-menu -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.mobile-responsive-nav -->

    <div class="desktop-nav nav-area desktop-nav-one" style="background: #f85f0a42;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.home') }}" class="nav-link active">
                                {{ __('home') }}
                            </a>
                        </li>
                        <!-- /.nav-item -->

                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.solutions') }}" class="nav-link">
                                {{ __('solutions') }}
                            </a>
                        </li>
                        <!-- /.nav-item -->

                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.products') }}" class="nav-link">
                                {{ __('products') }}
                            </a>
                        </li>
                        <!-- /.nav-item -->

                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.blogs') }}" class="nav-link">
                                {{ __('blogs') }}
                            </a>
                        </li>
                        <!-- /.nav-item -->

                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.about') }}" class="nav-link">
                                {{ __('about us') }}
                            </a>
                        </li>
                        <!-- /.nav-item -->

                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.contact') }}" class="nav-link">
                                {{ __('contact') }}
                            </a>
                        </li>
                        <!-- /.nav-item -->

                    </ul>
                    <!-- /.navbar-nav -->

                    <div class="nav-sidebar">

                        <div class="nav-search">
                            <i id="search-btn" class="bx bx-search"></i>
                            <div id="search-overlay" class="block">
                                <div class="centered">
                                    <div id="search-box">
                                        <i id="close-btn" class="bx bx-x"></i>
                                        <form>
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <button type="submit" class="btn">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.search-overlay -->
                        </div>
                        <!-- /.nav-search -->
                    </div>
                    <!-- /.nav-sidebar -->

                    <div class="mobile-nav-area">
                        <div class="mobile-icon">
                            <a href="#" class="burger-menu menu-icon-one d-in-line">
                                <i class="flaticon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /.mobile-nav-area -->
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.navbar -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.desktop-nav -->
</div>
