@extends('web.layouts.app')

@section('content')
    <!-- Start Page-title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Financial Consultancy</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
{{--                    <li><a href="projects-1.html">Projects</a></li>--}}
                    <li>Parent</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page-title Area -->

    <!-- Start Projects Details Area -->
    <div class="projects-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="projects-details-image">
                        <img src="assets/img/projects/projects1.jpg" alt="image">
                    </div>

                    <div class="projects-details-desc">
                        <h3>Project Details</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p><strong>1.</strong> Sony PlayStation 4 Pro – Best Overall<br>
                            <strong>2.</strong> Xbox One S – Best <strong>Gaming</strong> Console for Multimedia<br>
                            <strong>3.</strong> Nintendo Switch – Best Hybrid Gaming Console<br>
                            <strong>4.</strong> Nintendo Switch Lite – Best for Portable Play
                        </p>
                        <p>It is a long established fact that a reader will be <strong>distracted</strong> by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                        <ul class="wp-block-gallery columns-3">
                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="assets/img/blog/blog2.jpg" alt="image">
                                </figure>
                            </li>
                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="assets/img/blog/blog3.jpg" alt="image">
                                </figure>
                            </li>
                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="assets/img/blog/blog4.jpg" alt="image">
                                </figure>
                            </li>
                        </ul>
                        <p>It is a long established fact that a reader will be <strong>distracted</strong> by the readable content of a page when looking at its <a href="#">layout</a>. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                        <ul>
                            <li>a console</li>
                            <li>Two Joy-Con controllers that are <strong>detachable</strong></li>
                            <li>A grip that enables you to combine them into a single gamepad for play on the TV</li>
                            <li>Two straps for turning the Joy-Cons into <a href="#">individual</a> controllers</li>
                            <li>A dock which you can use to connect your console to the television for traditional gameplay</li>
                        </ul>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.</p>
                        <h3>Results</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna ad aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco labori.</p>
                        <p><strong><i>Last updated: January 25, 2021 at 24:00 PM</i></strong></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="projects-details-info">
                        <ul>
                            <li>
                                <i class="ri-shield-user-line"></i>
                                <span>Client:</span>
                                <a href="https://envytheme.com/" target="_blank">EnvyTheme.com</a>
                                <br>
                                <a href="#" target="_blank">ThemeForest.com</a>
                            </li>
                            <li>
                                <i class="ri-map-pin-2-line"></i>
                                <span>Location:</span>
                                New York, USA
                            </li>
                            <li>
                                <i class="ri-price-tag-3-line"></i>
                                <span>Technologies:</span>
                                Python, Data Science
                            </li>
                            <li>
                                <i class="ri-calendar-2-line"></i>
                                <span>Completed:</span>
                                25 January 2021
                            </li>
                            <li>
                                <i class="ri-global-line"></i>
                                <span>Website:</span>
                                <a href="https://envytheme.com/" target="_blank">EnvyTheme.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects Details Area -->
@endsection
