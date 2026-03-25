<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Home | American Intercon School</title>
    <meta name="description" content="AIS Main Homepage"/>
   <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>
<body>
@extends('master')
@section('content')

    <section class="hero">
        <div class="hero-1">
            <div class="container grid-2 container_hero pb-1 px-5 pt-5">
                <div class="hero-image">
                    <img alt="" class="img-fluid" loading="lazy"
                         src="https://ais.edu.kh/storage/photos/promotion/hero-05-03-2026.webp"
                         style="width: 100%; height: 100%; border-radius: 10px;">
                </div>
                <div class="hero-video">
                    <!--        <img src="assets/img/programs.svg" alt="Programs" />-->
                    <iframe
                        class="img-fluid"
                        style="aspect-ratio: 16 / 9; border-radius: 0;"
                        src="https://www.youtube.com/embed/tn4u8Ws8j6o?autoplay=1&mute=1&controls=1&loop=1&playlist=tn4u8Ws8j6o"
                        title="YouTube video player"
                        frameborder="0"
                        allow="autoplay; encrypted-media; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
            <div class="d-flex justify-content-center pt-5" style="gap: 20px;">
                <button class="btn btn-danger rounded-pill px-4" onclick="window.location.href='admissions.html'">
                    Admission
                </button>
                <button class="btn btn-outline-danger rounded-pill px-4"
                        onclick="window.location.href='campuses/index.html'">
                    Explore Our Campuses
                </button>
            </div>


            <div class="d-flex justify-content-center pt-4">
                <img src="{{ asset('images/award.png') }}" alt="" style="width: 35%">
            </div>
            <div class="universities-partner-slide pt-3">
                <div class="track">
                    <img src="{{ asset('images/university-partner.jpg') }}" alt="">
                    <img src="{{ asset('images/university-partner.jpg') }}" alt="">

                    <!-- duplicate -->
                    {{--                        <img src="{{ asset('images/university-partner.jpg') }}" alt="">--}}
                    {{--                        <img src="{{ asset('images/university-partner.jpg') }}" alt="">--}}
                </div>
            </div>
        </div>
        <div class="hero-2">
            <div id="single-item" class="single-item" style="overflow-x: clip;">
                <div class="slide-block d-flex justify-content-center">
                    <section class="hero-block">
                        <!-- Background Image or Video -->
                        <div class="hero-bg">
                            <img src="https://tsk.ais.edu.kh/storage/photos/article/March%2025/mobile-app.jpg"
                                 alt="Hero Background">
                            <!-- Or you can replace <img> with <video> for autoplay background -->
                        </div>

                        <!-- Content -->
                        <div class="hero-content">
                            <h1>Track your Childs Success</h1>
                            <p>We cultivate children with compassion, dedicating time to cherish traditions while
                                preparing them
                                to be globally competitive and ready for a future on the world stage.</p>

                            <div class="hero-buttons">
                                <div class="d-flex justify-content-center pt-5" style="gap: 20px;">
                                    <a href="#">
                                        <img src="https://cdn.worldvectorlogo.com/logos/available-on-the-app-store.svg"
                                             style="width: 10vw; height: 10vw;"
                                             alt="">
                                    </a>
                                    <a href="#">
                                        <img src="https://www.svgrepo.com/show/303139/google-play-badge-logo.svg" alt=""
                                             style="width: 10vw; height: 10vw;">
                                    </a>
                                </div>

                            </div>

                            <div class="hero-events bg-danger text-white">
                                <span>UPCOMING EVENTS - Grade 12 Graduation : July 11, 2026</span>
                                <a href="#" class="view-calendar">View Calendar</a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="slide-block d-flex justify-content-center">
                    <section class="hero-block">
                        <!-- Background Image or Video -->
                        <div class="hero-bg">
                            <img src="https://ais.edu.kh/storage/photos/home/good-for-kid.webp" alt="Hero Background"
                                 style=" filter: blur(8px); ">
                            <!-- Or you can replace <img> with <video> for autoplay background -->
                        </div>

                        <!-- Content -->
                        <div class="hero-content">
                            <h1>Quality. Discipline. Services</h1>
                            <p>We cultivate children with compassion, dedicating time to cherish traditions while
                                preparing them
                                to be globally competitive and ready for a future on the world stage.</p>

                            <div class="hero-buttons">
                                <a href="#" class="btn btn-danger rounded-pill px-4">Admission</a>
                                <a href="#" class="btn btn-danger rounded-pill px-4">Explore All Campuses</a>
                            </div>

                            <div class="hero-events bg-danger text-white">
                                <span>UPCOMING EVENTS - Grade 12 Graduation : July 11, 2026</span>
                                <a href="#" class="view-calendar">View Calendar</a>
                            </div>
                            <div class="d-flex justify-content-center pt-5" style="gap: 20px;">
                                <img src="{{asset('images/award.png')}}"
                                     alt="">
                            </div>
                        </div>
                    </section>
                </div>
                <div class="slide-block d-flex justify-content-center">
                    <section class="hero-block">
                        <!-- Background Image or Video -->
                        <div class="hero-bg">
                            <img src="https://ais.edu.kh/storage/photos/home/spd.png" alt="Hero Background">
                            <!-- Or you can replace <img> with <video> for autoplay background -->
                        </div>

                        <!-- Content -->
                        <div class="hero-content">
                            <h1>Early Childhood Program</h1>
                            <p>We cultivate children with compassion, dedicating time to cherish traditions while
                                preparing them
                                to be globally competitive and ready for a future on the world stage.</p>

                            <div class="hero-buttons">
                                <a href="#" class="btn btn-danger rounded-pill px-4">Admission</a>
                                <a href="#" class="btn btn-danger rounded-pill px-4">Explore All Campuses</a>
                            </div>

                            <div class="hero-events bg-danger text-white">
                                <span>UPCOMING EVENTS - Grade 12 Graduation : July 11, 2026</span>
                                <a href="#" class="view-calendar">View Calendar</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="hero-3">
            <div class="video-container">
                <iframe
                    style="width: 100%; aspect-ratio: 16/9; padding:0; margin:0;"
                    src="https://www.youtube.com/embed/tn4u8Ws8j6o?autoplay=1&mute=1&controls=0&loop=1&playlist=tn4u8Ws8j6o&modestbranding=1&rel=0"
                    title="Aii Language Center promotional video"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                ></iframe>

                <div class="overlay-content">
                    <div class="hero-content">
                        <h1>Quality. Discipline. Services</h1>
                        <p>We cultivate children with compassion, dedicating time to cherish traditions while preparing
                            them to
                            be globally competitive and ready for a future on the world stage.</p>

                        <div class="hero-buttons">
                            <a href="#" class="btn btn-danger rounded-pill px-4">Admission</a>
                            <a href="#" class="btn btn-danger rounded-pill px-4">Explore All Campuses</a>
                        </div>

                        <div class="hero-events bg-danger text-white">
                            <span>UPCOMING EVENTS - Grade 12 Graduation : July 11, 2026</span>
                            <a href="#" class="view-calendar">View Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section id="features" class="features d-flex align-items-center justify-content-center">
        <!-- Section Title -->
        <div class="container section-title " data-aos="fade-up">
            <h2>Programs</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container " data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="slide-card">
                        <a href="campuses/phsar-thmei.html">
                            <img src="https://picsum.photos/800/500?5">
                            <div class="slide-overlay">
                                <h4 class="slide-title">Pre School</h4>
                                <p class="slide-desc">
                                    Schools & Curriculum
                                    University Partners
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="slide-card">
                        <a href="campuses/phsar-thmei.html">
                            <img src="https://picsum.photos/800/500?5">
                            <div class="slide-overlay">
                                <h4 class="slide-title">ESL School</h4>
                                <p class="slide-desc">
                                    Proin eget tortor risus, sed porttitor lectus nibh.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-inline-grid gap-3">
                        <div class="slide-card">
                            <a href="campuses/phsar-thmei.html">
                                <img src="https://picsum.photos/800/500?5" class="img-fluid">
                                <div class="slide-overlay">
                                    <h4 class="slide-title">Junior School</h4>
                                    <p class="slide-desc">
                                        Schools & Curriculum
                                        University Partners
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="slide-card">
                            <a href="campuses/phsar-thmei.html">
                                <img src="https://picsum.photos/800/500?5" class="img-fluid">
                                <div class="slide-overlay">
                                    <h4 class="slide-title">Secondary School</h4>
                                    <p class="slide-desc">
                                        Schools & Curriculum
                                        University Partners
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center pt-5">
                <a class="btn btn-outline-danger rounded-pill px-4" href="academics/index.html">Read More →</a>
            </div>
        </div>

    </section>
    <section id="admissions" class="admissions">

        <div class="container " data-aos="fade-up" data-aos-delay="100">

            <div class="container campus-section text-center">

                <div class="row align-items-center">

                    <!-- Left side -->
                    <div class="col-md-3 d-flex flex-column gap-4">
                        <div class="campus-card"></div>
                        <div class="campus-card shadow"></div>
                    </div>

                    <!-- Map center -->
                    <div class="col-md-6 position-relative d-flex justify-content-center">


                        <a href="https://www.google.com/maps/d/u/0/embed?mid=12TjVVd4iAbXIDFsxYmBbxcABgQeMwjU&ehbc=2E312F&noprof=1"
                           target="_blank">
                            <img
                                src="https://png.pngtree.com/png-clipart/20230803/original/pngtree-cambodia-map-cut-land-khmer-vector-picture-image_9437021.png"
                                alt="AIS Campuses Map"
                                style="width: 18vw !important; cursor:pointer; border-radius:10px;">
                        </a>
                    </div>

                    <!-- Right side -->
                    <div class="col-md-3 d-flex flex-column gap-4">
                        <div class="campus-card"></div>
                        <div class="campus-card"></div>
                    </div>

                </div>

                <div class="mt-4">
                    <a href="campuses/index.html" class="btn btn-outline-danger rounded-pill px-4">
                        Explore All Campuses
                    </a>
                </div>

            </div>

        </div>

    </section>
    <section id="testimonial" class="testimonial pt-5">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-center pb-4">What Our Students Say</h2>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                    <div class="testimonial-card shadow-sm">

                        <!-- Header -->
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/100?img=12" class="rounded-circle me-3 testimonial-avatar">
                            <div>
                                <h5 class="mb-0 fw-bold">Robert Brown</h5>
                                <small class="text-muted">January 12, 2025</small>
                            </div>
                        </div>

                        <!-- Stars -->
                        <div class="stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>

                        <!-- Title -->
                        <div class="testimonial-title mb-2">
                            Good choice!
                        </div>

                        <!-- Description -->
                        <div class="testimonial-text">
                            The headphones are of good quality, fit perfectly and are very easy to pair with any device.
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                    <div class="testimonial-card shadow-sm">

                        <!-- Header -->
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/100?img=12" class="rounded-circle me-3 testimonial-avatar">
                            <div>
                                <h5 class="mb-0 fw-bold">Robert Brown</h5>
                                <small class="text-muted">January 12, 2025</small>
                            </div>
                        </div>

                        <!-- Stars -->
                        <div class="stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>

                        <!-- Title -->
                        <div class="testimonial-title mb-2">
                            Good choice!
                        </div>

                        <!-- Description -->
                        <div class="testimonial-text">
                            The headphones are of good quality, fit perfectly and are very easy to pair with any device.
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                    <div class="testimonial-card shadow-sm">

                        <!-- Header -->
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/100?img=12" class="rounded-circle me-3 testimonial-avatar">
                            <div>
                                <h5 class="mb-0 fw-bold">Robert Brown</h5>
                                <small class="text-muted">January 12, 2025</small>
                            </div>
                        </div>

                        <!-- Stars -->
                        <div class="stars mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>

                        <!-- Title -->
                        <div class="testimonial-title mb-2">
                            Good choice!
                        </div>

                        <!-- Description -->
                        <div class="testimonial-text">
                            The headphones are of good quality, fit perfectly and are very easy to pair with any device.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="student-life" class="features">

        <!-- Section Title -->
        <div class="container section-title pb-4 pt-5" data-aos="fade-up">
            <h2>Student Life</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container " data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="slide-card">
                        <a href="campuses/phsar-thmei.html">
                            <img src="https://picsum.photos/800/500?5">
                            <div class="slide-overlay">
                                <h4 class="slide-title">STEAM</h4>
                                <p class="slide-desc">
                                    Schools & Curriculum
                                    University Partners
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="slide-card">
                        <a href="campuses/phsar-thmei.html">
                            <img src="https://picsum.photos/800/500?5">
                            <div class="slide-overlay">
                                <h4 class="slide-title">Arts</h4>
                                <p class="slide-desc">
                                    Proin eget tortor risus, sed porttitor lectus nibh.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-inline-grid gap-3">
                        <div class="slide-card">
                            <a href="campuses/phsar-thmei.html">
                                <img src="https://picsum.photos/800/500?5" class="img-fluid">
                                <div class="slide-overlay">
                                    <h4 class="slide-title">Sport</h4>
                                    <p class="slide-desc">
                                        Schools & Curriculum
                                        University Partners
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="slide-card">
                            <a href="campuses/phsar-thmei.html">
                                <img src="https://picsum.photos/800/500?5" class="img-fluid">
                                <div class="slide-overlay">
                                    <h4 class="slide-title">Competitions</h4>
                                    <p class="slide-desc">
                                        Schools & Curriculum
                                        University Partners
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center pt-5">
                <a class="btn btn-outline-danger rounded-pill px-4" href="student-life.html">Read More →</a>
            </div>
        </div>

    </section>
    <section id="admission-process" class="admission-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="admission-process-list">
                        <div class="admission-process-item">
                            <div class="admission-process-count">01</div>
                            <h4>Admission Process</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.</p>
                            <div class="admission-process-count">02</div>
                            <h4>Admission Process</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.</p>
                            <div class="admission-process-count">03</div>
                            <h4>Admission Process</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="admission-process-img slide-card">
                        <img src="https://www.ais.edu.kh//storage/photos/article/12.webp"
                             class="img-fluid" alt="" style="width: 100% !important;border-radius: 10px; height: 40vh;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">

            <div class="hero-slide" id="hero-slide">

                <div class="slide-card">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="slide-card">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                frameborder="0"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="slide-card">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/ysz5S6PUM-U"
                                frameborder="0"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="slide-card">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/jNQXAC9IVRw"
                                frameborder="0"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center pt-3">
                <a class="btn btn-outline-danger rounded-pill px-4" href="admission-process.html">Read More →</a>
            </div>

        </div>

    </section>
    <section id="recent-news" class="recent-news">

        <!-- Section Title -->
        <div class="container section-title pt-5">
            <h2>Recent News</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-3 col-md-6">
                    <div class="post-box">
                        <div class="post-img"><img
                                src="https://bootstrapmade.com/content/demo/MySchool/assets/img/blog/blog-post-1.webp"
                                class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, December 12</span>
                            <span class="post-author"> / Julia Parker</span>
                        </div>
                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                        <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores
                            eum ipsa est officiis. Modi qui magni est...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="post-box">
                        <div class="post-img"><img
                                src="https://bootstrapmade.com/content/demo/MySchool/assets/img/blog/blog-post-2.webp"
                                class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Fri, September 05</span>
                            <span class="post-author"> / Mario Douglas</span>
                        </div>
                        <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
                        <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda.
                            Quisquam omnis doloribus...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="post-box">
                        <div class="post-img"><img
                                src="https://bootstrapmade.com/content/demo/MySchool/assets/img/blog/blog-post-3.webp"
                                class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, July 27</span>
                            <span class="post-author"> / Lisa Hunter</span>
                        </div>
                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                        <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores
                            eum ipsa est officiis. Modi qui magni est...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="post-box">
                        <div class="post-img"><img
                                src="https://bootstrapmade.com/content/demo/MySchool/assets/img/blog/blog-post-4.webp"
                                class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, Sep 16</span>
                            <span class="post-author"> / Mario Douglas</span>
                        </div>
                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                        <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores
                            eum ipsa est officiis. Modi qui magni est...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <section id="events" class="events pb-4">

        <!-- Section Title -->
        <div class="container section-title pt-5">
            <h2>Events</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">


            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="month">FEB</span>
                            <span class="day">15</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-tag academic">Academic</div>
                            <h3>Science Fair Exhibition</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>09:00 AM - 03:00 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Main Auditorium</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="month">MAR</span>
                            <span class="day">10</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-tag sports">Sports</div>
                            <h3>Annual Sports Day</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi.</p>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>08:30 AM - 05:00 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>School Playground</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="month">MAR</span>
                            <span class="day">10</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-tag sports">Sports</div>
                            <h3>Annual Sports Day</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi.</p>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>08:30 AM - 05:00 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>School Playground</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="month">MAR</span>
                            <span class="day">10</span>
                            <span class="year">2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-tag sports">Sports</div>
                            <h3>Annual Sports Day</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi.</p>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>08:30 AM - 05:00 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>School Playground</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-outline-danger rounded-pill px-4">View All Events</a>
                </div>

            </div>
            <div class="full-canlendar">
                <div id="calendar">

                </div>
            </div>

            <!--            <div class="text-center mt-5">-->
            <!--                <a href="#" class="button_red">View All Events</a>-->
            <!--            </div>-->

        </div>

    </section>

@endsection
</body>

@section('scripts')

    <script>
        $('#hero-slide').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $(document).ready(function () {
            $('#single-item').slick({
                slidesToShow: 1,      // Show only 1 slide at a time
                slidesToScroll: 1,
                dots: true,            // Navigation dots
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000
            });
        });
    </script>

@endsection

</html>
