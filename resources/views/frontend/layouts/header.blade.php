@section('header')

    <!DOCTYPE html>
<html lang="zxx">
<head>
    <!--------------------- Required meta tags --------------------------->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{$title}}</title>
    <!-------------------------plugin css for this page--------------------------------->
    <link
        rel="stylesheet"
        href="{{url('frontend/assets/vendors/mdi/css/materialdesignicons.min.css')}}"
    />
    <link rel="stylesheet" href="{{url('frontend/assets/vendors/aos/dist/aos.css/aos.css')}}"/>


    <!-- -------------------End plugin css for this page -------------------------------->
    <link rel="shortcut icon" href="{{url('frontend/assets/images/favicon.png')}}"/>

    <!----------------------------------- inject:css --------------------------------------->
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <!------------------------------------ endinject ---------------------------------------->
</head>

<body>
<div class="container-scroller">
    <div class="main-panel">
        <!-------------------------- start partial:partials/_navbar.html -------------------------->
        <header id="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="navbar-top">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="navbar-top-left-menu">
                                <li class="nav-item">
                                    <a href="{{url('frontend/pages/index-inner.html')}}" class="nav-link">Advertise</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('frontend/pages/aboutus.html')}}" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Write for Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">In the Press</a>
                                </li>
                            </ul>
                            <ul class="navbar-top-right-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                                </li>

                                <li class="nav-item">
                                    @if(Auth::guard('web')->user())
                                        <a href="{{route('logout')}}" class="nav-link">logout</a>
                                    @else
                                    <a href="{{route('login')}}" class="nav-link">Login</a>
                                </li>@endif

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Sign in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a class="navbar-brand" href="#"
                                ><img src="{{url('frontend/assets/images/logo.png')}}" alt=""
                                    /></a>
                            </div>
                            <div>
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation"
                                >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div
                                    class="navbar-collapse justify-content-center collapse"
                                    id="navbarSupportedContent"
                                >
                                    <ul
                                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                                    >
                                        <li>
                                            <button class="navbar-close">
                                                <i class="mdi mdi-close"></i>
                                            </button>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{url('frontend/index.html"')}}>Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('frontend/pages/magazine.blade.php')}}">MAGAZINE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('frontend/pages/business.html')}}">Business</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('frontend/pages/sports.html')}}">Sports</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('frontend/pages/art.html')}}">Art</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('frontend/pages/politics.html')}}">POLITICS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('frontend/pages/travel.html')}}">Travel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('frontend/pages/contactus.html')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="social-media">
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!---------------------------end partial ---------------------------------->

        <div class="flash-news-banner">
            <div class="container">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="badge badge-dark mr-3">Flash news</span>
                        <p class="mb-0">
                            Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s.
                        </p>
                    </div>
                    <div class="d-flex">
                        <span class="mr-3 text-danger">Wed, March 4, 2020</span>
                        <span class="text-danger">30°C,London</span>
                    </div>
                </div>
            </div>
        </div>
@endsection
