<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> --}}

</head>

<body id="page-top">
    <!-- data dari database -->
    @php
    use App\Models\Post;
    use App\Models\Laravel;
    use App\Models\Java;
    use App\Models\Ruby;
    use App\Models\Javascript;

    $data_laravel= Laravel::all()->count();
    $data_java= Java::all()->count();
    $data_ruby= Ruby::all()->count();
    $data_javascript= Javascript::all()->count();
    @endphp

    <!-- end data -->

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('components.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('components.topnav')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- card laravel-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Laravel</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_laravel}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card laravel -->

                        <!-- card java script -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Java Script</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_javascript}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card java script -->

                        <!-- card java  -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Java</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_java}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end java -->

                        <!-- card ruby -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Ruby</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_ruby}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end card ruby -->



                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>


                <!-- Bootstrap core JavaScript-->
                {{-- <script src="{{ asset('template/template/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('template/template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                <!-- Core plugin JavaScript-->
                <script src="{{ asset('template/template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

                <!-- Custom scripts for all pages-->
                <script src="{{ asset('template/template/js/sb-admin-2.min.js') }}"></script>

                <!-- Page level plugins -->
                <script src="{{ asset('template/template/vendor/chart.js/Chart.min.js') }}"></script>

                <!-- Page level custom scripts -->
                <script src="{{ asset('template/template/js/demo/chart-area-demo.js') }}"></script>
                <script src="{{ asset('template/template/js/demo/chart-pie-demo.js') }}"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
                </script> --}}

</body>

</html>