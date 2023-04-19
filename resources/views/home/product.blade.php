@extends('layouts.app')

@section('title', 'Product')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us ======= -->
        <section id="services" class="services section-bg">
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>PRODUK</h2>
                        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up"
                            data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($categorys as $item)
                                <li data-filter=".filter-{{ $item->id }}">{{ $item->name }}</li>
                            @endforeach
                        </ul>

                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($products as $item)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->id_category }}">
                                    <div class="portfolio-img"><img src="{{ asset('storage/' . $item->photo) }}"
                                            class="img-fluid" alt=""></div>
                                    <div class="portfolio-info">
                                        <h4>{{ $item->name }}</h4>
                                        <p>{{ $item->fkCategory->name }}</p>
                                        <a href="{{ asset('storage/' . $item->photo) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox preview-link" title="{{ $item->name }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('home.view', $item->id) }}" class="details-link"
                                            title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Card 2</h4>
                                    <p>Card</p>
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="Card 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Web 2</h4>
                                    <p>Web</p>
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="Web 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="App 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Card 1</h4>
                                    <p>Card</p>
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="Card 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Card 3</h4>
                                    <p>Card</p>
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="Card 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
            <!-- ======= Pricing Section ======= -->
            <section id="pricing" class="pricing">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Harga Paket</h2>
                        <p></p> Pilih Sesuai Kebutuhan Kamu Dengan Harga Yang Lebih Terjangkau.</p>
                        <p> <strong> Paket Sewa Tenda 2P & 4P </strong></p>
                    </div>

                    <div class="row">

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                                <h3>Tenda 2P</h3>
                                <h6> Paket 1</h6>
                                <h4><sup>IDR</sup>85.000<span>per malam</span></h4>
                                <ul>
                                    <li><i class="bx bx-check"></i> Matrass 2 pcs</li>
                                    <li><i class="bx bx-check"></i> Slepping Bag 2 pcs</li>
                                    <li class="na"><i class="bx bx-x"></i> <span>Kompor 1 set</span></li>
                                    <li class="na"><i class="bx bx-x"></i> <span>Nesting 1 set</span></li>
                                    <li class="na"><i class="bx bx-x"></i> <span>Flysheet 1 pcs</span></li>
                                    <li class="na"><i class="bx bx-x"></i> <span>Lampu Tenda 1 pcs</span></li>
                                </ul>
                                <a href="#" class="buy-btn">Book Now</a>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="box featured">
                                <h3>Tenda 2P</h3>
                                <h6>Paket 2</h6>
                                <h4><sup>IDR</sup>110.000<span>per malam</span></h4>
                                <ul>
                                    <li><i class="bx bx-check"></i> Matras 2 pcs</li>
                                    <li><i class="bx bx-check"></i> Slepping Bag 2 pcs</li>
                                    <li><i class="bx bx-check"></i> Kompor 1 set</li>
                                    <li><i class="bx bx-check"></i> Nesting 1 set</li>
                                    <li class="na"><i class="bx bx-x"></i> <span>Flysheet 1 pcs</span></li>
                                    <li class="na"><i class="bx bx-x"></i> <span>Lampu Tenda 1 pcs</span></li>
                                </ul>
                                <a href="#" class="buy-btn">Book Now</a>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                            <div class="box">
                                <h3>Tenda 4P<h3>
                                        <h6>Paket 1</h6>
                                        <h4><sup>IDR</sup>185.000<span>per malam</span></h4>
                                        <ul>
                                            <li><i class="bx bx-check"></i> Matrass 4 pcs</li>
                                            <li><i class="bx bx-check"></i> Slepping Bag 4 pcs</li>
                                            <li><i class="bx bx-check"></i> Kompor 1 set</li>
                                            <li><i class="bx bx-check"></i> Nesting 1 set</li>
                                            <li><i class="bx bx-check"></i> Flysheeet 1 set</li>
                                            <li><i class="bx bx-check"></i> Lampu Tenda 1 pcs</li>
                                        </ul>
                                        <a href="#" class="buy-btn">Book Now</a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Pricing Section -->
        </section>
    </main><!-- End #main -->
@endsection
