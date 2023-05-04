<header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('home.index') }}">Adventra</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ request()->segment(1) == '' ? 'active' : '' }}"
                        href="{{ route('home.index') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ request()->segment(1) == 'product' ? 'active' : '' }}"
                        href="{{ route('home.product') }}">Produk</a></li>
                <li><a class="nav-link scrollto" href="#services">About</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                @auth
                    <li class="dropdown"><a href="#"><span> {{ Auth()->user()->name }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul class="">
                            @if (Auth()->user()->role == 'admin')
                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Status Pesanan</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="post" id="logout">
                                    @csrf
                                    <a href="#" onclick="document.getElementById('logout').submit()">Logout</a>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('register') }}">Sewa Sekarang</a></li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
