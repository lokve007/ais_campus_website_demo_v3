@extends('master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admission.css') }}">
@endsection
@section('content')

    <section id="admissions" class="admissions section">

        <div class="container " data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                    <div class="application-steps">
                        <h3 class="section-subtitle">How to Apply</h3>
                        <div class="steps-wrapper">
                            <div class="step-item">
                                <div class="step-number">01</div>
                                <div class="step-content">
                                    <h4>Submit Application</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                </div>
                            </div>
                            <div class="step-item">
                                <div class="step-number">02</div>
                                <div class="step-content">
                                    <h4>Send Documents</h4>
                                    <p>Aenean quis feugiat ligula. Duis hendrerit felis id aliquet cursus. Vestibulum
                                        vel ipsum eu magna blandit volutpat.</p>
                                </div>
                            </div>
                            <div class="step-item">
                                <div class="step-number">03</div>
                                <div class="step-content">
                                    <h4>Interview Process</h4>
                                    <p>Pellentesque diam tellus, scelerisque quis sodales vel, dignissim eu justo.
                                        Mauris dictum felis non arcu ullamcorper.</p>
                                </div>
                            </div>
                            <div class="step-item">
                                <div class="step-number">04</div>
                                <div class="step-content">
                                    <h4>Decision Letter</h4>
                                    <p>Curabitur vulputate tellus sapien, id ultrices libero egestas ac. Sed in
                                        vestibulum dui, ac consequat enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                    <div class="requirements-card">
                        <h3 class="section-subtitle">Admission Requirements</h3>
                        <ul class="requirements-list">
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Completed Application Form</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Official High School Transcripts</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>SAT or ACT Scores (Optional for 2024-2025)</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Two Letters of Recommendation</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Personal Essay (500-650 words)</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Application Fee ($65 non-refundable)</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Interview (for selected programs only)</span>
                            </li>
                        </ul>
                        <div class="special-note">
                            <i class="bi bi-info-circle"></i>
                            <p>International students require additional documentation including TOEFL/IELTS scores and
                                visa information.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>
@endsection
