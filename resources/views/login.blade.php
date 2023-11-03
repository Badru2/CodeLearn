<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Login Admin</title>

    <link rel="stylesheet" href="{{ asset('filecss/login.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <!--Stylesheet-->
</head>

<body>
    <div class="background">
        <img style="position: absolute; bottom: 0; left: 0;" src="{{ asset('images/circle.svg') }}" alt="">
        <div class="half-circle-left btn-primary-color"></div>
        <div class="double-circle">
            <div class="circle1"></div>
            <div class="circle2"></div>
        </div>
    </div>
    <div class="container w-50 d-flex ">
        <div class="login container border border-dark shadow card my-auto m-auto">
            <img class="mb-2 mx-auto" width="200px" src="{{ asset('images/logo.svg') }}" alt="">
            <form action="/loginproses" method="post">
                @csrf
                <label class="form-check-label fw-bold mb-2" for="email">Email</label>
                <input class="form-control border border-dark mb-5" type="text" placeholder="" name="email"
                    id="username">

                <label class="form-check-label fw-bold mb-2" for="password">Password</label>
                <input class="form-control border border-dark mb-5" type="password" placeholder="" name="password"
                    id="password">

                <button class="btn btn-primary-color w-100 mb-4">LOGIN</button>

                {{-- <a href="/register">Register</a> --}}

            </form>
        </div>
    </div>

</body>

</html>
