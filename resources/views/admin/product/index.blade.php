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
                                    <h3 class="card-title">Data Product</h3>
                                </div>
                                <div class="col-md-6 d-flex align-items-end flex-column">
                                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Tambah</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tables" class="table table-bordered table-striped shadow">
                                        <thead>
                                            <tr>
                                                <th class="sorting sorting_asc">No</th>
                                                <th class="sorting">Name</th>
                                                <th class="sorting">Category</th>
                                                <th class="sorting">Desc</th>
                                                <th class="sorting">Price</th>
                                                <th class="sorting">Stock Available</th>
                                                <th class="sorting">Stock True</th>
                                                <th class="sorting">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->fkCategory->name }}</td>
                                                    <td>
                                                        <span class="d-inline-block text-truncate"
                                                            style="max-width: 150px">{{ $item->desc }}</span>
                                                    </td>
                                                    <td>{{ $item->price }} K</td>
                                                    <td>{{ $item->stock_available }}</td>
                                                    <td>{{ $item->stock_true }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('admin.product.edit', $item->id) }}" type="button"
                                                            class="btn btn-primary me-3">Edit</a>
                                                        {{-- <a href="{{ route('admin.product.detail', $item->id) }}" type="button"
                                                            class="btn btn-primary me-3">Detail</a> --}}
                                                        <form method="POST"
                                                            action="{{ route('admin.product.destroy', $item->id) }}">
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