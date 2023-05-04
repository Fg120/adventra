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
                                <div class="card-header">{{ __('Orders') }}</div>

                                <div class="card-body m-auto">
                                    @foreach ($orders as $order)
                                        <div class="card mb-2" style="width: 30rem;">
                                            <div class="card-body">
                                                <a href="{{ route('show_order', $order) }}">
                                                    <h5 class="card-title">Order ID {{ $order->id }}</h5>
                                                </a>
                                                <h6 class="card-subtitle mb-2 text-muted">By {{ $order->user->name }}</h6>
                                                <p class="card-text">{{ $order->status }}</p>
                                                @if ($order->payment_receipt)
                                                    <div class="d-flex flew-row justify-content-around">
                                                        <a href="{{ url('storage/' . $order->payment_receipt) }} "
                                                            class="btn btn-primary">Show payment
                                                            receipt</a>
                                                        @if (Auth::user()->is_admin)
                                                            <form action="{{ route('confirm_payment', $order) }}"
                                                                method="post">
                                                                @csrf
                                                                <button class="btn btn-success"
                                                                    type="submit">Confirm</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
        </section>
    </main><!-- End #main -->
@endsection
