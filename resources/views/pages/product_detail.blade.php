@extends('layouts.app')

@section('content')
    @include('includes.header')
    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active p-5">
                            <img class="w-100 h-100" src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $product->image) }}"
                                alt="{{ $product->title }}">
                        </div>
                        <div class="carousel-item p-5">
                            <img class="w-100 h-100" src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $product->image) }}"
                                alt="{{ $product->title }}">
                        </div>
                        <div class="carousel-item p-5">
                            <img class="w-100 h-100" src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $product->image) }}"
                                alt="{{ $product->title }}">
                        </div>
                        <div class="carousel-item p-5">
                            <img class="w-100 h-100" src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $product->image) }}"
                                alt="{{ $product->title }}">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold mb-4">{{ $product->title }}</h3>
                <div class="row">
                    <h5 class="font-weigh-semi-bold mb-4 col-6">From</h5>
                    <h5 class="font-weigh-semi-bold mb-4 col-6">Morocco</h5>
                </div>
                <div class="row">
                    <h5 class="font-weigh-semi-bold mb-4 col-6">Brand</h5>
                    <h5 class="font-weigh-semi-bold mb-4 col-6">{{ $product->brand }}</h5>
                </div>
                <div class="row">
                    <h5 class="font-weigh-semi-bold mb-4 col-6">Number pieces in packaging</h5>
                    <h5 class="font-weigh-semi-bold mb-4 col-6" id="pieces_packaging">1</h5>
                </div>
                <div class="row">
                    <h5 class="font-weigh-semi-bold mb-4 col-6">Number of cases on the pallet</h5>
                    <h5 class="font-weigh-semi-bold mb-4 col-6" id="cases">4</h5>
                </div>
                <div class="row">
                    <h5 class="font-weigh-semi-bold mb-4 col-6">Number of pieces on the pallet</h5>
                    <h5 class="font-weigh-semi-bold mb-4 col-6" id="pieces">20</h5>
                </div>
                {{-- <div class="row">
                        <h5 class="font-weight-semi-bold mb-4 col-6">Unit Price</h5>
                        <h5 class="font-weight-semi-bold mb-4 col-6">
                            <span class="unit-price">
                                {{ $product->price }}
                            </span>
                            <span>Dh</span></h5>
                    </div> --}}
                <div class="row">
                    <h5 class="font-weight-semi-bold mb-4 col-6">Quantity of packaging</h5>
                    <h5 class="font-weight-semi-bold mb-4 col-6" id="qty_packaging">1</h5>
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;" data-product="{{ $product->id }}" data-pieces_packaging="1" data-cases="4" data-pieces="20">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" readonly class="form-control bg-secondary text-center" id="qty"
                            value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3 btn_store">
                        <i class="fa fa-shopping-cart mr-1"></i>
                        Add To Cart
                    </button>
                </div>
                <p class="mb-4">{{ $product->description }}</p>
                {{-- <div class="row">
                        <h5 class="font-weight-semi-bold mb-4 col-6">Quantity</h5>
                        <h5 class="font-weight-semi-bold mb-4 col-6 qty-text">1</h5>
                    </div> --}}
                {{-- <div class="row">
                        <h5 class="font-weight-semi-bold mb-4 col-6">Total Price</h5>
                        <h5 class="font-weight-semi-bold mb-4 col-6">
                            <span class="total">
                                {{ $product->price }}
                            </span>
                            <span>Dh</span></h5>
                    </div> --}}
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Ingredients</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Additional Information</h4>
                        <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam
                            invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod
                            consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam.
                            Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos
                            dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod
                            nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt
                            tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    @foreach ($products as $product)
                        <div class="card product-item border-0">
                            <div class="card product-item border-0 h-100">
                                <div
                                    class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100"
                                        src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $product->image) }}"
                                        alt="{{ $product->title }}">
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <p class="text-center">By {{ $product->brand }}</p>
                                    <p class="h6 px-2">{{ Str::limit($product->title, 20, '...') }}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="{{ route('products.detail', [$product->title]) }}"
                                        class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View
                                        Detail</a>
                                    <a href="" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection
@push('scripts')
    <script>
        $(".btn_store").on("click", () => {
            var id = $(".btn_store").parent().find(".quantity").data("product");
            var qty = $(".btn_store").parent().find(".quantity #qty").val();
            axios.post("/cart", {
                "id": id,
                "qty": qty
            }).then(response => {
                if (response.status == 200)
                    $(".cart_count").text(response.data.count)
            }).catch(errors => {
                console.log(errors)
            });
        })
        // Product Quantity
        $(".quantity button").on("click", function() {
            var button = $(this);
            var oldValue = button.parent().parent().find("input").val();
            var  pieces_packaging= parseInt(button.parent().parent().data("pieces_packaging"));
            var  pieces= parseInt(button.parent().parent().data("pieces"));
            var  cases= parseInt(button.parent().parent().data("cases"));
            var newVal = parseInt(oldValue);
            // var newTotal=parseInt($(".total_count").text());
            if (button.hasClass("btn-plus")) {
                newVal++;
                // newTotal++
            } else {
                if (oldValue > 1) {
                    newVal--;
                    // newTotal--
                } else {
                    newVal = 1;
                }
            }
            button.parent().parent().find("input").val(newVal);
            // $(".total_count").text(newTotal)
            $("#qty_packaging").text(newVal)
            $("#pieces_packaging").text(pieces_packaging*newVal)
            $("#pieces").text(pieces*newVal)
            $("#cases").text(cases*newVal)
            // $(".total").text(parseFloat($(".unit-price").text())*newVal)
        });
    </script>
@endpush
