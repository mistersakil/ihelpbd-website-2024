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

    <div class="desktop-nav nav-area desktop-nav-one">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('web.home') }}" class="nav-link active">
                                {{ __('home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        User
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">
                                                Log In
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-condition.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Project
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="project.html" class="nav-link">
                                        Project
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="project-details.html" class="nav-link">
                                        Project Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="service-1.html" class="nav-link">
                                        Services Style One
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-2.html" class="nav-link">
                                        Services Style Two
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-details.html" class="nav-link">
                                        Service Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-1.html" class="nav-link">
                                        Blog Grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-2.html" class="nav-link">
                                        Blog Left Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-3.html" class="nav-link">
                                        Blog Right Sidebar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                    <div class="nav-sidebar">


                        <!-- Change locate -->


                        {{-- @livewire('frontend.partials.local-change-component') --}}

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
                        </div>

                    </div>
                    <div class="mobile-nav-area">
                        <div class="mobile-icon">
                            <a href="#" class="burger-menu menu-icon-one d-in-line">
                                <i class="flaticon-menu"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>
