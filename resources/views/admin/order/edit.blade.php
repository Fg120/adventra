@extends('layouts.admin.app')

@section('title', 'Home')

@section('link')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content mt-4">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header justify-content-between row">
                                <div class="col-md-6 d-flex align-items-start flex-column">
                                    <h3 class="card-title">Edit Order</h3>
                                </div>
                                <div class="col-md-6 d-flex align-items-end flex-column">
                                    <a href="{{ route('admin.order.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group mb-3 shadow">
                                            <span class="input-group-text" id="basic-addon1">Order ID</span>
                                            <span class="form-control">{{ $order->id }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3 shadow">
                                            <span class="input-group-text" id="basic-addon1">Order By</span>
                                            <span class="form-control">{{ $order->user->name }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3 shadow">
                                            <span class="input-group-text" id="basic-addon1">Status</span>
                                            <span
                                                class="form-control 
                                            @if ($order->status == 'Belum Dibayar') bg-secondary text-white @endif
                                            @if ($order->status == 'Menunggu Konfirmasi') bg-warning text-white @endif
                                            @if ($order->status == 'Terkonfirmasi') bg-info text-white @endif
                                            @if ($order->status == 'Selesai') bg-success text-white @endif
                                            ">{{ $order->status }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Detail Transaksi</h3>
                                    @foreach ($order->transactions as $transaction)
                                        <p>{{ $transaction->product->name }} - {{ $transaction->amount }} pcs</p>
                                    @endforeach
                                    <hr>
                                    <p>Total: Rp. {{ number_format($order->total) }}</p>
                                    <hr>
                                    {{-- <div class="col-md-6"> --}}
                                        <div class="input-group mb-3">
                                            @if ($order->payment_receipt != null)
                                                <div style="width: 200px;">
                                                    <img src="{{ asset('storage/' . $order->payment_receipt) }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                            {{-- @else --}}
                                                {{-- <p class="text-info">No Photo</p> --}}
                                            @endif
                                        </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="row">
                                    <h3>Ubah Status</h3>
                                    <div class="col-md-6">
                                        @if ($order->status == 'Belum Dibayar' || $order->status == 'Selesai')
                                            <h5>Tidak Tersedia</h5>
                                        @endif
                                        @if ($order->status == 'Menunggu Konfirmasi')
                                            <form action="{{ route('admin.order.confirm', $order) }}"
                                                method="post">
                                                @csrf
                                                <button class="btn btn-success" type="submit">Konfirmasi</button>
                                            </form>
                                        @endif
                                        @if ($order->status == 'Terkonfirmasi')
                                            <form action="{{ route('admin.order.complete', $order) }}"
                                                method="post">
                                                @csrf
                                                <button class="btn btn-success" type="submit">Selesai</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')

@endsection
