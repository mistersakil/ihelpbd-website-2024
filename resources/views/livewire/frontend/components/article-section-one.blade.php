<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-6">
                    <div class="service-article">
                        <div class="service-article-another">
                            <div class="row align-items-center">
                                {{-- <div class="col-lg-5 col-md-6">
                                    <div class="service-article-img">
                                        @if (isset($item['img']))
                                            <img src="{{ $item['img'] }}" alt="About Images">
                                        @endif
                                    </div>
                                </div> --}}
                                <!-- /.col -->
                                <div class="col-lg-6 offset-md-3">
                                    <div class="services-content-list">
                                        @if (isset($item['title']))
                                            <h3>{{ $item['title'] }}</h3>
                                        @endif

                                        @if (isset($item['items']))
                                            <ul>
                                                @foreach ($item['items'] as $childItem)
                                                    <li>
                                                        <i class="{{ _icons('arrow_right') }}"></i>
                                                        {{ $childItem }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.service-article-another -->
                    </div>
                    <!-- /.service-article -->
                </div>
                <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
