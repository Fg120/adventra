<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <div class="col-md-6">
                <a class="navbar-brand" href="{{ route('home.index') }}">
                    <img src="{{ asset('img/home/logo.png') }}" alt="Bootstrap" width="30" height="30">
                </a>
            </div>
            <ul class="navbar-nav col-lg-6 justify-content-lg-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li class="nav-item">
                            <button class="nav-link btn btn-primary" type="submit">Logout</button>
                        </li>
                    </form>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="{{ route('login') }}">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
