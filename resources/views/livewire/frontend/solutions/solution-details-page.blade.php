<main>
    {{-- @dump($solutionList) --}}
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    @if (array_key_exists('about', $itemDetails))
        <livewire:frontend.partials.home-about-section :item="$itemDetails['about']" />
    @endif
    @if (array_key_exists('projects', $itemDetails))
        {{-- <livewire:frontend.partials.home-projects :item="$itemDetails['projects']" /> --}}
    @endif
    @if (array_key_exists('characteristics', $itemDetails))
        {{-- <livewire:frontend.components.key-characteristics :item="$itemDetails['characteristics']" /> --}}
    @endif

    @if (array_key_exists('faqs', $itemDetails))
        {{-- <livewire:frontend.components.faq-list :item="$itemDetails['faqs']" /> --}}
    @endif
    <div class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="service-article">
                        <div class="service-article-another">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service-article-img">
                                        <img src="assets/images/services/service-details2.jpg" alt="Services Images">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="services-content-list">
                                        <h3>How to Communication with Clients Via Online Support</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida.
                                        </p>
                                        <ul>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Innovative Working
                                                Activities</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> 100% Guarantee Issued
                                                for Client</li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Dedicated Team Member
                                            </li>
                                            <li><i class="flaticon-arrow-pointing-to-right"></i> Safe &amp; Secure
                                                Environment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
