<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/register.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!------ Include the above in your HEAD tag ---------->

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
            <input type="submit" name="" value="Login" /><br />
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Adventra</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Register</h3>
                    <div class="row register-form">
                        <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="firstname" class="form-control"
                                        placeholder="Nama Awal *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email *"
                                        value="" />
                                </div>
                                @error('email')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password *"
                                        value="" />
                                </div>
                                <div class="form-group">

                                    <label for="exampleFormControlSelect1">Provinsi</label>
                                    <select class="form-control" id="provinsi">
                                        <option name="provinsi" class="hidden" selected disabled>Please Select Your
                                            Provinsi
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kecamatan</label>
                                    <select class="form-control" id="kecamatan">
                                        <option class="hidden" selected disabled>Please Select Your Kecamatan</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Alamat Lengkap *"
                                        value="">
                                </div>
                                <div>
                                    <label for="photo">Upload Foto KTP</label>
                                    <input type="file" name="photo" class="form-control" id="photo">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Akhir *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone"
                                        class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="" />
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kota</label>
                                    <select class="form-control" id="kota">
                                        <option class="hidden" selected disabled>Please Select Your Provinsi
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kelurahan</label>
                                    <select class="form-control" id="kelurahan">
                                        <option class="hidden" selected disabled>Please Select Your Kelurahan</option>
                                    </select>
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
                                        value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Apply as a Hirer</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *"
                                    value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *"
                                    value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control"
                                    placeholder="Phone *" value="" />
                            </div>
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
                var tampung = `<option>Pilih</option>`;
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
                    var tampung = `<option>Pilih</option>`;
                    document.getElementById('kota').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kecamatan').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
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
                    var tampung = `<option>Pilih</option>`;
                    document.getElementById('kecamatan').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
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
                    var tampung = `<option>Pilih</option>`;
                    document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        tampung +=
                            `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kelurahan").innerHTML = tampung;
                });
        });
    </script>
