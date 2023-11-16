<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $javas->title }}</title>
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        pre {
            background-color: black;
            color: white;
            padding: 30px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    @include('components.navigation')
    <!-- end navbar -->
    <!-- content detail postingan -->
    <div class="detail col-md-8 mx-auto shadow p-3 mt-2">
        <div class="row">
            <div class="image-detail">
                <img src="{{ asset('/storage/java/' . $javas->image) }}" class="mx-auto d-flex" alt=""
                    srcset="">
            </div>
            <div class="mt-5 ">
                <h4>{{ $javas->title }}</h4>
                <p>{{ $javas->created_at->locale('id')->diffForHumans() }}</p>
            </div>
            <div class="detail-content mt-5 mx-auto">
                {!! $javas->content !!}
            </div>
        </div>
    </div>
    <div class="mt-3 shadow-lg w-100 p-5">
        <div id="disqus_thread"></div>
    </div>
    <!-- footer -->
    @include('components.footer')
    <!-- endfooter -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
