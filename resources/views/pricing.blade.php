@extends('layouts.main')

@section('content')

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-area bg-f round-20 position-relative z-1">
                    <div class="container text-center">
                        <ul class="br-menu text-center bg_secondary d-inline-block list-unstyled mb-15">
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block"><a href="{{ route('home') }}">HOME</a></li>
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">PRICING PLAN</li>
                        </ul>
                        <h2 class="section-title style-one fw-medium font-secondary text-black text-center mb-6">Pricing Plan</h2>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Pricing Section Start -->
                <div class="pricing-area position-relative z-1 pt-50 pb-100" style="background-image: url('{{ asset('assets/img/breadcrumb/br-bg-1.png') }}'); background-size: cover; background-position: center;">
                    <div class="container style-one">
                        <div class="row text-center mb-50">
                            <div class="col-12">
                                <span class="section-subtitle fs-13 fw-semibold ls-15 d-inline-block text_primary round-oval mb-15" data-cue="slideInUp">PRICING PLANS</span>
                                <h2 class="section-title style-one font-secondary fw-medium mb-20" data-cue="slideInUp" data-delay="300">Simple Plans That Grow With You</h2>
                                <p class="text-para mb-10" data-cue="slideInUp" data-delay="400">Nextaflow gives you everything you need to run your business in one system.<br>Choose a plan that fits where you are today.<br>You can upgrade or change anytime.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center gx-xl-4">
                            <!-- Starter Plan -->
                            <div class="col-lg-4 col-md-6 mb-30" data-cue="slideInUp">
                                <div class="pricing-card bg-white round-10 p-4 h-100 d-flex flex-column">
                                    <div class="pricing-icon mb-3">
                                        <span class="fs-40">🌱</span>
                                    </div>
                                    <h3 class="fs-24 fw-semibold text-title mb-2">STARTER</h3>
                                    <p class="text-para fs-15 mb-3">Best for new and small businesses</p>
                                    <h2 class="font-secondary fw-bold text_primary mb-3">$97 <span class="fs-16 fw-medium text-para">/ month</span></h2>
                                    <div class="pricing-features mb-4 flex-grow-1">
                                        <p class="fw-semibold mb-3">What you get:</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Lead capture forms</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>One inbox for messages</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Appointment booking</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Basic automation</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Mobile app access</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Email & chat support</li>
                                        </ul>
                                    </div>
                                    <p class="text-para fs-14 mb-3"><em>Perfect if you are just getting started.</em></p>
                                    <a href="{{ config('services.ghl.links.starter', route('contact', ['plan' => 'Starter'])) }}" class="btn style-three fw-semibold position-relative round-oval w-100">👉 Start With Starter<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                </div>
                            </div>
                            
                            <!-- Growth Plan -->
                            <div class="col-lg-4 col-md-6 mb-30" data-cue="slideInUp" data-delay="200">
                                <div class="pricing-card bg-white round-10 p-4 h-100 d-flex flex-column position-relative">
                                    <span class="badge bg_primary text-white position-absolute top-0 end-0 m-3 fs-13">POPULAR</span>
                                    <div class="pricing-icon mb-3">
                                        <span class="fs-40">🚀</span>
                                    </div>
                                    <h3 class="fs-24 fw-semibold text-title mb-2">GROWTH</h3>
                                    <p class="text-para fs-15 mb-3">Best for growing businesses</p>
                                    <h2 class="font-secondary fw-bold text_primary mb-3">$197 <span class="fs-16 fw-medium text-para">/ month</span></h2>
                                    <div class="pricing-features mb-4 flex-grow-1">
                                        <p class="fw-semibold mb-3">Everything in Starter, plus:</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Advanced automation</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Follow-up sequences</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Funnels & landing pages</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Pipeline and lead tracking</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Reporting and insights</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Priority support</li>
                                        </ul>
                                    </div>
                                    <p class="text-para fs-14 mb-3"><em>Best choice for steady growth.</em></p>
                                    <a href="{{ config('services.ghl.links.growth', route('contact', ['plan' => 'Growth'])) }}" class="btn style-three fw-semibold position-relative round-oval w-100">👉 Choose Growth Plan<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                </div>
                            </div>
                            
                            <!-- Pro Plan -->
                            <div class="col-lg-4 col-md-6 mb-30" data-cue="slideInUp" data-delay="400">
                                <div class="pricing-card bg-white round-10 p-4 h-100 d-flex flex-column">
                                    <div class="pricing-icon mb-3">
                                        <span class="fs-40">🔥</span>
                                    </div>
                                    <h3 class="fs-24 fw-semibold text-title mb-2">PRO</h3>
                                    <p class="text-para fs-15 mb-3">Best for serious growth and teams</p>
                                    <h2 class="font-secondary fw-bold text_primary mb-3">$297 <span class="fs-16 fw-medium text-para">/ month</span></h2>
                                    <div class="pricing-features mb-4 flex-grow-1">
                                        <p class="fw-semibold mb-3">Everything in Growth, plus:</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>AI-powered replies</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Multi-channel messaging (SMS, WhatsApp, socials)</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Team access & roles</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Advanced workflows</li>
                                            <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Custom setup support</li>
                                        </ul>
                                    </div>
                                    <p class="text-para fs-14 mb-3"><em>Built for businesses ready to scale.</em></p>
                                    <a href="{{ config('services.ghl.links.pro', route('contact', ['plan' => 'Pro'])) }}" class="btn style-three fw-semibold position-relative round-oval w-100">👉 Go Pro With Nextaflow<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                </div>
                            </div>
                        </div>
                        

                <!-- Done-For-You Setup Section -->
                <div class="container style-one ptb-100">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-30">
                            <span class="section-subtitle style-one fw-semibold d-inline-block bg_primary text-white round-oval mb-15">DONE-FOR-YOU SETUP (OPTIONAL)</span>
                            <h2 class="section-title style-one fw-medium text-title mb-20">Want us to set everything up for you?</h2>
                            <h4 class="fs-20 fw-bold text_primary mb-20">One-time setup: from $500</h4>
                            <p class="mb-20">No tech stress. We handle the hard part.</p>
                            <a href="{{ route('contact') }}" class="btn style-two fw-semibold position-relative round-oval">👉 Let Nextaflow Set This Up for Me<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                        </div>
                        <div class="col-lg-6 mb-30">
                            <div class="bg-f round-10 p-4">
                                <h4 class="fs-18 fw-semibold mb-15">We help you:</h4>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center"><i class="ri-checkbox-circle-fill text_primary me-2"></i> Connect all channels</li>
                                    <li class="mb-2 d-flex align-items-center"><i class="ri-checkbox-circle-fill text_primary me-2"></i> Build your automations</li>
                                    <li class="mb-2 d-flex align-items-center"><i class="ri-checkbox-circle-fill text_primary me-2"></i> Test everything</li>
                                    <li class="mb-0 d-flex align-items-center"><i class="ri-checkbox-circle-fill text_primary me-2"></i> Go live faster</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing Section End -->

@endsection