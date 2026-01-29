@extends('layouts.main')

@section('content')

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-area bg-f round-20 position-relative z-1">
                    <div class="container text-center">
                        <ul class="br-menu text-center bg_secondary d-inline-block list-unstyled mb-15">
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block"><a href="{{ route('home') }}">HOME</a></li>
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">ABOUT US</li>
                        </ul>
                        <h2 class="section-title style-one fw-medium font-secondary text-black text-center mb-6">About Us</h2>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- About us Section Start -->
                <div class="about-area style-four overflow-hidden ptb-130">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-5 col-lg-6">
                                <div class="about-img-wrap position-relative mb-md-30">
                                    <img src="{{ asset('assets/img/about/about-img-1.png') }}" alt="Image" class="about-img position-absolute rotate">
                                    <img src="{{ asset('assets/img/about/about-shape-3.png') }}" alt="Shape" class="about-img-shape mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-6 ps-xl-4 pe-xxl-5">
                                <div class="about-content position-relative">

                                    <span class="section-subtitle style-two d-inline-block text_primary fw-bold fs-14 ls-15 mb-12" data-cue="slideInUp">ABOUT US</span>
                                    <h2 class="section-title style-four font-secondary fw-medium text-title mb-20">We Help Small Businesses Grow Without Stress</h2>
                                    <p class="fs-18 fw-medium text_primary mb-20">Nextaflow was built for people who work hard and want their business to work hard too.</p>
                                    <p class="mb-20">We saw many business owners doing everything right posting online, answering messages, running ads but still feeling tired, overwhelmed, and stuck. Not because they were lazy, but because they were doing too much alone.</p>
                                    
                                    <h4 class="fw-semibold text-title mb-15">So we built Nextaflow.</h4>
                                    <p class="mb-25">Nextaflow is a simple system that helps your business reply faster, follow up better, and book more customers without you chasing people all day.</p>
                                    
                                    <div class="bg-gray round-10 p-4 mb-30">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3 d-flex align-items-start"><i class="ri-checkbox-circle-fill text_primary me-2 mt-1"></i> We believe growth should feel calm, not stressful.</li>
                                            <li class="mb-3 d-flex align-items-start"><i class="ri-checkbox-circle-fill text_primary me-2 mt-1"></i> We believe technology should help you, not confuse you.</li>
                                            <li class="d-flex align-items-start"><i class="ri-checkbox-circle-fill text_primary me-2 mt-1"></i> And we believe every business deserves a system that works quietly in the background.</li>
                                        </ul>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About us Section End -->

                <div class="move-text-wrapper overflow-hidden mb-120">
                    <div class="move-text style-seven position-relative z-1">
                        <ul class="list-unstyled mb-0">
                            <li class="position-relative font-secondary fw-normal">AN AI-FIRST PLATFORM BUILT TO AUTOMATE, ANALYZE, AND ACCELERATE YOUR BUSINESS OPERATIONS </li>
                            <li class="position-relative font-secondary fw-normal">AN AI-FIRST PLATFORM BUILT TO AUTOMATE, ANALYZE, AND ACCELERATE YOUR BUSINESS OPERATIONS </li>
                            <li class="position-relative font-secondary fw-normal">AN AI-FIRST PLATFORM BUILT TO AUTOMATE, ANALYZE, AND ACCELERATE YOUR BUSINESS OPERATIONS </li>
                        </ul>
                    </div>
                </div>

                <!-- Feature Section Start -->
                <div class="container style-one mb-130">
                    <div class="row">
                        <div class="col-xxl-6 col-lg-7 mb-md-30">
                            <div class="row">
                                <div class="col-md-6" data-cue="slideInUp">
                                    <div class="feature-card style-three mb-45">
                                        <img src="{{ asset('assets/img/features/automation.svg') }}" alt="Icon" class="feature-icon">
                                        <h3 class="fs-20 fw-semibold text-title">Automation</h3>
                                        <p class="mb-0">Smart Systems That Close Deals While You Sleep</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-cue="slideInUp">
                                    <div class="feature-card style-three mb-45">
                                        <img src="{{ asset('assets/img/features/system-integration.svg') }}" alt="Icon" class="feature-icon">
                                        <h3 class="fs-20 fw-semibold text-title">AI Solutions</h3>
                                        <p class="mb-0">Intelligent Bots That Handle Customer Conversations 24/7.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-cue="slideInUp">
                                    <div class="feature-card style-three mb-30">
                                        <img src="{{ asset('assets/img/features/analytics.svg') }}" alt="Icon" class="feature-icon">
                                        <h3 class="fs-20 fw-semibold text-title">Advertising</h3>
                                        <p class="mb-0">Scroll-Stopping Ads That Convert into Sales</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-cue="slideInUp">
                                    <div class="feature-card style-three mb-30">
                                        <img src="{{ asset('assets/img/features/modular-design.svg') }}" alt="Icon" class="feature-icon">
                                        <h3 class="fs-20 fw-semibold text-title">Lead Generation</h3>
                                        <p class="mb-0">Predictable, Qualified Leads Every Week.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 offset-xxl-1 col-lg-5 ps-xxl-4 pe-xxl-0">
                            <span class="section-subtitle style-three fs-14 fw-bold ls-15 d-inline-block text_primary mb-15" data-cue="slideInUp">OUR CORE SERVICES</span>
                            <h2 class="section-title style-one fw-medium text-title mb-20" data-cue="slideInUp" data-delay="400">Comprehensive AI & Automation Solutions</h2>
                            <img src="{{ asset('assets/img/features/feature-6.png') }}" alt="Image" class="feature-img d-block ms-auto" data-cue="slideInUp">
                        </div>
                    </div>
                </div>
                <!-- Feature Section End -->

@endsection