@extends('layouts.app')

@section('content')
    {{-- Header start --}}
    @include('includes.header')
    {{-- Header end --}}
    <!-- Shop Start -->
    <div class="container-fluid pt-4">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <form action="{{ route("products.filter") }}" method="POST" class="col-lg-3 col-md-12 form-filter">
                @csrf
                <!-- options Start -->
                {{-- <a class="btn shadow-none collapsed d-flex mb-4 align-items-center btn-drop text-white justify-content-between bg-primary w-100"
                    data-toggle="collapse" href="#options"
                    style="height: 65px; margin-top: -1px; padding: 0 30px;border-radius:5px;">
                    <h6 class="m-0 text-white">Options</h6>
                    <i class="fa fa-angle-down"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-drop navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="options" style="width: calc(100% - 30px); z-index: 1000;">
                    <div class="navbar-nav w-100 overflow-hidden px-2">
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" value="true" checked id="option-0">
                            <label class="custom-control-label" for="option-0">All</label>
                            <span class="badge border font-weight-normal">2000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="option-1">
                            <label class="custom-control-label" for="option-1">Halal </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="option-2">
                            <label class="custom-control-label" for="option-2">New Arrival</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                    </div>
                </nav> --}}
                <!-- options End -->
                <!-- Price Start -->
                {{-- <a class="btn shadow-none d-flex collapsed btn-drop align-items-center mb-4 text-white justify-content-between bg-primary w-100"
                    data-toggle="collapse" href="#price" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0 text-white">Filter by Price</h6>
                    <i class="fa fa-angle-down"></i>
                </a>
                <nav class="collapse position-absolute navbar-drop navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="price" style="width: calc(100% - 30px); z-index: 1000;">
                    <div class="navbar-nav w-100 overflow-hidden px-2">
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">0$ - 100$ </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">100$ - 200$ </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">200$ - 300$ </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">300$ - 400$ </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">400$ - 500$ </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-6">
                            <label class="custom-control-label" for="price-6">500$ < </label>
                                    <span class="badge border font-weight-normal">1000</span>
                        </div>
                    </div>
                </nav> --}}
                <!-- Price End -->
                <!-- discount Start -->
                {{-- <a class="btn shadow-none btn-drop collapsed d-flex align-items-center mb-4 text-white justify-content-between bg-primary w-100"
                    data-toggle="collapse" href="#discount" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0 text-white">Filter by Discount</h6>
                    <i class="fa fa-angle-down"></i>
                </a>
                <nav class="collapse navbar-drop position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="discount" style="width: calc(100% - 30px); z-index: 1000;">
                    <div class="navbar-nav w-100 overflow-hidden px-2">
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked value="true" id="all-discount">
                            <label class="custom-control-label" for="all-discount">All </label>
                            <span class="badge border font-weight-normal">4000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="no-discount">
                            <label class="custom-control-label" for="no-discount">No Discount </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="20-discount">
                            <label class="custom-control-label" for="20-discount">20% </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="40-discount">
                            <label class="custom-control-label" for="40-discount">40% </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="60-discount">
                            <label class="custom-control-label" for="60-discount">60% </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div
                            class="custom-control py-2 nav-item custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="80-discount">
                            <label class="custom-control-label" for="80-discount">80% </label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                    </div>
                </nav> --}}
                <!-- discount End -->
                <!-- categorie Start -->
                <div class="mb-4 filter-select">
                    <h5 class="font-weight-semi-bold">Filter by Categories</h5>
                    <select name="category" class="select2 custom-select" id="categorie">
                        <option value="" selected>All</option>
                    </select>
                </div>
                <!-- categorie End -->
                <!-- brands Start -->
                <div class="mb-4 filter-select">
                    <h5 class="font-weight-semi-bold">Filter by Brands</h5>
                    <select name="brand" class="select2 custom-select" id="brands">
                        <option value="" {{ !isset($brand)||$brand == ""?"selected":""}}>All</option>
                        <option value="Kettle" {{ isset($brand)&&$brand == "Kettle"?"selected":""}}>Kettle</option>
                        <option value="Aptamil" {{ isset($brand)&&$brand == "Aptamil"?"selected":""}}>Aptamil</option>
                        <option value="Oreo" {{ isset($brand)&&$brand == "Oreo"?"selected":""}}>Oreo</option>
                        <option value="Quest" {{ isset($brand)&&$brand == "Quest"?"selected":""}}>Quest</option>
                        <option value="Red Bull" {{ isset($brand)&&$brand == "Red Bull"?"selected":""}}>Red Bull</option>
                        <option value="Solan" {{ isset($brand)&&$brand == "Solan"?"selected":""}}>Solan</option>
                        <option value="Kellogg’s" {{ isset($brand)&&$brand == "Kellogg’s"?"selected":""}}>Kellogg’s</option>
                        <option value="Bimo" {{ isset($brand)&&$brand == "Bimo"?"selected":""}}>Bimo</option>
                        <option value="Lady Liberty" {{ isset($brand)&&$brand == "Lady Liberty"?"selected":""}}>Lady Liberty</option>
                    </select>
                </div>
                <!-- brands End -->

                <!-- country origin Start -->
                <div class="mb-4 filter-select">
                    <h5 class="font-weight-semi-bold">Filter by Country Origin</h5>
                    <select name="country_origin" class="select2 custom-select" id="country">
                        <option value="" selected>All</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Algeria">Algeria</option>
                        <option value="France">France</option>
                    </select>
                </div>
                <!-- country origin End -->
                <input type="hidden" name="sort" id="input-sort">
            </form>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12 mt-4 pt-2">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="{{ route("products.search") }}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" name="title" placeholder="Search By Name">
                                    <button type="submit" class="input-group-text text-primary bg-transparent"
                                        style="outline: none">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-sort" aria-labelledby="triggerId">
                                    <button class="dropdown-item" data-sort="asc">Latest</button>
                                    <button class="dropdown-item" data-sort="desc">descending</button>
                                    <button class="dropdown-item" data-sort="">Shuffle</button>
                                    {{-- <a class="dropdown-item" href="#" >Brands</a> --}}
                                    {{-- <a class="dropdown-item" href="#" >Title</a> --}}
                                    {{-- <a class="dropdown-item" href="#">Ascending Price</a>
                                    <a class="dropdown-item" href="#">decreasing price</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-1 mb-4">
                            <div class="card product-item border-0 h-100">
                                <div
                                    class="card-header product-img position-relative overflow-hidden bg-transparent border p-5">
                                    <img class="img-fluid w-100"
                                        src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $product->image) }}"
                                        alt="{{ $product->title }}">
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <p class="text-center">By {{ $product->brand }}</p>
                                    <p class="h6 px-2">{{ $product->title }}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="{{ route('products.detail', [$product->title]) }}"
                                        class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View
                                        Detail</a>
                                    <a class="btn btn-sm text-dark p-0 btn-add-product"
                                        data-product="{{ $product->id }}"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 pb-1 pagination justify-content-center">
                        {{ $products->links() }}
                        {{-- <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-3">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
        btns_drop = document.querySelectorAll(".btn-drop")
        navbars_drop = document.querySelectorAll(".navbar-drop")
        btns_drop.forEach(element => {
            element.addEventListener("click", () => {
                btns_drop.forEach(ele => {
                    if (!ele.classList.contains("collapsed"))
                        ele.click()
                })
                if (element.classList.contains("collapsed"))
                    element.click()
            })
        });
        btns_add_to_cart = document.querySelectorAll(".btn-add-product");
        btns_add_to_cart.forEach(element => {
            element.addEventListener("click", e => {
                e.preventDefault();
                axios.post("/cart", {
                    "id": element.dataset.product,
                }).then(response => {
                    if (response.status == 200){
                        $(".cart_count").text(response.data.count)
                        Swal.fire(
                                {icon:'success',
                                title:"Demande successfully.",}
                            )
                        // toastr.success("Demande successfully.");
                    }
                }).catch(errors => {
                    console.log(errors)
                });
            })
        });
        $(".filter-select").on("change",()=>{
            $(".form-filter").submit();
        })
        $(".dropdown-sort button").on("click",()=>{
            $("#input-sort").val($(this).data("sort"));
            $(".form-filter").submit();
        })
    </script>
@endpush
