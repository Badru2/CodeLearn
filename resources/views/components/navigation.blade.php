<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="{{ asset('image/code.png') }}" style="width: 200px;" alt="" srcset="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold fs-3" aria-current="page"
                        href="{{ route('user.index') }}">Blog</a>
                </li>
                <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle fs-3" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('user.halamanLaravel') }}">Laravel</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.halamanjavascript') }}">Java Script</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('user.halamanjava') }}">Java</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.halamanruby') }}">Ruby</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
