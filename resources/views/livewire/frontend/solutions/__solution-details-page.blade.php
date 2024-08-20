<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>
    <livewire:frontend.partials.home-about-section />
    <section class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="side-bar-area pr-20">
                        <div class="side-bar-categories">
                            <ul>
                                @if (count($solutionList))
                                    @foreach ($solutionList as $itemIndex => $item)
                                        <li>
                                            <a wire:navigate href="{{ $item['slug'] }}">
                                                {{ ucwords($item['title']) }}
                                                <i class="flaticon-arrow-pointing-to-right"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <!-- /.side-bar-categories  -->
                    </div>
                    <!-- /.side-bar-area  -->
                </div>
                <!-- /.col -->
                <div class="col-lg-8">
                    <div class="service-article">
                        <div class="service-article-content">
                            <img src="{{ $itemDetails['img_featured'] }}" alt="{{ ucwords($itemDetails['title']) }}">
                            <div class="content">
                                <h3>{{ ucwords($itemDetails['title']) }}</h3>
                                <p>
                                    {{ $itemDetails['body'] }}
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply
                                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                    industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book. It has survived not only five
                                    centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged. It
                                    was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                        <!-- /.service-article-content -->
                    </div>
                    <!-- /.service-article -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.service-details-area -->
</main>
