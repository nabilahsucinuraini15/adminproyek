<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Default Title')</title> 
    
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->
    
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('src/assets/css/style.css') }}">
    <!-- endinject -->

    <link rel="shortcut icon" href="{{ asset('src/assets/images/favicon.png') }}" />
    
    @stack('css') <!-- Untuk memasukkan CSS tambahan pada halaman tertentu -->
</head>
<body class="with-welcome-text">
    <div class="container-scroller">
        <!-- Banner section -->
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
                    <div class="ps-lg-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fw-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="ti-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="ti-close text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        @include('navbar')
   
        @yield('content') <!-- Menampilkan konten spesifik halaman -->

    </div>

    <!-- plugins:js -->
    <script src="{{ asset('src/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->
    
    <!-- Plugin js for this page -->
    <script src="{{ asset('src/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('src/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <!-- End plugin js for this page -->
    
    <!-- inject:js -->
    <script src="{{ asset('src/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('src/assets/js/template.js') }}"></script>
    <script src="{{ asset('src/assets/js/settings.js') }}"></script>
    <script src="{{ asset('src/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('src/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    
    <!-- Custom js for this page-->
    <script src="{{ asset('src/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('src/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->

    @stack('js') <!-- Menyertakan JavaScript tambahan yang bisa ditambahkan oleh halaman spesifik -->
</body>
</html>
