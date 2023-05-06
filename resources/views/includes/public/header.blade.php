<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('home.index') }}">Adventra</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ request()->segment(1) == '' ? 'active' : '' }}"
                        href="{{ route('home.index') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ request()->segment(1) == 'product' ? 'active' : '' }}"
                        href="{{ route('home.product') }}">Produk</a></li>
                @auth
                    <li class="dropdown"><a href="#"><span>{{ Auth()->user()->name }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul class="">
                            @if (Auth()->user()->role == 'admin')
                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif
                            @if (Auth()->user()->role == 'user')
                                <li><a href="#">Akun Saya</a></li>
                                <li><a href="{{route('cart.show')}}">Keranjang</a></li>
                                <li><a href="{{route('order.index')}}">Pesanan</a></li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="post" id="logout">
                                    @csrf
                                    <a href="#" onclick="document.getElementById('logout').submit()">Logout</a>
                                </form>
                            </li>
                        </ul>
                    </li>


                </ul>
                </li>
            @else
                <li><a class="nav-link scrollto" href="{{ route('auth') }}">Login</a></li>
                <li><a class="getstarted scrollto" href="{{ route('auth') }}">Sewa Sekarang</a></li>
            @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
