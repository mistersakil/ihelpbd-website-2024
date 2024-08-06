<section class="contact-widget-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.783998027193!2d90.3729483740269!3d23.755080888599164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bfc91a374a19%3A0x36a2598fad33a7d8!2siHelpBD%20(call%20center%20software)!5e0!3m2!1sen!2sbd!4v1722965400694!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-lg-6">
                <div class="contact-widget-form pl-20">
                    <div class="contact-form">
                        <h3>{{ __('contact with us') }}!</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            required data-error="Please Enter Your Name" placeholder="Name*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            required data-error="Please Enter Your Email" placeholder="Email*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please Enter Your number" class="form-control"
                                            placeholder="Phone Number*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required data-error="Please Enter Your Subject" placeholder="Your Subject*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                            data-error="Write your message" placeholder="Your Message*"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Accept <a href="javascript:void(0)">Terms & Conditions</a> And <a
                                                href="javascript:void(0)">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        {{ __('send message') }}
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /form -->
                    </div>
                    <!-- /.contact-form -->
                </div>
                <!-- /.contact-widget-form -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
