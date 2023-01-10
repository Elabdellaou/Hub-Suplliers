    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex pl-2 align-items-center">
                    <a class="" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    {{-- <a class="text px-2" target="_blank" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a> --}}
                    <a class="text px-2" target="_blank" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text px-2" target="_blank" href="https://wa.me/34653181825">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a class="text px-2" target="_blank" href="https://www.linkedin.com/company/hub-suppliers/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a target="_blank" class="text pl-2" href="mailto:ibrahimelabdellaoui43@gmail.com">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="row align-items-center flex-column-reverse flex-sm-row py-2 py-lg-0 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 "><img width="70%" style="object-fit: contain;" src="{{ Storage::url("img".DIRECTORY_SEPARATOR."LOGO.webp") }}" alt="" srcset=""></h1>
                </a>
            </div>
            <div class="col-lg-6 col-sm-8 col-md-6 col-12 text-left">
                <form action="{{ route("products.search.all-attribute") }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="title" placeholder="Search for products">
                        <div class="input-group-append">
                            <button type="submit" style="outline: none;"
                                class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-sm-4  col-md-6 col-12 mb-2 mb-sm-0 text-sm-right">
                {{-- <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a> --}}
                {{-- <a href="{{ route("pages.cart") }}" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge cart_count">{{ Cart::getContent()->count() }}</span>
                </a> --}}
            </div>
        </div>
    </div>

