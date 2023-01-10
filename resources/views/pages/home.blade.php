@extends('layouts.app')

@section('content')
    {{-- Header start --}}
    @include('includes.header')
    {{-- Header end --}}
    {{-- Sliders start --}}
    @include('includes.sliders')
    {{-- Sliders end --}}
    {{-- Featured Start --}}
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Fast Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    {{-- Featured End --}}
    {{-- trading_areas --}}
    <section id="trading_areas" class="w-100" >
        <div class="panel text-white px-3 pb-2" style="">
            <div class="d-flex justify-content-center flex-column">
                <span class="h2 text-center my-4 text-white">OUR ACTIVITY</span>
                <p class="text-center mb-3">Morocco has a growing ​economy and is the best entry to all African
                    countries</p>
                <p class="text-center mb-3">Hub Suppliers has installed its office at TANGER Med port, to import from
                    mainly UK and Europe <a href="" class="text-white"
                        style="text-decoration:underline">groceries</a>,
                    food, drinks, cleaning
                    products, beauty care, energy saving solutions, environment friendly products, construction
                    materials and much more...</p>
                <p class="text-center mb-3">We also export to Europe, US, Canada and Africa the best quality at best
                    price from Morocco: fruits, vegetables, grains, oils, construction materials and more.</p>
            </div>
        </div>
        <img class="w-100" src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . 'tanger.webp') }}" alt="">
    </section>
    {{-- end trading_areas --}}
    {{-- Subscribe start --}}
    @include('includes.subscibre')
    {{-- Subscribe End  --}}
    {{-- Products start --}}
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1 mb-4">
                    <div class="card product-item border-0 h-100">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-5">
                            <img class="img-fluid w-100"
                                src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $product->image) }}"
                                alt="{{ $product->title }}">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <p class="text-center">By {{ $product->brand }}</p>
                            <p class="h6 px-2">{{ $product->title }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{ route('products.detail', [$product->title]) }}" class="btn btn-sm text-dark p-0"><i
                                    class="fas fa-eye text-primary mr-1"></i>View
                                Detail</a>
                            <a href="#" class="btn btn-sm text-dark p-0 btn-add-product"
                                data-product="{{ $product->id }}"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add
                                To Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Products end --}}
    {{-- Vendor start --}}
    @include('includes.vendor')
    {{-- Vendor end --}}
@endsection
@push('scripts')
    <script>
        // ScrollReveal().reveal('#trading_areas .panel div', {
        //     opacity: 0,
        //     duration: 1000,
        //     delay: 250
        // });
        btns_add_to_cart = document.querySelectorAll(".btn-add-product");
        btns_add_to_cart.forEach(element => {
            element.addEventListener("click", e => {
                e.preventDefault();
                axios.post("/cart", {
                    "id": element.dataset.product,
                }).then(response => {
                    if(response.status == 200){
                        $(".cart_count").text(response.data.count)
                        toastr.success("Demande successfully.");
                    }
                }).catch(errors => {
                    console.log(errors)
                });
            })
        });
    </script>
@endpush
