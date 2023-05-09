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
                                    <p class="card-text">{{$order->status}}</p>
                                    <hr>
                                    @foreach ($order->transactions as $transaction)
                                        <p>{{ $transaction->product->name }} - {{ $transaction->amount }} pcs</p>
                                    @endforeach
                                    <hr>
                                    <p>Total: Rp. {{ number_format($order->total) }}</p>
                                    <hr>

                                    @if ($order->is_paid == false && $order->payment_receipt == null && !Auth::user()->is_admin)
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
                    <div class="container" data-aos="fade-up">
        
        
        
                        <div class="section-title">
                            <h2>PEMBAYARAN ADVENTRA</h2>
                            
                            <h4> Anda Dapat Melakukan Pembayaran Dengan Mentransfer Ke Rekening Bank Kami Dibawah Ini</h4>
                            
                            
                        </div>
        
                        <div class="row">
                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href="">MANDIRI</a></h4>
                                    <p>Anda Bisa Memesan Produk yang dijual dan disewa secara online. Tanpa Ribet, mudah, cepet,
                                        efisien, dimana saja & kapan saja</p>
                                </div>
                            </div>
        
                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="">BCA</a></h4>
                                    <p>Tanpa harus menghubungi admin, Anda bisa cek ketersedian produk sewa, lihat di detail
                                        produk dan sesuaikan jadwal Anda sebelum kehabisan</p>
                                </div>
                            </div>
        
                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href="">CIMB</a></h4>
                                    <p>Peralatan yang berkualitas, bersih dan nyaman untuk dipakai. Rasakan pengalaman seperti
                                        menginap di hotel</p>
                                </div>
                            </div>
        
                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                                data-aos-delay="400">
                                <div class="icon-box">
                                    <div class="icon"><i img src="img/home/header.png" class="img-fluid animated" alt="></i></div>
                                    <h4><a href="">BRI</a></h4>
                                    <p>Fitur harga dinamis untuk produk sewa dimana Anda akan mendapatkan potongan harga
                                        langsung untuk pemesanan lebih dari satu hari</p>
                                </div>
                            </div>
                            
                        </div>
        
                    </div>
        </section>
    </main><!-- End #main -->
@endsection
