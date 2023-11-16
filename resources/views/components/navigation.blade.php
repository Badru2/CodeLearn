<nav class="navbar navbar-expand-lg bg-body-secondary shadow  border-bottom-dark sticky-top">
    <div class="container-fluid">
        {{-- <img src="{{ asset('image/code.png') }}" style="width: 200px;" alt="" srcset=""> --}}
        <a href="/" class="link-underline link-underline-opacity-0 fw-bold text-dark me-3">
            <h1>Code.<span class="text-warning">Learn</span></h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold fs-4" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link fw-bold fs-4"
                        href="{{ route('user.halamanLaravel') }}">Laravel</a></li>
                <li class="nav-item"><a class="nav-link fw-bold fs-4"
                        href="{{ route('user.halamanjavascript') }}">JavaScript</a></li>
                <li class="nav-item"><a class="nav-link fw-bold fs-4" href="{{ route('user.halamanjava') }}">Java</a>
                </li>
                <li class="nav-item"><a class="nav-link fw-bold fs-4" href="{{ route('user.halamanruby') }}">Ruby</a>
                </li>
                {{-- <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle fs-3" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Kategori
                </a>
                <ul class="dropdown-menu">
                </ul>
            </li> --}}
            </ul>
            <div class="container-fluid d-grid justify-content-end">
                <form action="{{ route('user.index') }}" method="GET" class="d-flex ">
                    <input type="text" name="cari" placeholder="Search" value="{{ old('cari') }}"
                        class="form-control">
                    <button class="btn btn-primary" value="search" type="submit">
                        {{-- <i class="fas fa-search fa-sm"></i> --}}
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
