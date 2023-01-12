@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div class="container-fuild">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card border" style="border-radius: 7px;">
                    <div class="card-header bg-primary text-white"
                        style="border-top-left-radius: 7px;border-top-right-radius:7px;"><span>Profile</span>
                        {{-- <p id="mode" class="text-white" style="cursor: pointer;">
                            <i class="far fa-edit" title="Edit"></i>
                            <i class="fas fa-times d-none" title="Close"></i>
                        </p> --}}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update')}}" class="row" method="post">
                            @method("put")
                            @csrf
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="first_name">First name</label>
                                    <input type="text" class="form-control  @error('first_name') is-invalid @enderror"
                                        value="{{ old('first_name',auth()->user()->first_name) }}" id="first_name" name="first_name" required>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="last_name">Last name</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror " value="{{ old("last_name",auth()->user()->last_name) }}" id="last_name" name="last_name" required>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first("last_name") }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control @error('company') is-invalid @enderror " value="{{ old("company",auth()->user()->company) }}" id="company" name="company" required>
                                    @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first("company") }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="phone">Phone number</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror " value="{{ old("phone",auth()->user()->phone) }}" id="phone" name="phone" required>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first("phone") }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror " value="{{ old("email",auth()->user()->email) }}" id="email" name="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first("email") }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror " id="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first("password") }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary border-0 mb-2 mt-3"
                                style="outline: none;border-radius:5px;">save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // $("#mode").on("click", function() {
        //     $("#mode i").each(function(i, ele) {
        //         if (ele.classList.contains("d-none")){
        //             ele.classList.remove("d-none")
        //             if(ele.classList.contains("fa-times")){
        //                 $("input").setAttribute("readonly","")
        //                 $("input").setAttribute("disabled","")
        //             }
        //         }
        //         else{
        //             ele.classList.add("d-none")
        //             if(ele.classList.contains("fa-edit")){
        //                 $("input").removeAttribute("readonly")
        //                 $("input").removeAttribute("disabled")
        //             }
        //         }
        //     })

        // })
    </script>
@endpush
