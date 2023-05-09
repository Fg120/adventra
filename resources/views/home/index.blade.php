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
                        @auth
                            <a href="{{ route('home.product') }}" class="btn-get-started scrollto">Sewa Sekarang</a>
                        @else
                            <a href="{{ route('auth') }}" class="btn-get-started scrollto">Sewa Sekarang</a>
                        @endauth
                        {{-- <a href="https://youtu.be/vky7F5OK5Zk" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
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
           
        </div>

    </div>
</section><!-- End Cta Section -->
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>PRODUK</h2>

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
                        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up"
                            data-aos-delay="100">
                            <a href="{{ route('home.product') }}" class="btn btn-primary">Lainnya...</a>
                            {{-- <li data-filter="*" class="filter-active">All</li> --}}
                        </ul>
                    </div>
            </section><!-- End Portfolio Section -->
            <!-- ======= Pricing Section ======= -->



                   
            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Rental FAQ</h2>
                        <p> Information and Instruction for Camping Equipment Rental at Adventra</p>
                    </div>

                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#faq-list-1">How Do I Become a Rental Member? 
                                <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                    <p>
                                        When renting from us for the first time, you will need to fill in our Sign-up form (Sewa Sekarang).
                                        We also need some forms of identification. 
                                        You can find the full details and the rental agreement sign up
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-2" class="collapsed">How Long is a Rental Day? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Pick up is from 3pm the day before your booking and return before 10am the day after your booking. 
                                        For example: if you book for Wednesday 
                                        Pick up after 3pm on the Tuesday 
                                        Return before 10am on the Thursday
                                        (Rentals over the weekend are charged as a one day rate when picked up after 3pm on the Friday.)
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-3" class="collapsed">Can I have My Item Couriered? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Yes. For couriers going outside of Jember, a minimum 2 day charge and 2 way courier fees apply. 
                                        We will require at least 3 days notice and full payment must be made before your rental start date. 
                                        This is to ensure that your rental equipment can be delivered in time for your shoot. 
                                        Same day service within Jember may also be possible. 
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-4" class="collapsed">I'm a New Customer but I don’t live in Jember, can I still rent? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Yes, when renting from us for the first time and are unable to visit us in store,
                                        you will be required to have the requested identifications sighted and signed by a Justice of the Peace.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="500">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-5" class="collapsed">Do I need to show my ID every time I come in? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        No, we only take a copy of your ID's the first time you come in. 
                                        However, if you move, we will need to update your proof of address.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="500">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-5" class="collapsed">What Are Your Opening Hours? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Monday - Friday: 8am - 5:30pm. Saturday: 8:30am - 2pm. Sunday: 5pm - 8:30pm.
                                         Closed Public Holidays.
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
                        <p> Here are some of our team members Adventra. If you need help regarding our product and so on,
                            you can contact some of our team's social media which are included below. Thank You
                    </p>
                    </div>

                    <div class="row">

                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="img/home/user.png" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Raditya Mulya Nugroho</h4>
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

                        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="img/home/user.png" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4>Anwar Ibrahim</h4>
                                    <span>Product Manager</span>
                                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""><i class="ri-linkedin-box-fill"></i> </a>
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
                        <p>Opening Hours

                            Monday - Friday 
                            8am - 5:30pm
                            
                            Saturday 
                            8:30am - 2pm
                            
                            Sunday 
                            5pm - 8:30pm
                            
                            *Closed Public Holidays.</p>
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
                                    width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"
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
