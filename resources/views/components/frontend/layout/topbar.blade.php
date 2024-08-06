<header class="top-header top-header-bg-two">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2">
                <div class="header-logo">
                    <a href="{{ route('web.home') }}" wire:navigate>
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Images">
                    </a>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-lg-8 col-md-10">
                <div class="head-middle m-auto">
                    <ul class="head-list-item">
                        <li>
                            <div class="icon">
                                <i class="{{ _icons('phone') }}"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="tel:{{ __('brand number') }}">
                                        {{ __('brand number') }}
                                    </a>
                                </h3>
                                <p> {{ __('office hours time') }} </p>

                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="{{ _icons('email') }}"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="mailto:{{ __('brand email') }}">{{ __('brand email') }}</a><br>
                                </h3>
                                <p> {{ __('get a free estimate') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="{{ _icons('location') }}"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="https://maps.app.goo.gl/CQC5kxf9FjtVXuY57" target="_blank">
                                        {{ __('brand address short') }}
                                    </a>
                                </h3>
                                <p>
                                    {{ __('get direction') }}
                                </p>
                            </div>
                        </li>
                    </ul>
                    <!-- /.head-list-item -->
                </div>
                <!-- /.head-middle -->
            </div>
            <!-- /.col -->
            <div class="col-lg-2 col-md-2">
                {{-- <div class="header-btn">
                    <a href="contact.html" class="default-btn border-radius-5">Get A Quote</a>
                </div> --}}
                @livewire('frontend.partials.local-change-component')
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="top-line"></div>
    <div class="top-line2"></div>
</header>
