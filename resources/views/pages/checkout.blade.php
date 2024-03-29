@extends('layouts.app')

@section('content')
    {{-- header start --}}
    @include('includes.header')
    {{-- header end --}}
    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+34 653 181 825">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" placeholder="Fahs Anjra">
                        </div>
                        {{-- <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="Fahs Anjra">
                        </div> --}}
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select select2">
                                <option>United States</option>
                                <option selected>Morocco</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="Tanger">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="Tanger">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="90000">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                    data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" placeholder="Fahs Anjra">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select  select2">
                                <option>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option selected>Morocco</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="Tanger">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="Tanger">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="90000">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <?php $total=0; ?>
                        @foreach ($items as $item)
                        <div class="d-flex justify-content-between">
                            <?php $total+=$item->quantity; ?>
                            <p>{{ $item->name }}</p>
                            <p>{{ $item->quantity }}</p>
                        </div>
                        @endforeach
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Total Of Packages</h6>
                            <h6 class="font-weight-medium">{{ $total }}</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Continue To
                            Shipping</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush
