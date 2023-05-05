@extends('layouts.app')

@section('title', 'Product')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="height: 5px">

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
                        </div>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
            <!-- ======= Pricing Section ======= -->
    </main><!-- End #main -->
@endsection
