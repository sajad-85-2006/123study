@extends('web.layouts.app')

@section('content')
    <!-- Start Page-title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page-title Area -->

    <!-- Start Contact Area -->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center pb-100">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-content">
                        <span class="sub-title">CONTACT US</span>
                        <h2>Contact Us With Your Details & Ready To Start</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-contact-info-box">
                                    <div class="icon">
                                        <i class="ri-home-7-line"></i>
                                    </div>
                                    <h3>Main Office</h3>
                                    <p>325 Rockford Lane Durham, New York, USA</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-contact-info-box">
                                    <div class="icon">
                                        <i class="ri-phone-line"></i>
                                    </div>
                                    <h3>Our Phone</h3>
                                    <p><span>Call:</span><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#fad1cbc2cbcecec2c8c8c8c3cc">+(1) 814 482 2296</a></p>
                                    <p><span>Call:</span><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#83a8b6b7b4bbbab5b0b1b2b6b4">+(5) 478 963 2157</a></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-contact-info-box">
                                    <div class="icon">
                                        <i class="ri-mail-star-line"></i>
                                    </div>
                                    <h3>Email Address</h3>
                                    <p><span>Email:</span><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#c3aba6afafac83a6adb1baeda0acae"><span class="__cf_email__" data-cfemail="533b363f3f3c13363d212a7d303c3e">[email&#160;protected]</span></a></p>
                                    <p><span>Email:</span><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#f69f989099b69398848fd895999b"><span class="__cf_email__" data-cfemail="bad3d4dcd5fadfd4c8c394d9d5d7">[email&#160;protected]</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-image">
                        <img src="assets/img/contact.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46660.669043361966!2d-76.17429939609431!3d43.03529129888566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d9f3b8019f2991%3A0x58d5929e21a62e5!2sDinosaur%20Bar-B-Que!5e0!3m2!1sen!2sbd!4v1593527523138!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <span class="sub-title">SEND MESSAGE</span>
                        <h2>Lets Provide Us a Message & Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolo lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy liquyam erat, sed diam voluptua.</p>
                        <form id="contactForm" action="/contact" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Full Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Email Address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Mobile no">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Subject" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkme">
                                        <label class="form-check-label" for="checkme">
                                            Accept <a href="terms-conditions.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="default-btn">Send Message <i class="ri-arrow-right-line"></i></button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
@endsection
