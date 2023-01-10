<div class="container-fluid">
    <div class="row border-top px-xl-5 flex-column-reverse flex-lg-row">
        <div class="col-lg-3">
            <a class="btn shadow-none collapsed d-flex align-items-center btn-drop text-white justify-content-between bg-primary w-100"
                data-toggle="collapse" href="#categories" style="height: 65px; margin-top: -1px; padding: 0 30px;border-radius:5px;">
                <h6 class="m-0 text-white">Categories</h6>
                <i class="fa fa-angle-down"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-drop navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                id="categories" style="width: calc(100% - 30px); z-index: 1000;">
                <div class="navbar-nav w-100 overflow-hidden px-2">
                    <a href="" class="nav-item nav-link active">All</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i
                                class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 "><img width="70%" style="object-fit: contain;" src="{{ Storage::url("img".DIRECTORY_SEPARATOR."LOGO.webp") }}" alt="" srcset=""></h1>

                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('home') }}/#trading_areas" class="nav-item nav-link">Trading Areas</a>
                        <a href="{{ route('products') }}"
                            class="nav-item nav-link {{ Request::is('products*') ? 'active' : '' }}">Products</a>
                            <a href="{{ route('pages.cart') }}" class="nav-item nav-link">Shopping Cart</a>
                            {{-- <div class="nav-item dropdown"> --}}
                                {{-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ route('pages.checkout') }}" class="dropdown-item">Checkout</a>
                                    <a href="{{ route('pages.cart') }}" class="dropdown-item">Shopping Cart</a>
                            </div> --}}
                        {{-- </div> --}}
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <div class="dropdown nav-item nav-link">
                            <a class="dropdown-toggle text-decoration-none border-0"
                                style="cursor: pointer; border: none; outline: none;" href="#"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                English
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Arabic</a>
                                <a class="dropdown-item" href="#">France</a>
                            </div>
                        </div>
                        @guest
                            <a href="#" class="nav-item nav-link btn-login" data-toggle="modal" data-target="#login">Login</a>
                            <a href="#" class="nav-item nav-link btn-register" data-toggle="modal"
                                data-target="#register">Register</a>
                        @else
                        <div class="dropdown nav-item nav-link">
                            <a class="dropdown-toggle text-decoration-none border-0"
                                style="cursor: pointer; border: none; outline: none;" href="#"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                            </a>
                            <div class="dropdown-menu" style="z-index: 1600;" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
