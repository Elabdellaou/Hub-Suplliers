<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-light navbar-light px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 ">
                        <img width="70%" style="object-fit: contain;" src="{{ Storage::url("img".DIRECTORY_SEPARATOR."LOGO.webp") }}" alt="" srcset="">
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route("home") }}" class="nav-item nav-link {{ Request::route()->getName() === "home" ? "active" : "" }}">Home</a>
                        <a href="{{ route("home") }}/#trading_areas" class="nav-item nav-link {{ Request::is("/#trading_areas")?"active":"" }}">Trading Areas</a>
                        <a href="{{ route("products") }}" class="nav-item nav-link {{ Request::is("products*")?"active":"" }}">Products</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Request::is("pages*")?"active":"" }}" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route("pages.cart") }}" class="dropdown-item {{ Request::is("pages/cart")?"active":"" }}">Shopping Cart</a>
                                <a href="{{ route("pages.checkout") }}" class="dropdown-item {{ Request::is("pages/checkout")?"active":"" }}">Checkout</a>
                            </div>
                        </div>
                        <a href="{{ route("contact") }}" class="nav-item nav-link {{ Request::is("contact*")?"active":"" }}">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <div class="dropdown nav-item nav-link">
                            <a class="dropdown-toggle text-decoration-none border-0"
                                style="cursor: pointer; border: none; outline: none;" href="#"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                English
                            </a>
                            <div class="dropdown-menu" style="z-index: 1600;" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Arabic</a>
                                <a class="dropdown-item" href="#">France</a>
                            </div>
                        </div>
                        @guest
                            <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#login">Login</a>
                            <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#register">Register</a>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
