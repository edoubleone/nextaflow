@extends('layouts.main')

@section('content')

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-area bg-f round-20 position-relative z-1">
                    <div class="container text-center">
                        <ul class="br-menu text-center bg_secondary d-inline-block list-unstyled mb-15">
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block"><a href="{{ route('home') }}">HOME</a></li>
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">SERVICES</li>
                        </ul>
                        <h2 class="section-title style-one fw-medium font-secondary text-black text-center mb-6">Services</h2>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Service Section Start -->
                  <div class="service-area style-one position-relative z-1 pt-130 pb-100">
                    <div class="container position-relative z-1">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2 col-md-6 offset-md-3 text-center">
                                <span class="section-subtitle style-one fw-semibold d-inline-block bg_primary text-white round-oval mb-15">Our Services</span>
                                <h2 class="section-title style-one fw-medium text-title mb-40">The All-In-One Growth Engine to Automate, Advertise, and Scale Your Business</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-xxl-5 position-relative z-1">
                        <div class="row justify-content-center gx-xl-3">
                            <!-- CRM & PIPELINE -->
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="feature-card style-one bg-white round-10 mb-30 h-100">
                                    <div class="feature-img d-flex flex-column align-items-center justify-content-center round-10 mb-4">
                                        <img src="{{ asset('assets/img/services/service-icon-7.png') }}" alt="CRM Icon" class="d-block mx-auto">
                                    </div>
                                    <div class="feature-info">
                                        <h3 class="font-secondary fw-medium text-title mb-2">CRM & PIPELINE</h3>
                                        <h4 class="fs-18 fw-semibold text_primary mb-3">Know Who Your Customers Are and What They Need</h4>
                                        <p class="mb-3">Nextaflow keeps all your customer details in one place. You can see:</p>
                                        <ul class="list-unstyled mb-3 ps-3">
                                            <li>• New leads</li>
                                            <li>• Ongoing conversations</li>
                                            <li>• Booked clients</li>
                                            <li>• Follow-ups</li>
                                        </ul>
                                        <p class="mb-4 fw-medium">Nothing gets lost. Nothing is forgotten.</p>
                                        <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval btn-sm">Book a Demo<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- CONVERSATIONS (INBOX) -->
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="feature-card style-one bg-white round-10 mb-30 h-100">
                                    <div class="feature-img d-flex flex-column align-items-center justify-content-center round-10 mb-4">
                                        <img src="{{ asset('assets/img/services/service-icon-3.webp') }}" alt="Inbox Icon" class="d-block mx-auto">
                                    </div>
                                    <div class="feature-info">
                                        <h3 class="font-secondary fw-medium text-title mb-2">🟢 CONVERSATIONS (INBOX)</h3>
                                        <h4 class="fs-18 fw-semibold text_primary mb-3">One Inbox for All Your Messages</h4>
                                        <p class="mb-3">Nextaflow brings your messages together.<br>Email, SMS, WhatsApp, Instagram, and Facebook all in one inbox.</p>
                                        <p class="mb-4 fw-medium">Reply faster. Look professional. Never miss a lead again.</p>
                                        <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval btn-sm">Book a Demo<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- AUTOMATION -->
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="feature-card style-one bg-white round-10 mb-30 h-100">
                                    <div class="feature-img d-flex flex-column align-items-center justify-content-center round-10 mb-4">
                                        <img src="{{ asset('assets/img/services/automation.jpg') }}" alt="Automation Icon" class="d-block mx-auto">
                                    </div>
                                    <div class="feature-info">
                                        <h3 class="font-secondary fw-medium text-title mb-2">🟢 AUTOMATION</h3>
                                        <h4 class="fs-18 fw-semibold text_primary mb-3">Let Nextaflow Work for You</h4>
                                        <p class="mb-3">Nextaflow sends messages automatically at the right time. It can:</p>
                                        <ul class="list-unstyled mb-3 ps-3">
                                            <li>• Welcome new leads</li>
                                            <li>• Follow up when people don’t reply</li>
                                            <li>• Send reminders</li>
                                            <li>• Answer simple questions</li>
                                        </ul>
                                        <p class="mb-4 fw-medium">Your business keeps running even when you’re busy.</p>
                                        <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval btn-sm">Book a Demo<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- CALENDAR & BOOKING -->
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="feature-card style-one bg-white round-10 mb-30 h-100">
                                    <div class="feature-img d-flex flex-column align-items-center justify-content-center round-10 mb-4">
                                        <img src="{{ asset('assets/img/services/service-icon-8.webp') }}" alt="Calendar Icon" class="d-block mx-auto">
                                    </div>
                                    <div class="feature-info">
                                        <h3 class="font-secondary fw-medium text-title mb-2">🟢 CALENDAR & BOOKING</h3>
                                        <h4 class="fs-18 fw-semibold text_primary mb-3">Let Customers Book for Themselves</h4>
                                        <p class="mb-3">Nextaflow makes booking easy.<br>Customers choose a time.<br>Nextaflow sends reminders.</p>
                                        <p class="mb-4 fw-medium">You stay in control. Fewer no-shows. Less back and forth.</p>
                                        <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval btn-sm">Book a Demo<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- FUNNELS, FORMS & PAGES -->
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="feature-card style-one bg-white round-10 mb-30 h-100">
                                    <div class="feature-img d-flex flex-column align-items-center justify-content-center round-10 mb-4">
                                        <img src="{{ asset('assets/img/services/service-icon-5.webp') }}" alt="Funnels Icon" class="d-block mx-auto">
                                    </div>
                                    <div class="feature-info">
                                        <h3 class="font-secondary fw-medium text-title mb-2">🟢 FUNNELS, FORMS & PAGES</h3>
                                        <h4 class="fs-18 fw-semibold text_primary mb-3">Turn Visitors Into Customers</h4>
                                        <p class="mb-3">Nextaflow helps you guide people step by step.<br>From interest → to message → to booking.</p>
                                        <p class="mb-4 fw-medium">Simple pages. Clear forms. Better results.</p>
                                        <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval btn-sm">Book a Demo<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- MOBILE APP -->
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="feature-card style-one bg-white round-10 mb-30 h-100">
                                    <div class="feature-img d-flex flex-column align-items-center justify-content-center round-10 mb-4">
                                        <img src="{{ asset('assets/img/services/service-icon-1.webp') }}" alt="Mobile App Icon" class="d-block mx-auto">
                                    </div>
                                    <div class="feature-info">
                                        <h3 class="font-secondary fw-medium text-title mb-2">🟢 MOBILE APP</h3>
                                        <h4 class="fs-18 fw-semibold text_primary mb-3">Run Your Business From Anywhere</h4>
                                        <p class="mb-3">Nextaflow works on your phone.<br>Check messages.<br>See bookings.<br>Track leads.</p>
                                        <p class="mb-4 fw-medium">Your business stays with you wherever you go.</p>
                                        <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval btn-sm">Book a Demo<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- REPORTING & TRACKING -->
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="feature-card style-one bg-white round-10 mb-30 h-100">
                                    <div class="feature-img d-flex flex-column align-items-center justify-content-center round-10 mb-4">
                                        <img src="{{ asset('assets/img/services/analytics.webp') }}" alt="Reporting Icon" class="d-block mx-auto">
                                    </div>
                                    <div class="feature-info">
                                        <h3 class="font-secondary fw-medium text-title mb-2">🟢 REPORTING & TRACKING</h3>
                                        <h4 class="fs-18 fw-semibold text_primary mb-3">See What’s Working</h4>
                                        <p class="mb-3">Nextaflow shows you what’s happening in your business. You can see:</p>
                                        <ul class="list-unstyled mb-3 ps-3">
                                            <li>• New leads</li>
                                            <li>• Messages sent</li>
                                            <li>• Appointments booked</li>
                                        </ul>
                                        <p class="mb-4 fw-medium">No guessing. Just clarity.</p>
                                        <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval btn-sm">Book a Demo<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cta-area style-three bg-f position-relative z-1 ptb-130 round-20">
                    <div class="container style-one">
                        <div class="row align-items-center">
                            <div class="col-xxl-5 col-md-6 pe-xxl-5 mb-md-30">
                                <span class="section-subtitle style-three fs-14 fw-bold ls-15 d-inline-block text_primary mb-15">Ready to Work Smarter, Not Harder</span>
                                <h2 class="section-title style-one text-title fw-medium mb-0"> Let’s build your custom AI system and automate your business growth.</h2>
                            </div>
                            <div class="col-xxl-6 offset-xxl-1 col-md-6">
                                <div class="circle-text-wrap rounded-circle position-relative ms-md-auto">
                                    <span class="bg_primary position-absolute d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                                        <img src="{{ asset('assets/img/icons/up-right-arrow-white.svg') }}" alt="Icon" class="transition">
                                    </span>
                                    <img src="{{ asset('assets/img/request-demo.svg') }}" alt="Text Image" class="circle-text d-block mx-auto rotate">
                                    <a href="{{ route('contact') }}" class="position-absolute top-0 start-0 w-100 h-100 z-1"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Section End -->

@endsection