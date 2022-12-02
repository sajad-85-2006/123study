<!-- Start Top Header Area -->
@php
        @endphp
<div class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4">
                <ul class="top-header-social-links d-flex align-items-center">
                    <li>Follow us on:</li>
                    <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li style="margin-right: 15px"><a href="#" target="_blank"><i class="ri-instagram-line"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8 col-md-8">
                <ul class="top-header-contact-info">
                    <li><i class="ri-phone-line"></i>+103093</li>
                    <li><i class="ri-at-line"></i>some@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="enry-responsive-nav">
        <div class="container">
            <div class="enry-responsive-menu">
                <div class="logo">
                    <a href="/"> <img alt="Logo" src="/assets/img/logo.svg" class="h-75" style="height: 40px!important;"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="enry-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/"><img src="/assets/img/logo.svg" width="70px" height="70px"
                                                      alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        @foreach(\App\Models\Menu::all() as $key=>$menu)
                            @if($menu['menu_id']==null)
                                <li class="nav-item"><a id="{{$key}}" href="{{$menu['link']}}"
                                                        class="{{\App\Models\Menu::query()->where('menu_id',$menu['id'])->first()?'dropdown-toggle':''}} nav-link  {{$_SERVER['REQUEST_URI']==$menu['link']?'active':''}}">{{$menu['name']}}</a>
                                    @if(\App\Models\Menu::query()->where('menu_id',$menu['id'])->first())
                                        <ul class="dropdown-menu">
                                            @foreach(\App\Models\Menu::all() as $m)
                                                @if($m['menu_id']==$menu['id'])

                                                    <li class="nav-item {{$_SERVER['REQUEST_URI']==$m['link']?'active':''}}">
                                                        <a href="{{$m['link']}}"
                                                           class="nav-link">{{$m['name']}}</a></li>
                                                    @if($_SERVER['REQUEST_URI']==$m['link'])
                                                        <script>
                                                            document.getElementById({{$key}}).className = 'active dropdown-toggle nav-link'
                                                        </script>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <div class="others-option">
                        <div class="dropdown language-switcher">
                            <button class="btn btn-secondary d-flex align-items-center dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(session('lang')=='en'||!session('lang'))
                                    <img src="/assets/img/flag/us.jpg" alt="image">
                                    <span class="text-decoration-none">Eng <i class="ri-arrow-down-s-line"></i></span>
                                @else
                                    <img src="/assets/img/flag/germany.jpg" alt="flag">
                                    <span class="text-decoration-none">Fa <i class="ri-arrow-down-s-line"></i></span>
                                @endif
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    @if(session('lang')=='en'||!session('lang'))
                                        <a href="/fa" class="dropdown-item d-flex align-items-center">
                                            <img src="/assets/img/flag/germany.jpg" alt="flag">
                                            <span>Fa</span>
                                        </a>
                                    @else
                                        <a href="/en" class="dropdown-item d-flex align-items-center">
                                            <img src="/assets/img/flag/us.jpg" alt="image">
                                            <span>Eng</span>
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </div>

                        <div class="search-icon">
                            <i class="ri-search-line"></i>
                        </div>
                        <div class="search-icon">
                            <a href="{{route('login')}}" class="ri-user-line"></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Search Overlay -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form action="/search">
                    <input type="text" class="input-search" placeholder="Enter your keywords...">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->
