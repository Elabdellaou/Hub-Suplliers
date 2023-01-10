<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active vh-100" style="">
            <img class="img-fluid" src="{{ Storage::url("img".DIRECTORY_SEPARATOR."brand.webp") }}" alt="Brands">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="">
                    <h2 class="text-white text-uppercase font-weight-semi-bold mb-5">Make clear we sell to wholesalers and retailers</h2>
                    {{-- <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3> --}}
                    <a href="{{ route("products") }}" class="btn btn-light py-2 px-3" style="border-radius: 5px;">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item vh-100" style="">
            <img class="img-fluid" src="{{ Storage::url("img".DIRECTORY_SEPARATOR."Warehouse.jpg") }}" alt="Warehouse">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="">
                    <h2 class="text-white text-uppercase font-weight-semi-bold mb-5">Make clear we sell to wholesalers and retailers</h2>
                    {{-- <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3> --}}
                    <a href="{{ route("products") }}" class="btn btn-light py-2 px-3" style="border-radius: 5px;">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
