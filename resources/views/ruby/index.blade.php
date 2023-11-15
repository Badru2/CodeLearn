<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CRUD RUBY</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('template/template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body id="page-top">

    @include('sweetalert::alert')

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
                    <!-- Content Row -->
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <h3 class="text-center my-4">CRUD RECENT RUBY</h3>
                                        <hr>
                                    </div>
                                    <div class="card border-0 shadow-sm rounded">
                                        <div class="card-body">
                                            <a href="{{ route('ruby.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th scope="col">GAMBAR</th>
                                                    <th scope="col">JUDUL</th>
                                                    <th scope="col">DESKRIPSI</th>
                                                    <th scope="col">CONTENT</th>
                                                    <th scope="col">AKSI</th>
                                                </thead>
                                                <tbody>
                                                    @forelse ($rubys as $data)
                                                    <tr>
                                                        <td class="text-center">
                                                            <img src="{{ asset('/storage/ruby/' . $data->image) }}" class="rounded" alt="" style="width: 150px">
                                                        </td>
                                                        <td>{{ $data->title }}</td>
                                                        <td>{{ $data->deskripsi }}</td>
                                                        <td>{!! Str::limit($data->content, 50) !!}</td>
                                                        <td class="text-center">
                                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('ruby.destroy', $data->id) }}" method="POST">
                                                                <a href="{{ route('laravel.show', $data->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                                <a href="{{ route('ruby.edit', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                                <!-- @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button> -->
                                                                <a href="{{ route('ruby.destroy', $data->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <div class="alert alert-danger">
                                                        Data Post belum Tersedia.
                                                    </div>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                            {{ $rubys->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/template/vendor/jquery/jquery.min.js') }}"></script>
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
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

</html>