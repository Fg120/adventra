@extends('layouts.admin.app')

@section('title', 'Home')

@section('link')

@endsection

@section('content')
    <div class="content-wrapper">
        @include('sweetalert::alert')
        <!-- Main content -->
        <section class="content mt-4">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header justify-content-between row">
                                <div class="col-md-6 d-flex align-items-start flex-column">
                                    <h3 class="card-title">Data User</h3>
                                </div>
                                <div class="col-md-6 d-flex align-items-end flex-column">
                                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Tambah</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="tables" class="table table-bordered table-striped shadow">
                                    <thead>
                                        <tr>
                                            <th class="sorting sorting_asc">No</th>
                                            <th class="sorting">Name</th>
                                            <th class="sorting">Email</th>
                                            <th class="sorting">No Hp</th>
                                            <th class="sorting">Role</th>
                                            <th class="sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone_number }}</td>
                                                <td>{{ $item->role }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('admin.user.edit', $item->id) }}" type="button"
                                                        class="btn btn-primary me-3">Edit</a>
                                                    <form action="{{ route('admin.user.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger me-3">Delete</button>
                                                    </form>
                                                    <a href="{{ route('admin.user.detail', $item->id) }}" type="button"
                                                        class="btn btn-primary me-3">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
