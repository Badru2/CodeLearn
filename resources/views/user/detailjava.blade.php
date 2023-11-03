<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laravel</title>
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    @include('components.navigation')
    <!-- end navbar -->
    <!-- content detail postingan -->
    <div class="container mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('/storage/java/' . $javas->image) }}" style="width: 500px;"
                        class="rounded mx-auto d-block w-75 h-50 object-fit-cover" alt="" srcset="">
                </div>
                <div class="col-md-6 my-auto">
                    <h4>{{ $javas->title }}</h4>
                    <p>{{ $javas->created_at->locale('id')->diffForHumans() }}</p>
                </div>
                <div class="w-75 mt-5 mx-auto">
                    {!! $javas->content !!}
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    @include('components.footer')
    <!-- endfooter -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
