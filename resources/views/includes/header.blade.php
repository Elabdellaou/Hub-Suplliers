<div class="container-fluid position-sticky bg-white" style="top: 0%;z-index:1040;">
    <div class="row border-top border-bottom px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-light navbar-light px-0">
                <a href="{{ route("home") }}" class="text-decoration-none ">
                    <h1 class="m-0 display-5 ">
                        <img width="70%" style="object-fit: contain;"
                            src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . 'LOGO.webp') }}" alt=""
                            srcset="">
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ Request::route()->getName() === 'home'? 'active' : '' }}">Home</a>
                        <a href="{{ route('home') }}/#trading_areas"
                            class="nav-item nav-link {{ Request::is('/#trading_areas') ? 'active' : '' }}">Trading
                            Areas</a>
                        <a href="{{ route('products') }}"
                            class="nav-item nav-link {{ Request::is('products*') ? 'active' : '' }}">Products</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Request::is("pages*")?"active":"" }}" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route("pages.checkout") }}" class="dropdown-item {{ Request::is("pages/checkout")?"active":"" }}">Checkout</a>
                                <a href="{{ route("pages.cart") }}" class="dropdown-item {{ Request::is("pages/cart")?"active":"" }}">Shopping Cart</a>
                            </div>
                        </div> --}}
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link {{ Request::is('contact*') ? 'active' : '' }}">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        {{-- <div class="d-flex align-items-center mr-2">
                            <button class="btn btn-check border pr-5" data-toggle="modal" data-target="#searchModal">
                                <i class="fa fa-search"></i> Search
                            </button>
                        </div> --}}
                        <div class="d-flex align-items-center">
                            <a href="{{ route('pages.cart') }}" class="btn border">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge cart_count">{{ Cart::getContent()->count() }}</span>
                            </a>
                        </div>
                        <div class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link text-decoration-none border-0"
                                style="cursor: pointer; border: none; outline: none;" href="#"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                English
                            </a>
                            <div class="dropdown-menu" id="menu_language"  style="z-index: 1030;" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Arabic</a>
                                <a class="dropdown-item" href="#">France</a>
                            </div>
                        </div>
                        <div class="dropdown nav-item pr-0">
                            <a class="dropdown-toggle nav-link text-decoration-none border-0 pr-0"
                                style="cursor: pointer; border: none; outline: none;" href="#"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg-left" style="z-index: 1030;" aria-labelledby="dropdownMenuButton">
                                @auth
                                    <a href="" class="dropdown-item">My Orders</a>
                                    <a class="dropdown-item" href="#">{{ Auth::user()->first_name }}
                                        {{ Auth::user()->last_name }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a href="#" class="dropdown-item btn-login" data-toggle="modal"
                                        data-target="#login">Login</a>
                                    <a href="#" class="dropdown-item btn-register" data-toggle="modal"
                                        data-target="#register">Register</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
