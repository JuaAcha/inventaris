<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css"
        integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Libraries -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/datatable/buttons.bootstrap4.min.css')}}">
    
    <!-- Izi Toast -->
    <link rel="stylesheet" href="{{ asset('assets/izitoast/iziToast.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('template.navbar')

            @include('template.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <!-- <section class="section"> -->
                    @yield('content')
                    <!-- <div class="section-header">
                        <h1>Blank Page</h1>
                    </div>

                    <div class="section-body">
                    </div> -->
                <!-- </section> -->
            </div>
            @include('template.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('assets/modules/popper.js')}}"></script>
    <script src="{{asset('assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('assets/modules/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/modules/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('assets/modules/stisla.js')}}"></script>

    <!-- DataTables -->
    <script src="{{asset('assets/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- JS Libraies -->
    <!-- IziToast -->
    <script src="{{ asset('assets/izitoast/iziToast.min.js') }}"></script>

    <!-- sweetalert -->
    <script src="{{ asset('assets/alert/sweetalert.min.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{asset('assets/modules/scripts.js')}}"></script>
    <script src="{{asset('assets/modules/custom.js')}}"></script>

    @stack('script')
</body>

</html>