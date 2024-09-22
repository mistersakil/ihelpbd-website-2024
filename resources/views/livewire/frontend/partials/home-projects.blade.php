<main>
    @if ($isDisplaySection)
        <div class="project-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    @if (isset($title))
                        <span class="sp-title2">{{ $title }}</span>
                    @endif
                    @if (isset($subTitle))
                        <h2>{{ ucwords($subTitle) }}</h2>
                    @endif
                </div>
                <!-- /.section-title -->

                @if (count($items))
                    <div class="row pt-45">
                        <div class="col-lg-7">
                            <div class="project-slider-two owl-carousel owl-theme" data-slider-id="1">
                                @foreach ($items as $item)
                                    <div class="project-slider-img">
                                        <img src="{{ $item['img'] }}" alt="Project image 1">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.col-->

                        <div class="col-lg-5">
                            <div class="thumbs-wrap">
                                <div class="owl-thumbs project-area-thumb" data-slider-id="1">
                                    @foreach ($items as $item)
                                        <div class="owl-thumb-item">
                                            <div class="content">
                                                @if (isset($item['heading']))
                                                    <h3> {{ ucfirst($item['heading']) }}</h3>
                                                @endif
                                                <p> {{ ucfirst($item['body']) }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row-->
                @endif
            </div>
            <!-- /.container -->
        </div>
        <!-- /.project-area-two -->
    @endif
</main>
