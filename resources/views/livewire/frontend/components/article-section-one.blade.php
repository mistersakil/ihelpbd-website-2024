<main>
    @if ($isDisplaySection)
        <div class="service-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    @foreach ($items as $item)
                        <div class="col">
                            <div class="service-article">
                                <div class="service-article-another">
                                    <div class="row align-items-center">
                                        <div class="col  offset-md-3">
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
        <!-- /.service-details-area -->
    @endif
</main>
