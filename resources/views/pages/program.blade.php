@extends('master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admission.css') }}">
@endsection
@section('content')

    <section class="hero">
        <div class="container"><h1>AIS School Bus – Premium Transportation</h1>
            <p class="lead">Safe, reliable, and technology-enabled student transport.</p></div>
    </section>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Features</h2>
                    <ul class="ticks">
                        <li>GPS tracking with parent app</li>
                        <li>Certified drivers and CCTV security</li>
                        <li>Air-conditioned fleet</li>
                        <li>200+ routes serving all campuses</li>
                    </ul>
                    <h3>Safety & Policies</h3>
                    <p>Clear protocols, trained staff, and regular audits.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img style="width: 400px;
           border-radius: 14px;"
                         src="https://tsk.ais.edu.kh/storage/photos/article/Parts%20of%20TSK%20Website/IMG_3134.jpg"
                    >
                </div>
            </div>
            <div class="description">
                Intercon Transportation Services (ITS) has been established since 2005. Our main office is at Mao Tse
                Tong
                Campus. During its first operation, ITS had only three school buses. Between 2005 and 2007, free
                transportation was provided for two enrolled students who came at the time. In 2008, the number of
                students
                receiving school transportation services increased, and the number of our school buses also increased to
                30
                is fully committed to provide a professional transportation service to our students. We truly believe
                that
                our service will assure safe and efficient pupil transportation. At present, ITS has 52 school buses to
                ensure the safety for our students and to make it more convenient for the busy parents.
            </div>
        </div>
    </section>

@endsection
