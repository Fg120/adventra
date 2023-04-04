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
            </ul>
        </div>
    </div>
</nav>
