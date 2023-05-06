@extends('layouts.app')

@section('title', 'View')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-sm-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('storage/' . $products->photo) }}" class="rounded"
                        alt="gambar produk {{ $products->name }}" style="height: 400px; object-fit: contain;">
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <h1>{{ $products->name }}</h1>
                    <h2>{{ $products->fkCategory->name }}</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#informasi" class="btn-get-started scrollto">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="informasi">
        <!-- ======= About Us ======= -->
        <section id="services" class="services section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>INFORMATION</h2>
                    <h3> {{ $products->name }} </h3>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 100%">
                            <h4>Deskripsi</h4>
                            <p>{{ $products->desc }}</p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box" style="width: 50%">
                            <span>
                                <h4>Harga</h4>
                                <h6>Rp.{{ $products->price }}/Hari</h6>
                            </span>
                            <span>
                                <h4>Stock</h4>
                                <h6>{{ $products->stock_available }} Pcs</h6>
                            </span>
                            <h5>Masukkan keranjang?</h5>
                            <form action="{{ route('cart.create', $products) }}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" aria-describedby="basic-addon2"
                                        name="amount" value=1 min=1>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary"
                                            {{ $products->stock_available <= '1' ? 'disabled' : '' }}
                                            type="submit">Tambahkan</button>
                                    </div>
                                </div>
                                @if ($products->stock_available <= 1)
                                    <div class="btn btn-danger">Habis</div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
