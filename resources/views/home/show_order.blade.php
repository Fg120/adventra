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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Order Detail') }}</div>

                                <div class="card-body">
                                    <h5 class="card-title">Order ID {{ $order->id }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">By {{ $order->user->name }}</h6>
                                    <p class="card-text">Barang dapat di ambil pada tanggal:
                                        {{ date('d F Y', strtotime($order->start_date)) }}</p>
                                    <p class="card-text">Barang harus dikembalikan pada tanggal:
                                        {{ date('d F Y', strtotime($order->end_date)) }}</p>
                                    <p class="card-text">Status: <span
                                            class="badge
                                    {{ $order->status == 'Belum Dibayar' ? 'text-bg-secondary text-white' : '' }}
                                    {{ $order->status == 'Menunggu Konfirmasi' ? 'text-bg-warning text-white' : '' }}
                                    {{ $order->status == 'Terkonfirmasi' ? 'text-bg-info text-white' : '' }}
                                    {{ $order->status == 'Dipick Up' ? 'text-bg-primary text-white' : '' }}
                                    {{ $order->status == 'Selesai' ? 'text-bg-success text-white' : '' }}
                                        ">{{ $order->status }}</span>
                                    </p>
                                    <hr>
                                    @foreach ($order->transactions as $transaction)
                                        <p>{{ $transaction->product->name }} - {{ $transaction->amount }} pcs</p>
                                    @endforeach
                                    <hr>
                                    <p>Total: Rp. {{ number_format($order->total) }}</p>
                                    <hr>

                                    @if ($order->payment_receipt == null)
                                        <form action="{{ route('order.pay', $order) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Upload your payment receipt</label>
                                                <input type="file" name="payment_receipt" class="form-control">
                                            </div>

                                            <button type="submit" class="btn btn-primary mt-3">Submit payment</button>
                                        </form>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="services" class="services section-bg">
                    <div class="container">
                        <div class="section-title">
                            <h2>PEMBAYARAN ADVENTRA</h2>

                            <h4> Anda Dapat Melakukan Pembayaran Dengan Mentransfer Ke Rekening Bank Kami Dibawah Ini</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6  align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><img width="200" src="{{ asset('img/home/bri.png') }}"></img>
                                    </div>
                                    <h4> BRI </h4>
                                    <p> 0374663836644 - PT ADVENTRA</p>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><img width="200" src="{{ asset('img/home/bca.png') }}"></img>
                                    </div>
                                    <h4> BCA</h4>
                                    <p> 2000286828 - PT ADVENTRA</p>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><img width="200"
                                            src="{{ asset('img/home/mandiri.png') }}"></img></div>
                                    <h4> MANDIRI</h4>
                                    <p> 1430876389374 - PT ADVENTRA</p>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><img width="200" src="{{ asset('img/home/cimb.png') }}"></img>
                                    </div>
                                    <h4> CIMB</h4>
                                    <p> 8600110011000 - PT ADVENTRA</p>
                                </div>
                            </div>





                        </div>
                    </div>

                    </div>
                </section>
    </main><!-- End #main -->
@endsection
