@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div class="container-fluid">
        <div class="row px-xl-5 mt-5" style="min-height: 550px">
            <div class="col">
                <div class="nav nav-tabs border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Processing</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Completed</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="d-flex mb-4">
                            <h4 class="mb-3">Orders Processing</h4>
                            {{-- <form action="{{ route('delete.all.orders.processing') }}" id="form-delete-all" class="d-none"
                                method="post">
                                @method('delete')
                                @csrf
                            </form> --}}
                            {{-- <button href="" class="btn btn-danger" style="border-radius: 5px" onclick="delete_all('form-delete-all')" id="btn-delete-all">Delete All</button> --}}
                            {{-- <div>
                                <a class="mr-4" href="">Delete All</a>
                                <a href="">Cancel All</a>
                            </div> --}}
                        </div>
                        <table class="table data-table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        Products
                                    </th>
                                    <th>
                                        Quantity
                                    </th>
                                    <th>
                                        Date Order
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commands as $command)
                                    @if (!$command->delivered)
                                        @foreach ($command->details as $detail)
                                            <tr class="detail-{{ $detail->id }}">
                                                <td class="d-flex">
                                                    <img src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $detail->product->image) }}"
                                                        alt="" style="width: 50px;object-fit:contain">
                                                    <div class="d-flex align-items-center">
                                                        <span class="ml-2">{{ $detail->product->title }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $detail->qty }}
                                                </td>
                                                <td>
                                                    {{ $detail->created_at }}
                                                </td>
                                                {{-- <div class="d-flex align-items-center col-2"
                                                            data-detail="{{ $detail->id }}">
                                                            <button class="btn btn-sm btn-danger btn_delete"
                                                                style="border-radius:5px">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div> --}}
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="d-flex mb-4">
                            <h4 class="mb-3">Orders Completed</h4>
                            {{-- <form action="{{ route("delete.all.orders.completed") }}" id="form-delete-all-completed"
                                class="d-none" method="post">
                                @method('delete')
                                @csrf
                            </form> --}}
                            {{-- <button class="btn btn-danger" style="border-radius: 5px"  href="" onclick="delete_all('form-delete-all-completed')" id="btn-delete-all">Delete All</button> --}}
                        </div>

                        <table class="table data-table">
                            <thead>
                                <tr>
                                    <th>
                                        Products
                                    </th>
                                    <th>
                                        Quantity
                                    </th>
                                    <th>
                                        Date Order
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commands as $command)
                                    @if ($command->delivered)
                                        @foreach ($command->details as $detail)
                                            <tr class="detail-{{ $detail->id }}">
                                                <td class="d-flex">
                                                    <img src="{{ Storage::url('img' . DIRECTORY_SEPARATOR . $detail->product->image) }}"
                                                        alt="" style="width: 50px;object-fit:contain">
                                                    <div class="d-flex juctify-content-center align-items-center">
                                                        <span class="ml-2">{{ $detail->product->title }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $detail->qty }}
                                                </td>
                                                <td>
                                                    {{ $detail->created_at }}
                                                </td>
                                                {{-- <div class="d-flex align-items-center col-2"
                                                            data-detail="{{ $detail->id }}">
                                                            <button class="btn btn-sm btn-danger btn_delete"
                                                                style="border-radius:5px">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div> --}}
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                        class="btn btn-sm text-dark p-0" title="Show product detail"><i class="fas fa-eye text-primary mr-1"></i>View
                                        Detail</a>
                                    <button class="btn btn-sm text-dark p-0 btn-add-product"
                                        data-product="{{ $product->id }}" title="Add new order"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
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
        $(document).ready(function() {
            $('.data-table').DataTable();
        });
        btns_add_to_cart = document.querySelectorAll(".btn-add-product");
        btns_add_to_cart.forEach(element => {
            element.addEventListener("click", e => {
                e.preventDefault();
                axios.post("/cart", {
                    "id": element.dataset.product,
                }).then(response => {
                    if (response.status == 200) {
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
        // function delete_all(form){
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         // text: "You won't be able to revert this!",
        //         // icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         padding: '2em',
        //         // reverseButtons: true,
        //         confirmButtonText: 'Yes, delete',
        //         cancelButtonText: 'No, cancel',
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $("#" + form).submit();
        //         }
        //     })
        // }
        // $(".btn_delete").on("click", function(e) {
        //     const id = $(this).parent().data("detail");
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         // text: "You won't be able to revert this!",
        //         // icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         padding: '2em',
        //         // reverseButtons: true,
        //         confirmButtonText: 'Yes, delete',
        //         cancelButtonText: 'No, cancel',
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             axios.delete("detail/" + id).then(response => {
        //                 if (response.status == 200) {
        //                     toastr.success("Successfully Deleted command : " + response.data.title)
        //                     $(".detail-"+id).remove()
        //                 }
        //             }).catch(errors => {
        //                 console.log(errors)
        //             });
        //         }
        //     })

        // })
    </script>
@endpush
