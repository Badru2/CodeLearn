<ul style="min-width: 14rem" class="navbar-nav bg-gradient-primary sidebar sidebar-dark" id="accordionSidebar">
    <div class="position-fixed">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-text mx-3">Code Logic <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/halamanAdmin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Post
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Halaman Posts</span></a>
        </li> --}}

        <!-- Heading -->

        <!-- Nav Item - Laravel -->
        <li class="nav-item {{ request()->is('/laravel') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('laravel.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Halaman Laravel</span></a>
        </li>
        <!-- Nav Item - Java Script -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('javascript.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Halaman Java Script</span></a>
        </li>
        <!-- Nav Item - java -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('java.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Halaman Java</span></a>
        </li>
        <!-- Nav Item - Ruby -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('ruby.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Halaman Ruby</span></a>
        </li>

    </div>
</ul>
