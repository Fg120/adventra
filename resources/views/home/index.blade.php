@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Adventuring Worry-Free With Us!</h1>
                    <h2>Our Partner in 30+ cities ready to rent you adventure equipment need!</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Sewa Sekarang</a>
                        <a href="https://youtu.be/vky7F5OK5Zk" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="img/home/header.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->
        <!-- ======= About Us ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">



                <div class="section-title">
                    <h2>ABOUT US</h2>
                    <h3> ADVENTRA </h3>
                    <h4> Pusat Spesialis Penyewaan Alat Camping</h4>
                    <br>
                    <p>Adventra adalah usaha yang bergerak dibidang jasa persewaan alat berkemah yang berlokasi di
                        Jember, Lumajang dan Banyuwangi. Kami berpartner dengan berbagai mitra di setiap daerah untuk
                        menyediakan peralatan berkemah terbaik yang anda butuhkan</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Booking & Belanja Online</a></h4>
                            <p>Anda Bisa Memesan Produk yang dijual dan disewa secara online. Tanpa Ribet, mudah, cepet,
                                efisien, dimana saja & kapan saja</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Mudah Cek Ketersedian</a></h4>
                            <p>Tanpa harus menghubungi admin, Anda bisa cek ketersedian produk sewa, lihat di detail
                                produk dan sesuaikan jadwal Anda sebelum kehabisan</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Quality,Clean & Comfort</a></h4>
                            <p>Peralatan yang berkualitas, bersih dan nyaman untuk dipakai. Rasakan pengalaman seperti
                                menginap di hotel</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Potongan Harga</a></h4>
                            <p>Fitur harga dinamis untuk produk sewa dimana Anda akan mendapatkan potongan harga
                                langsung untuk pemesanan lebih dari satu hari</p>
                        </div>
                    </div>

                </div>

            </div>
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>PRODUK</h2>

                        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up"
                            data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Tenda</li>
                            <li data-filter=".filter-app">Pakaian</li>
                            <li data-filter=".filter-card">Alat Masak</li>
                            <li data-filter=".filter-web">Slepping Bag</li>
                            <li data-filter=".filter-tas">Matrass</li>
                        </ul>

                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg"
                                        class="img-fluid" alt=""></div>
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
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg"
                                        class="img-fluid" alt=""></div>
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
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg"
                                        class="img-fluid" alt=""></div>
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
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg"
                                        class="img-fluid" alt=""></div>
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
                                <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg"
                                        class="img-fluid" alt=""></div>
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

                            <div class="col-lg-4 col-md-6 portfolio-item filter-tas">
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
            </section><!-- End Portfolio Section -->
            <!-- ======= Pricing Section ======= -->
           

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us section-bg">
                <div class="container-fluid" data-aos="fade-up">

                    <div class="row">

                        <div
                            class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                            <div class="content">
                                <h3> <strong>What Do We Provide?</strong></h3>
                                <br>
                            </div>

                            <div class="accordion-list">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="collapse" class="collapse"
                                            data-bs-target="#accordion-list-1"><span>01</span> Camping Equipment <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-1" class="collapse show"
                                            data-bs-parent=".accordion-list">
                                            <p>
                                                We provide your basic need like: Tents, Portable Stove, Nesting, etc
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                            class="collapsed"><span>02</span> Hiking Equipment <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                            <p>
                                                So you like hike through the mountains? we got your back! We also
                                                provide your need to conquer
                                                those mountains from jacket, hiking boots, tracking pole,

                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                            class="collapsed"><span>03</span> All In One Place <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                            <p>
                                                We serve all your adventurous needs, no need to bother looking in
                                                several places, everything
                                                is
                                                in one place

                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                            style='background-image: url("img/home/wdwp.png");' data-aos="zoom-in" data-aos-delay="150">
                            &nbsp;</div>
                    </div>

                </div>
            </section><!-- End Why Us Section -->


            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-in">

                    <div class="row">
                        <div class="col-lg-9 text-center text-lg-start">
                            <h3>Call To Action</h3>
                            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="#">Call To Action</a>
                        </div>
                    </div>

                </div>
            </section><!-- End Cta Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Bantuan</h2>
                        <p>Informasi dan Petunjuk Penyewaan Peralatan Camping di Adventra.</p>
                    </div>

                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus
                                    urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi
                                    enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur
                                    adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam
                                    aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                        suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                        Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                        turpis cursus in.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="500">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare.
                                    Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies
                                        leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet.
                                        Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu
                                        scelerisque.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Team</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                            Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                            alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="img/home/user.png" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Raditya Mulya Nugroho</h4>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Team Section -->



            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                            Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                            alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Tegalboto Jl. Kalimantan No.42, Krajan Timur, Sumbersari, Jember Regency, East
                                        Java 68121</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>adventra@adventra.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+6281232740593</p>
                                </div>

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.400752859682!2d113.71039277529795!3d-8.162317091868417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6955f324eacef%3A0x15cfbb5232694a7e!2sEJSC%20(East%20Java%20Super%20Coridor)%20JEMBER!5e0!3m2!1sid!2sid!4v1681466698823!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" name="message" rows="10" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection
