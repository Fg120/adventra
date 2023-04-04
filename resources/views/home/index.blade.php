@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="mb-3">
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5">
                    <img class="img-fluid" src="{{ asset('img/home/header.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5">
                    <h1 class="fw-bold">Adventuring Worry-Free With Us!</h1>
                    <p class="fs-5">Our partner in 30+ cities ready to rent you
                        adventure equipment you need!</p>
                    <a class="btn btn-primary" type="button">Sewa Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <h2 class="fw-bold text-center">What Do We Provide?</h2>

    <section class="mb-3 mt-3">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('img/home/wdwp.png') }}" alt="">
            </div>
            <div class="col-md-5">
                <tr>
                    <td>
                        <h4 class="fw-bold">Camping Equipment</h4>
                        <p>We provide your basic need like: Tents, Portable Stove, Nesting, etc</p>
                    </td>
                    <td>
                        <h4 class="fw-bold">Hiking Equipment</h4>
                        <p>So you like hike through the mountains? we got your back! We also provide your need to conquer
                            those mountains from jacket, hiking boots, tracking pole, etc</p>
                    </td>
                    <td>
                        <h4 class="fw-bold">All In One Place</h4>
                        <p>We serve all your adventurous needs, no need to bother looking in several places, everything is
                            in one place</p>
                    </td>
                </tr>
            </div>
        </div>
    </section>

    <h2 class="fw-bold text-center">Some Our Products</h2>

    <section class="mb-3 mt-3">
        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="btn btn-secondary" href="#" role="button">View</a>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="btn btn-secondary" href="#" role="button">View</a>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="btn btn-secondary" href="#" role="button">View</a>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="btn btn-secondary" href="#" role="button">View</a>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="btn btn-secondary" href="#" role="button">View</a>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%"
                                    y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="btn btn-secondary" href="#" role="button">View</a>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="text-center">
                        <a href="" class="btn btn-primary">See More...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
