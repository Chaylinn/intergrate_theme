<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title', 'Business Casual') - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('theme/assets/favicon.ico') }}" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('theme/css/styles.css') }}" rel="stylesheet" />
        @yield('styles')
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">A Free Bootstrap Business Theme</span>
                <span class="site-heading-lower">Business Casual</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="{{ url('/business') }}">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ url('/business') }}">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ url('/features') }}">Features</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ url('/business/about') }}">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ url('/business/products') }}">Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ url('/business/store') }}">Store</a></li>
                        @auth
                        <li class="nav-item px-lg-4">
                            <span class="nav-link text-uppercase">Welcome, {{ Auth::user()->name }}</span>
                        </li>
                        <li class="nav-item px-lg-4">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <a class="nav-link text-uppercase" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website {{ date('Y') }}</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('theme/js/scripts.js') }}"></script>
        @yield('scripts')
    </body>
</html>