<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    @if (count($productDetails))
        <div class="project-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="project-article">
                            <div class="project-article-content">
                                <img src="{{ $productDetails['img_featured'] }}"
                                    alt="{{ ucwords($productDetails['title']) }}">
                                <div class="content">
                                    <h3>
                                        {{ ucwords($productDetails['title']) }}
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida.
                                        Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is
                                        simply
                                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                                        of
                                        type and scrambled it to make a type specimen book. It has survived not only
                                        five
                                        centuries,
                                        but also the leap into electronic typesetting, remaining essentially unchanged.
                                        It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem
                                        Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including
                                        versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida.
                                        Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is
                                        simply
                                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                                        of
                                        type and scrambled it to make a type specimen book. It has survived not only
                                        five
                                        centuries,
                                        but also the leap into electronic typesetting, remaining essentially unchanged.
                                        It
                                        was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem
                                        Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including
                                        versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                            <div class="project-article-bottom">
                                <h3>Why Choose Us</h3>
                                <ul class="project-article-list">
                                    <li><i class="bx bx-check-square"></i> Innovative Working Activities</li>
                                    <li><i class="bx bx-check-square"></i> 100% Guarantee Issued for Client</li>
                                    <li><i class="bx bx-check-square"></i> Dedicated Team Member</li>
                                    <li><i class="bx bx-check-square"></i> Safe & Secure Environment</li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply
                                    dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type
                                    and scrambled it to make a type specimen book. It has survived not only five
                                    centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged. It
                                    was
                                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                    passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="project-article-img">
                                            <img src="{{ $productDetails['img_thumb'] }}"
                                                alt="{{ ucwords($productDetails['title']) }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="project-article-img">
                                            <img src="{{ $productDetails['img_thumb'] }}"
                                                alt="{{ ucwords($productDetails['title']) }}">
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply
                                    dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type
                                    and scrambled it to make a type specimen book. It has survived not only five
                                    centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged. It
                                    was
                                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                    passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-sidebar pl-20">
                            <div class="project-categories">
                                <ul>
                                    <li>Date: <span>March 30, 2024</span></li>
                                    <li>Client: <span>Andres Manila</span></li>
                                    <li>Duration: <span>3 Months</span></li>
                                    <li>Category: <span>Floor</span></li>
                                    <li>Tag: <span>Floor</span></li>
                                    <li>Completed: <span>May 10, 2024</span></li>
                                </ul>
                            </div>
                            <div class="project-contact">
                                <div class="side-bar-from">
                                    <h3>Schedule an Appointment</h3>
                                    <div class="appointment-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" id="name"
                                                            class="form-control" required
                                                            data-error="Please enter your name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email"
                                                            class="form-control" required
                                                            data-error="Please enter your email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="phone_number" id="phone_number"
                                                            required data-error="Please enter your number"
                                                            class="form-control" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required
                                                            data-error="Write your message" placeholder="Your Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <button type="submit" class="default-btn">
                                                        Send Message
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-area">
                                <span>Subscribe</span>
                                <h2>Subscribe for Newsletter</h2>
                                <form class="subscribe-form" data-toggle="validator" method="POST">
                                    <input type="email" class="form-control" placeholder="Email*" name="EMAIL"
                                        required autocomplete="off">
                                    <button class="default-btn" type="submit">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="section-title text-center">
            <code>404 page not found</code>
        </div>
    @endif
</main>
