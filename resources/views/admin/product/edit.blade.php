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
                                    <h3 class="card-title">Edit Product</h3>
                                </div>
                                <div class="col-md-6 d-flex align-items-end flex-column">
                                    <a href="{{ route('admin.product.index') }}"
                                       class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('admin.product.update', $product->id) }}"
                                      enctype="multipart/form-data"
                                      method="post">
                                    @csrf
                                    {{-- @method('PUT') --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"
                                                      id="basic-addon1">Name</span>
                                                <input type="text"
                                                       class="form-control"
                                                       placeholder="Name"
                                                       name="name"
                                                       value="{{ $product->name }}">
                                            </div>
                                            @error('name')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"
                                                      id="basic-addon1">Harga</span>
                                                <input type="text"
                                                       class="form-control"
                                                       placeholder="Harga"
                                                       name="price"
                                                       value="{{ $product->price }}">
                                            </div>
                                            @error('price')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"
                                                      id="basic-addon1">Deskripsi</span>
                                                <div class="form-floating">
                                                    <textarea class="form-control"
                                                              name="desc"
                                                              value=""
                                                              placeholder="Leave a comment here"
                                                              id="floatingTextarea2"
                                                              style="height: 250px">{{ $product->desc }}</textarea>
                                                    <label for="floatingTextarea2">Deskripsi</label>
                                                </div>
                                            </div>
                                            @error('name')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"
                                                      id="basic-addon1">Stock Available</span>
                                                <input type="number"
                                                       class="form-control"
                                                       value="{{ $product->stock_available }}"
                                                       placeholder="Stock_available"
                                                       name="stock_available">
                                            </div>
                                            @error('stock_available')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-text"
                                                      id="basic-addon1">Kategori</span>
                                                <select class="form-control"
                                                        name="id_category"
                                                        id="id_category">
                                                    @foreach ($categorys as $item)
                                                        <option value="{{ $item->id }}"
                                                                {{ $item->id == $product->id_category ? 'selected' : '' }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('id_category')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-text"
                                                      id="basic-addon1">Foto Produk</span>
                                                <input type="file"
                                                       class="form-control"
                                                       id="inputGroupFile04"
                                                       name="photo">
                                            </div>
                                            @error('photo')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                @if ($product->photo != null)
                                                    <div style="width: 200px;">
                                                        <img src="{{ asset('storage/' . $product->photo) }}"
                                                             class="img-fluid"
                                                             alt="">
                                                    </div>
                                                @else
                                                    <p class="text-info">No Photo</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit"
                                                    class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
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
