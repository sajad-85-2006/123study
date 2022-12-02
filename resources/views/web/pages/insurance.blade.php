@extends('web.layouts.app')

@section('content')<!-- Start Page-title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Services Details</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services-1.html">Services</a></li>
                <li>Services Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page-title Area -->

<!-- Start Services Details Area -->
<div class="services-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="services-details-desc">
                    <h3>Financial Consultancy</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam <strong>nonumy</strong> eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <img src="/assets/img/services/services3.jpg" alt="image">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam <strong>nonumy</strong> eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.</p>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren no sea takimata sanctus.</p>
                    <h3>Initial Planning</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <p><strong>1.</strong> Sony PlayStation 4 Pro – Best Overall<br>
                        <strong>2.</strong> Xbox One S – Best Gaming Console for Multimedia<br>
                        <strong>3.</strong> Nintendo Switch – Best Hybrid Gaming Console<br>
                        <strong>4.</strong> Nintendo Switch Lite – Best for Portable Play
                    </p>
                    <h3>Discuss About The Services</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam <a href="#">voluptuased</a> diam voluptua.</p>
                    <ul>
                        <li>a console</li>
                        <li>Two Joy-Con controllers that are detachable</li>
                        <li>A grip that enables you to combine them into a single gamepad for play on the TV</li>
                        <li>Two straps for turning the Joy-Cons into <a href="#">individual</a> controllers</li>
                        <li>A dock which you can use to connect your console to the television for traditional gameplay</li>
                    </ul>
                    <h3>Consultation</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <p><strong>Last Updated: January 25, 2021 at 24:00 PM</strong></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <label><input type="search" class="search-field" placeholder="Search..."></label>
                            <button type="submit"><i class="ri-search-2-line"></i></button>
                        </form>
                    </div>

                    <div class="widget widget_service_categories">
                        <h3 class="widget-title">Service Category</h3>

                        <ul>
                            @foreach(\App\Models\service::all() as $service)
                                <li><a href="{{$service['link_page']}}">{{$service['name']}}<i class="ri-arrow-right-s-line"></i></a></li>
                            @endforeach
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->
@endsection
