@extends('layouts.app')

@section('content')
    {{-- header start --}}
    @include('includes.header')
    {{-- header end --}}
    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            {{-- <th>Price</th> --}}
                            <th>Quantity</th>
                            {{-- <th>Total</th> --}}
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php $total = 0; ?>
                        @foreach ($items as $item)
                            <tr class="product-{{ $item->associatedModel->id }}"
                                data-product="{{ $item->associatedModel->id }}">
                                <td class="align-middle d-flex">
                                    <img src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $item->associatedModel->image) }}"
                                        alt="" style="width: 50px;">
                                    <div class="d-flex juctify-content-center align-items-center">
                                        <span class="ml-2">{{ $item->name }}</span>
                                    </div>
                                </td>
                                {{-- <td class="align-middle">{{ $item->price }}Dh</td> --}}
                                <td class="align-middle qty">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <?php $total += $item->quantity; ?>
                                        <input type="text" readonly
                                            class="form-control form-control-sm bg-secondary text-center"
                                            value="{{ $item->quantity }}">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td class="align-middle">{{ $item->quantity*$item->price }}Dh</td> --}}
                                <td class="align-middle">
                                    <button class="btn btn-sm btn-primary btn_delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Total Of Packages</h6>
                            <h6 class="font-weight-medium total_count">{{ $total }}</h6>
                        </div>
                        {{-- <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div> --}}
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        {{-- <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">{{ Cart::getTotal() }}Dh</h5>
                        </div> --}}
                        <a href="{{ route("pages.checkout") }}" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
@endsection
@push('scripts')
    <script>
        // Product Quantity
        $('.quantity button').on('click', function() {
            var button = $(this);
            var oldValue = button.parent().parent().find('input').val();
            var newTotal = parseInt($(".total_count").text());
            if (button.hasClass('btn-plus'))
                newTotal++
            else {
                if (oldValue > 1)
                    newTotal--
            }
            $(".total_count").text(newTotal)
        });
        //delete product
        $(".btn_delete").on("click", function() {
            var id = $(this).parent().parent().data("product");
            var qty = parseInt($(this).parent().parent().find(".qty input").val());
            axios.delete("/cart/" + id).then(response => {
                if (response.status == 200) {
                    $(".cart_count").text(response.data.count)
                    $(".total_count").text(parseInt($(".total_count").text()) - qty)
                    $(".product-" + id).remove()
                }
            }).catch(errors => {
                console.log(errors)
            });
        })
        //update product to cart
        function UpdateCart(id, qty) {
            axios
                .put("/cart/" + id, {
                    qty: qty,
                })
                .then((response) => {
                    if (response.status == 200)
                        $(".cart_count").text(response.data.count);
                })
                .catch((errors) => {
                    console.log(errors);
                });
        }
        // Product Quantity
        $(".quantity button").on("click", function() {
            var button = $(this);
            var oldValue = button.parent().parent().find("input").val();
            var newVal = parseFloat(oldValue);
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
            UpdateCart(
                button.parent().parent().parent().parent().data("product"),
                newVal
            );
            // $(".total_count").text(newTotal)
            // $(".qty-text").text(newVal)
            // $(".total").text(parseFloat($(".unit-price").text())*newVal)
        });
    </script>
@endpush
