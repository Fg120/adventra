@extends('layouts.app')

@section('title', 'Product')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="height: 5px">

    </section><!-- End Hero -->

    <main id="main">
    
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
                                        <h3 class="card-title">Edit User</h3>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-end flex-column">
                                        <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Kembali</a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{ route('admin.user.update', $user->id) }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        {{-- @method('PUT') --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        name="email" value="{{ $user->email }}">
                                                </div>
                                                @error('email')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Hp</span>
                                                    <input type="text" class="form-control" placeholder="Nomor Hp"
                                                        name="phone_number" value="{{ $user->phone_number }}">
                                                </div>
                                                @error('phone_number')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Nama</span>
                                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                                        name="name" value="{{ $user->name }}">
                                                </div>
                                                @error('name')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Gender</span>
                                                    <select class="form-select" id="gender" name="gender">
                                                        <option value="">Pilih Gender</option>
                                                        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>
                                                            Pria</option>
                                                        <option value="female"
                                                            {{ $user->gender == 'female' ? 'selected' : '' }}>Wanita</option>
                                                    </select>
                                                </div>
                                                @error('gender')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                                    <input type="password" class="form-control" placeholder="Password"
                                                        name="password">
                                                </div>
                                                @error('password')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                                    <input type="text" class="form-control" placeholder="Konfirmasi Password"
                                                        name="confirm_password">
                                                </div>
                                                @error('confirm_password')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Provinsi</span>
                                                    <select class="form-select" id="provinsi" name="province" disabled>
                                                        <option value="{{ $user->province }}" selected>{{ $user->province }}
                                                        </option>
                                                    </select>
                                                </div>
                                                @error('province')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Kabupaten</span>
                                                    <select class="form-select" id="kota" name="regency" disabled>
                                                        <option value="{{ $user->regency }}" selected>{{ $user->regency }}
                                                        </option>
                                                        {{-- <option value="" selected>Pilih Kabupaten</option> --}}
                                                    </select>
                                                </div>
                                                @error('regency')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Kecamatan</span>
                                                    <select class="form-select" id="kecamatan" name="city" disabled>
                                                        <option value="{{ $user->city }}" selected>{{ $user->city }}
                                                        </option>
                                                        {{-- <option value="" selected>Pilih Kecamatan</option> --}}
                                                    </select>
                                                </div>
                                                @error('city')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Desa</span>
                                                    <select class="form-select" id="kelurahan" name="village" disabled>
                                                        <option value="{{ $user->village }}" selected>{{ $user->village }}
                                                        </option>
                                                        {{-- <option value="" selected>Pilih Desa</option> --}}
                                                    </select>
                                                </div>
                                                @error('village')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Alamat</span>
                                                    <input type="text" class="form-control" placeholder="Alamat lengkap"
                                                        name="address" value="{{ $user->address }}">
                                                </div>
                                                @error('address')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Role</span>
                                                    <select class="form-select" id="role" name="role">
                                                        <option value="">Pilih Role</option>
                                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>
                                                            User</option>
                                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                                                            Admin</option>
                                                    </select>
                                                </div>
                                                @error('role')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">Foto KTP</span>
                                                    <input type="file" class="form-control" id="inputGroupFile04"
                                                        name="id_photo" value="{{ $user->id_photo }}">
                                                </div>
                                                @error('id_photo')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">NIK</span>
                                                    <input type="text" class="form-control" placeholder="NIK"
                                                        name="nik" value="{{ $user->nik }}">
                                                </div>
                                                @error('nik')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    @if ($user->id_photo != null)
                                                        <div style="width: 200px;">
                                                            <img src="{{ asset('storage/' . $user->id_photo) }}"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    @else
                                                        <p class="text-info">No Photo</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
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
        {{-- <script>
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
                .then((response) => response.json())
                .then((provinces) => {
                    var data = provinces;
                    var tampung = `<option value="">Pilih Provinsi</option>`;
                    data.forEach((element) => {
                        tampung +=
                            `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("provinsi").innerHTML = tampung;
                });
        </script>
        <script>
            const selectProvinsi = document.getElementById('provinsi');
            const selectKota = document.getElementById('kota');
            const selectKecamatan = document.getElementById('kecamatan');
            const selectKelurahan = document.getElementById('kelurahan');
    
            selectProvinsi.addEventListener('change', (e) => {
                var provinsi = e.target.options[e.target.selectedIndex].dataset.prov;
                fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                    .then((response) => response.json())
                    .then((regencies) => {
                        var data = regencies;
                        var tampung = `<option>Pilih Kabupaten</option>`;
                        document.getElementById('kota').innerHTML = '<option>Pilih Kabupaten</option>';
                        document.getElementById('kecamatan').innerHTML = '<option>Pilih Kecamatan</option>';
                        document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan</option>';
                        data.forEach((element) => {
                            tampung +=
                                `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                        });
                        document.getElementById("kota").innerHTML = tampung;
                    });
            });
    
            selectKota.addEventListener('change', (e) => {
                var kota = e.target.options[e.target.selectedIndex].dataset.prov;
                fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
                    .then((response) => response.json())
                    .then((districts) => {
                        var data = districts;
                        var tampung = `<option>Pilih Kecamatan</option>`;
                        document.getElementById('kecamatan').innerHTML = '<option>Pilih Kecamatan</option>';
                        document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan</option>';
                        data.forEach((element) => {
                            tampung +=
                                `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                        });
                        document.getElementById("kecamatan").innerHTML = tampung;
                    });
            });
            selectKecamatan.addEventListener('change', (e) => {
                var kecamatan = e.target.options[e.target.selectedIndex].dataset.prov;
                fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
                    .then((response) => response.json())
                    .then((villages) => {
                        var data = villages;
                        var tampung = `<option>Pilih Kelurahan</option>`;
                        document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan</option>';
                        data.forEach((element) => {
                            tampung +=
                                `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                        });
                        document.getElementById("kelurahan").innerHTML = tampung;
                    });
            });
        </script> --}}
    @endsection
    