<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jozsi and Pista">
    <meta name="keywords" content="salads,fresh,high quality">
    <meta name="description" content="Order vegan salads and chicken salads available
        online at SaladsWebsite. Find various salads online from SaladsWebsite.
         Choose from a wide range of soups available online.">

    <meta property="og:url" content="http://salads.nhely.hu" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Order salad online. Order soups online available from SaladsWebsite" />
    <meta property="og:description"
        content="Order vegan salads and chicken salads available online at SaladsWebsite. Find various salads online from SaladsWebsite. Choose from a wide range of soups available online." />
    <meta property="og:image" content="{{ asset('images/og_image/og_image.jpg') }}" />
    <meta property="og:site_name" content="SaladWebsite" />

    {{-- <meta property="og:type" content="website">
    <meta property="og:title" content="Order salad online. Order soups online available from SaladsWebsite">
    <meta property="og:description"
        content="Order vegan salads and chicken salads available online at SaladsWebsite. Find various salads online from SaladsWebsite. Choose from a wide range of soups available online.">
    <meta property="og:url" content="http://salads.nhely.hu">
    <meta property="og:image" content="{{ asset('images/salad.png') }}">
    <meta property="og:site_name" content="SaladWebsite"> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Salads - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Toastr -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



    @if (Session::has('status'))
        <script type="text/javascript">
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            $(document).ready(function() {
                // show when page load
                toastr.success("{{ session('status') }}");
            });
        </script>
    @endif


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    @yield('styling')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.1/css/all.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YF8HYWE92K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YF8HYWE92K');
    </script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R20LFF5QGB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R20LFF5QGB');
    </script>



</head>

<body>
    <div id="app">
        <nav class="saladNavbar navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="sImg" src="{{ asset('images/salad.png') }}">

                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"
                        style="background-image: url('{{ asset('images/navbar.svg') }}');"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest

                            @if (Route::has('products.index'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                                </li>
                            @endif
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @elseif (Auth::check())
                            @if (Route::has('products.create'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('products.create') }}">Add Products</a>
                                </li>
                            @endif
                            @if (Route::has('products.index'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                                </li>
                            @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Str::upper(App::getLocale()) }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"
                                    href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}">EN</a>


                                <a class="dropdown-item"
                                    href="{{ route(Route::currentRouteName(), ['locale' => 'hu']) }}">HU</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
