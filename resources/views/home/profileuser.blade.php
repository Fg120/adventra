@extends('layouts.app')

@section('title', 'Product')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="height: 5px">

    </section><!-- End Hero -->

    <main id="main">
    

<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{ asset('storage/' . Auth::user()->id_photo) }}" alt="avatar" class="rounded img-fluid" style="width: 350px;">
              <h5 class="my-3" > {{ Auth::user()->name}}</h5>
              <b class="text-muted mb-1"> NIK : {{ Auth::user()->nik}}</b>
              <p class="text-muted mb-4">{{ Auth::user()->regency}} - {{ Auth::user()->province}}</p> 
            </div>
          </div>
          
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Name</p>
                  </div>
                  <div class="col-sm-9">
                    <input type="" name='name' class="form-control" placeholder="Name" value="{{ auth()->user()->name}}">
                  </div>
                </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name='email' class="form-control" placeholder="Email" value="{{ auth()->user()->email}}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name='gender' class="form-control" placeholder="Gender" value="{{ auth()->user()->gender}}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Provinsi</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name='province' class="form-control" placeholder="Provinsi" value="{{ auth()->user()->province}}">
                </div>
              </div>
              <hr>

             <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Kabupaten</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name='regency' class="form-control" placeholder="Regency" value="{{ auth()->user()->regency}}">
                </div>
              </div>
              <hr>


              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Kecamatan</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name='city' class="form-control" placeholder="City" value="{{ auth()->user()->city}}">
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Kelurahan</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name='village' class="form-control" placeholder="City" value="{{ auth()->user()->village}}">
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name='address' class="form-control" placeholder="Adress" value="{{ auth()->user()->address}}">
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" name='phone' class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone_number}}">
                </div>
              </div>
              <hr>
              
             
          </div>
          
    </div>
  </section>