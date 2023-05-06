@extends('layouts.app')

@section('title', 'Product')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="height: 5px">

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us ======= -->
        <section id="services" class="services section-bg">
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                {{-- <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>PRODUK</h2>
                        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up"
                            data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($categorys as $item)
                                <li data-filter=".filter-{{ $item->id }}">{{ $item->name }}</li>
                            @endforeach
                        </ul>

                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($products as $item)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->id_category }}">
                                    <div class="portfolio-img"><img src="{{ asset('storage/' . $item->photo) }}"
                                            class="img-fluid" alt=""></div>
                                    <div class="portfolio-info">
                                        <h4>{{ $item->name }}</h4>
                                        <p>{{ $item->fkCategory->name }}</p>
                                        <a href="{{ asset('storage/' . $item->photo) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox preview-link" title="{{ $item->name }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('home.view', $item->id) }}" class="details-link"
                                            title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Cart') }}</div>
                                <div class="card-body ">
                                    <a href="{{ route('home.product') }}" class="btn btn-primary">Kembali</a>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    @endif

                                    @php
                                        $total_price = 0;
                                    @endphp

                                    <div class="card-group m-auto">
                                        @if ($carts == null)
                                            <h1>Keranjang anda kosong</h1>
                                        @endif
                                        @foreach ($carts as $item)
                                            <div class="card m-3" style="width: 14rem;">
                                                <img class="card-img-top"
                                                    src="{{ asset('storage/' . $item->product->photo) }}">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $item->product->name }}</h5>
                                                    <form action="{{ route('cart.update', $item) }}" method="post">
                                                        @method('patch')
                                                        @csrf
                                                        <div class="input-group mb-3">
                                                            <input type="number" class="form-control"
                                                                aria-describedby="basic-addon2" name="amount"
                                                                value={{ $item->amount }}>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-secondary"
                                                                    type="submit">Update
                                                                    amount</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form action="{{ route('cart.destroy', $item) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @php
                                                $total_price += $item->product->price * $item->amount;
                                            @endphp
                                        @endforeach
                                    </div>
                                    <form action="{{ route('checkout') }}" method="post">
                                        <div class="d-flex flex-column justify-content-start align-items-start">
                                            <div class="row input-group">
                                                <div class="col-md-3">
                                                    <label for="days">Days</label>
                                                    <input type="number" name="day" id="days" class="form-control"
                                                        min="0" max="14" required>
                                                    <label for="days">Max: 14 Day</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="start">Start</label>
                                                    <input type="date" name="start_date" id="start"
                                                        class="form-control" min="{{ $date }}"
                                                        max="{{ $date_max }}" value="" required
                                                        pattern="\d{4}-\d{2}-\d{2}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Perhatian</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex flex-column justify-content-end align-items-end">
                                                    <p>Total/Hari: Rp. {{ number_format($total_price) }}</p>
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary"
                                                        @if ($carts->isEmpty()) disabled @endif>Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
        </section>
    </main><!-- End #main -->
@endsection
