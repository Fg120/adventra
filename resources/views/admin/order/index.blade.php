@extends('layouts.admin.app')

@section('title', 'Home')

@section('link')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content mt-4">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    @include('sweetalert::alert')
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header justify-content-between row">
                                <div class="col-md-6 d-flex align-items-start flex-column">
                                    <h3 class="card-title">Data Order</h3>
                                </div>
                                <div class="col-md-6 d-flex align-items-end flex-column">
                                    {{-- <a href="{{ route('admin.order.create') }}" class="btn btn-primary">Tambah</a> --}}
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tables" class="table table-bordered table-striped shadow">
                                        <thead>
                                            <tr>
                                                <th class="sorting sorting_asc">No</th>
                                                <th class="sorting">Order ID</th>
                                                <th class="sorting">By</th>
                                                <th class="sorting">Status</th>
                                                <th class="sorting">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->user->name }}</td>
                                                    <td><span
                                                            class="badge
                                                        @if ($item->status == 'Belum Dibayar') text-bg-secondary text-white @endif
                                                        {{ ($item->status == 'Menunggu Konfirmasi') ? 'text-bg-warning text-white' : '' }}
                                                        {{ ($item->status == 'Terkonfirmasi') ? 'text-bg-info text-white' : '' }}
                                                        {{ ($item->status == 'Dipick Up') ? 'text-bg-primary text-white' : '' }}
                                                        {{ ($item->status == 'Selesai') ? 'text-bg-success text-white' : '' }}
                                                            ">{{ $item->status }}</span>
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('admin.order.edit', $item->id) }}"
                                                            type="button" class="btn btn-primary me-3">Detail</a>
                                                        <form method="POST"
                                                            action="{{ route('admin.order.destroy', $item->id) }}">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-xs btn-danger btn-flat show_confirm"
                                                                data-toggle="tooltip" title='Delete'>Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda yakin ingin menghapur record ini?`,
                    text: "Jika anda mengapus maka record akan hilang selamanya",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection

@section('script')

@endsection
