<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- CSRF Token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hub Suppliers</title>

    {{-- Favicon  --}}
    <link href="img/favicon.ico" rel="icon">

    {{-- Google Web Fonts  --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    {{-- Font Awesome  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    {{-- Libraries Stylesheet  --}}
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    {{-- Styles  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    {{-- TopBar start --}}
    @include('includes.top_bar')
    {{-- TopBar end --}}
    {{-- Main Content start --}}
    @yield('content')
    {{-- Main Content end --}}
    {{-- Footer start --}}
    @include('includes.footer')
    {{-- Footer end --}}
    {{-- Modal Login start --}}
    @include('includes.modal_login')
    {{-- Modal Login end --}}
    {{-- Modal Register start --}}
    @include('includes.modal_register')
    {{-- Modal Register end --}}
    {{-- Modal search start --}}
    {{-- @include("includes.modal_search") --}}
    {{-- Modal search end --}}
    {{-- Back to Top  --}}
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    {{-- JavaScript Libraries --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    {{-- main script --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        @if ($errors->any())
            @if ($errors->has('email') || $errors->has('password'))
                $(".btn-login").click()
            @else
                $(".btn-register").click()
            @endif
        @endif
        // toastr.options = {
        //     "closeButton": true,
        //     "debug": false,
        //     "newestOnTop": false,
        //     "progressBar": true,
        //     "positionClass": "toast-top-right",
        //     "preventDuplicates": false,
        //     "onclick": null,
        //     "showDuration": "300",
        //     "hideDuration": "1000",
        //     "timeOut": "5000",
        //     "extendedTimeOut": "1000",
        //     "showEasing": "swing",
        //     "hideEasing": "linear",
        //     "showMethod": "fadeIn",
        //     "hideMethod": "fadeOut"
        // }
        @if (Session::has('success'))
            Swal.fire(
               { icon:'success',
                title:"{{ session('success') }}",}
            )
            // toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            Swal.fire(
                {icon:'error',
                title:"{{ session('error') }}",}
            )
            // toastr.error("{{ session('error') }}");
        @endif
        @if (Session::has('warning'))
            Swal.fire(
                {icon:'warning',
                title:"{{ session('warning') }}",}
            )
            // toastr.warning("{{ session('warning') }}");
        @endif
        @if (Session::has('info'))
            Swal.fire(
                {icon:'info',
                title:"{{ session('info') }}",}
            )
            // toastr.warning("{{ session('info') }}");
        @endif

        // $("#search-modal").on("keyup",()=>{
        //     axios.get("/products/all_attribute/"+$("#search-modal").val()).then(response=>{
        //         $("result").html("")
        //         response.data.forEach(element => {
        //             console.log(element.title)
        //         });
        //     }).catch(errors=>{
        //         console.log(errors)
        //     })
        // })
    </script>
    @stack('scripts')
</body>

</html>
