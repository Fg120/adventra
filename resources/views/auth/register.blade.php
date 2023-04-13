<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Adventra</title>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    @include('sweetalert::alert')
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <div class="col-md-6">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img src="{{ asset('img/home/logo.png') }}" alt="Bootstrap" width="30" height="30">
                    </a>
                </div>
                <ul class="navbar-nav col-lg-6 justify-content-lg-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="/img/home/logo.png" alt="" />
                <h3> Adventra</h3>
                <p>Adventuring Worry-Free With Us!</p>
                <input type="submit" name="" value="{{ old('') }}Login" /><br />
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home"
                            aria-selected="true">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" role="tab" aria-controls="profile"
                            aria-selected="false">Adventra</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register</h3>
                        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap *"
                                            value="{{ old('name') }}" name="name" />
                                        @error('name')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *"
                                            value="{{ old('email') }}" name="email" />
                                        @error('email')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *"
                                            value="" name="password" />
                                        @error('password')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Provinsi</label>
                                        <select class="form-control" id="provinsi" name="province">
                                            <option class="hidden" selected disabled>Pilih Provinsi Anda</option>
                                        </select>
                                        @error('province')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Kecamatan</label>
                                        <select class="form-control" id="kecamatan" name="city">
                                            <option class="hidden" selected disabled>Pilih Kecamatan Anda</option>
                                        </select>
                                        @error('city')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Alamat Lengkap *"
                                            value="{{ old('address') }}" name="address">
                                        @error('address')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="photo">Upload Foto KTP</label>
                                        <input type="file" name="id_photo" class="form-control" id="id_photo">
                                        @error('id_photo')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="12" class="form-control"
                                            placeholder="Nomor HP *" value="{{ old('phone_number') }}"
                                            name="phone_number" />
                                        @error('phone_number')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" class="form-control"
                                            placeholder="Konfirmasi Password *" value="" />
                                        @error('confirm_password')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Kabupaten</label>
                                        <select class="form-control" id="kota" name="regency">
                                            <option class="hidden" selected disabled>Pilih Kabupaten Anda</option>
                                        </select>
                                        @error('regency')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Kelurahan</label>
                                        <select class="form-control" id="kelurahan" name="village">
                                            <option class="hidden" selected disabled>Pilih Kelurahan Anda</option>
                                        </select>
                                        @error('village')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Pria </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span>Wanita </span>
                                            </label>
                                        </div>
                                    </div>
                                    <label for="photo">Input NIK</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nomor NIK *"
                                            name="nik" value="{{ old('nik') }}" name="nik" />
                                        @error('nik')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" value="" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <script>
        fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then((response) => response.json())
            .then((provinces) => {
                var data = provinces;
                var tampung = `<option value="">Pilih Provinsi Anda</option>`;
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
                    var tampung = `<option>Pilih Kabupaten Anda</option>`;
                    document.getElementById('kota').innerHTML = '<option>Pilih Kabupaten Anda</option>';
                    document.getElementById('kecamatan').innerHTML = '<option>Pilih Kecamatan Anda</option>';
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan Anda</option>';
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
                    var tampung = `<option>Pilih Kecamatan Anda</option>`;
                    document.getElementById('kecamatan').innerHTML = '<option>Pilih Kecamatan Anda</option>';
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan Anda</option>';
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
                    var tampung = `<option>Pilih Kelurahan Anda</option>`;
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih Kelurahan Anda</option>';
                    data.forEach((element) => {
                        tampung +=
                            `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kelurahan").innerHTML = tampung;
                });
        });
    </script>
</body>

</html>
