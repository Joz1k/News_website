<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/css/app-bbd6a014.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('build/assets/css/main.css') }}" rel="stylesheet" />
    <script src="{{ asset('build/assets/app-66e7f68a.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <section class="menu menu1 myClass" once="menu" id="amenu1-0">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="{{ route('news.index') }}">
                            <img src="{{ asset('build/assets/images/logo.png') }}" alt="Great News"
                                style="height: 5rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption text-white display-4" href="{{ route('news.index') }}">Great News</a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-white display-7" href="{{ route('news.index') }}">
                                News
                            </a>
                        </li>
                    </ul>
                    @auth

                        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                            <li class="nav-item">
                                <a class="nav-link link text-white display-7" href="{{ route('news.create') }}">
                                    Create
                                </a>
                            </li>
                        </ul>
                    @endauth
                    @guest
                        @if (Route::has('login'))
                            <div class="navbar-buttons mbr-section-btn custom-section-btn"><a
                                    class="btn btn-success display-7" href="{{ route('login') }}"
                                    style="background-color: #c3073f; !important">
                                    {{ __('Login') }}</a></div>
                        @endif
                        @if (Route::has('register'))
                            <div class="navbar-buttons mbr-section-btn custom-section-btn"><a
                                    class="btn btn-success display-7" href="{{ route('register') }}"
                                    style="background-color: #c3073f; !important">
                                    {{ __('Register') }}</a></div>
                        @endif
                    @else
                        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                    style="color: #c3073f !important; background-color: #212529 !important; font-size: large;
                                font-weight: bolder;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"
                                    style="background-color: #212529 !important;">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                        style="color: #c3073f !important; --bs-dropdown-link-hover-bg: #434a52 !important;">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @endguest

                </div>
            </div>
        </nav>
    </section>
    <div class="content">
        @yield('content')
    </div>
    <section data-bs-version="5.1" class="footer2 expertm5 footerClass" once="footers" id="afooter2-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="border-item">
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright-container w-100">
                        <p class="mbr-text mb-0 mbr-fonts-style display-7">
                            © Copyright 2023 - All Rights Reserved (just for work)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
