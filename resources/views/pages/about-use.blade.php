@extends('master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admission.css') }}">
    <style>
        .about-section {
            background-color: #f5f5f5;
            border-radius: 15px;
            padding: 40px;
        }

        .about-title {
            font-weight: 700;
            font-size: 28px;
        }

        .about-text {
            color: #555;
        }

        .check-list li {
            margin-bottom: 10px;
            color: #333;
        }

        .check-list li::before {
            content: "✔";
            color: #6c63ff;
            margin-right: 10px;
        }



        .image-card {
            border-radius: 15px;
            overflow: hidden;
        }

        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .newsletter-box {
            background-color: #8b3f45;
            border-radius: 25px;
        }

        .newsletter-form {
            background: #a8575c;
            padding: 5px;
            border-radius: 50px;
        }

        .email-input {
            border: none;
            border-radius: 50px;
            padding: 10px 15px;
            background: transparent;
            color: #fff;
        }

        .email-input::placeholder {
            color: #f1caca;
        }

        .email-input:focus {
            box-shadow: none;
            background: transparent;
            color: #fff;
        }

        .subscribe-btn {
            background-color: #a8e6a3;
            border-radius: 50px;
            padding: 8px 20px;
            border: none;
            font-weight: 500;
        }

        .subscribe-btn:hover {
            background-color: #8fd98a;
        }
    </style>
@endsection
@section('content')

    <section id="about-us" class="about-us">
        <div class="container my-5">
            <div class="about-section">
                <div class="row align-items-center">

                    <!-- Left Content -->
                    <div class="col-lg-6">
                        <h2 class="about-title">About AIS</h2>
                        <p class="about-text">
                            American Intercon School (AIS) empowers students through strong academics,
                            leadership, and community service across Cambodia. Accredited programs,
                            modern facilities, and a vibrant learning culture.
                        </p>

                        <ul class="list-unstyled check-list">
                            <li>Mission-driven and values-based</li>
                            <li>International-standard curriculum</li>
                            <li>Strong alumni and industry partnerships</li>
                        </ul>

                        <a href="#" class="btn btn-danger rounded-pill px-4">Learn More</a>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="image-card shadow">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPoXgYLikHHorZ4GpMAQH5jYFB7C3lt4XNlQ&s" alt="AIS Campus">
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container pb-5">
            <div class="newsletter-box p-md-5 ms-auto" style="max-width: 800px;">
                <div class="row align-items-center">

                    <!-- Left Content -->
                    <div class="col-lg-6 text-white">
                        <h3 class="fw-bold">Subscribe our<br>newsletter</h3>
                        <p class="small mt-3">
                            Subscribe to our newsletter and be the first to receive insights,
                            updates, and expert tips on optimizing your financial management.
                        </p>
                    </div>

                    <!-- Right Form -->
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <p class="text-white small mb-2">Stay up to date</p>
                        <form class="d-flex newsletter-form">
                            <input type="email" class="form-control email-input"
                                   placeholder="Enter your email">
                            <button class="btn subscribe-btn ms-2">Subscribe</button>
                        </form>
                        <p class="text-white small mt-2 opacity-75">
                            By subscribing you agree to our <a href="#" class="text-white text-decoration-underline">Privacy Policy</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
