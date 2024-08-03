<main class="services-area-two pt-100 pb-70">
    {{-- @dump($dataList) --}}
    <div class="container">
        <div class="section-title text-center ">
            <span class="sp-title">{{ $sectionTitle }}</span>
            <h2>{{ $sectionSubTitle }}</h2>
        </div>
        <!-- /.section-title -->

        @if (count($dataList))
            <div class="tab services-tab {{ $isShowSectionHeader ? 'pt-45' : '' }}">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="tabs active">
                            @foreach ($dataList as $tabIndex => $data)
                                <li class="{{ $loop->first ? 'current' : '' }}" wire:key="tab_{{ $tabIndex }}">
                                    <a href="javascript:void(0)">
                                        {{ ucwords($data['title']) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- /.tabs -->
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-12 col-md-12">
                        <div class="tab_content current active pt-45 ">
                            @foreach ($dataList as $tabContentindex => $data)
                                <div class="tabs_item {{ $loop->first ? 'current' : '' }}"
                                    wire:key="tab_content_{{ $tabContentindex }}">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="services-tab-img">
                                                <a href="service-details.html">
                                                    <img src="{{ $data['img_featured'] }}"
                                                        alt="{{ ucwords($data['title']) }}"></a>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-lg-6">
                                            <div class="services-tab-content pl-20">
                                                <h2>{{ ucwords($data['sub_title']) }}</h2>
                                                <p>
                                                    {{ ucwords($data['body']) }}
                                                </p>
                                                <ul class="services-tab-list">
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Innovative
                                                        Working
                                                        Activities</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> 100% Guarantee
                                                        Issued
                                                        for Client</li>
                                                    <li><i class="flaticon-arrow-pointing-to-right"></i> Turnaround
                                                        Situation
                                                    </li>
                                                </ul>
                                                <a href="service-details.html"
                                                    class="default-btn border-radius-5">{{ __('read more') }}</a>
                                            </div>
                                            <!-- /.services-tab-content -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.tabs_item -->
                            @endforeach
                        </div>
                        <!-- /.tab_content -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.tab -->
        @endif
    </div>
    <!-- /.container -->
</main>
