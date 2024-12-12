<main>
    <x-slot:innerBanner>
        {{-- <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" /> --}}
    </x-slot:innerBanner>
    <!-- Blog Widget Area -->
    <div class="blog-widget-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-card-two">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-img2.jpg" alt="Blog Images">
                                </a>
                                <div class="content">
                                    <ul>
                                        <li><a href="author.html"> <i class='bx bx-user'></i>By John </a></li>
                                        <li><i class='bx bx-calendar'></i> 14 April </li>
                                        <li><i class='bx bx-comment-dots'></i> 3 Comments </li>
                                    </ul>
                                    <h3><a href="blog-details.html">Why You Need Virtual Assistant for Your Company</a>
                                    </h3>
                                    <a href="blog-details.html" class="read-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <!-- /.col -->

                <div class="col-lg-4">
                    <div class="side-bar-area pl-20">

                        <div class="side-bar-widget">
                            <h3 class="title">Recent Post</h3>
                            <div class="widget-popular-post">
                                <article class="item">
                                    <a href="javascript:void(0)" class="thumb">
                                        <span class="full-image cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="javascript:void(0)">
                                                Reasons Why You Need Virtual Assistant
                                            </a>
                                        </h4>

                                        <a href="javascript:void(0)" class="read-btn" target="_blank">Read More</a>
                                    </div>
                                </article>


                            </div>
                        </div>

                        <div class="side-bar-widget side-bar-categories">
                            <h3 class="title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" target="_blank">
                                        Data Entry
                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>


                        <div class="side-bar-widget">
                            <h3 class="title">Tags</h3>
                            <ul class="side-bar-widget-tag">
                                <li><a href="javascript:void(0)">Employee</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.blog-widget-area -->
</main>
