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

                                @php
                                    $total_price = 0;
                                @endphp

                                <div class="card-body">
                                    <h5 class="card-title">Order ID {{ $order->id }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">By {{ $order->user->name }}</h6>
                                    <p class="card-text">{{$order->status}}</p>
                                    <hr>
                                    @foreach ($order->transactions as $transaction)
                                        <p>{{ $transaction->product->name }} - {{ $transaction->amount }} pcs</p>
                                        @php
                                            $total_price += $transaction->product->price * $transaction->amount;
                                        @endphp
                                    @endforeach
                                    <hr>
                                    <p>Total: Rp. {{ number_format($total_price) }}</p>
                                    <hr>

                                    @if ($order->is_paid == false && $order->payment_receipt == null && !Auth::user()->is_admin)
                                        <form action="{{ route('submit_payment_receipt', $order) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Upload your payment receipt</label>
                                                <input type="file" name="payment_receipt" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit payment</button>
                                        </form>
                                    @endif
                                    <a href="{{route('home.index')}}" class="btn btn-primary">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
        </section>
    </main><!-- End #main -->
@endsection
