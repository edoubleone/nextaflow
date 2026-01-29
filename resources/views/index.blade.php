@extends('layouts.main')

@section('content')

                <!-- Hero Section Start -->
                <div class="hero-area style-three bg-f">
                    <div class="container-fluid position-relative z-1">
                        <div class="row align-items-xxl-start align-items-center">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <h6 class="section-subtitle d-inline-block fs-13 fw-semibold ls-1 bg_secondary text-black round-oval" data-cue="slideInUp" data-delay="100">REVOLUTIONIZE YOUR MARKETING STRATEGY</h6>
                                    <h1 class="font-secondary fw-normal text-black" data-cue="slideInUp" data-delay="400">Ignite REAL Business Growth with <span class="fw-bold">Nextaflow</span></h1>
                                    <p>Nextaflow provides support and strength to over a thousand small businesses. Is your business next?
</p>
                                    <div class="btn-wrap" data-cue="slideInUp" data-delay="600">
                                        <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval">Get A Free Consultation<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                        <a href="{{ route('services') }}" class="btn style-four fw-semibold position-relative round-oval">Explore Our Solutions<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-black.svg') }}" alt="Icon"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-img-wrap position-relative z-1">
                                    <img src="{{ asset('assets/img/hero/half-circle.png') }}" alt="Shape" class="half-circle position-absolute rotate">
                                    <img src="{{ asset('assets/img/hero/hero-img-3.png') }}" alt="Image" class="d-block me-auto moveContent">
                                </div>
                            </div>
                        </div>
                        <ul class="social-profile list-unstyled mb-0">
                            <li><a href="https://x.com/edoubleoneinc?t=lrNy6KIiT9EGCUUO2fVenw&s=09" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle">X (TWITTER)</a></li>
                            <li><a href="https://www.instagram.com/edoubleoneinc?igsh=MWFhanV0YWh6eXM2aQ==" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle">INSTAGRAM</a></li>
                            <li><a href="https://www.linkedin.com/company/e-double-one-inc/" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle">LINKEDIN</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Hero Section End -->


                <!-- About Us Section Start -->
                <div class="about-area ptb-130">
                    <div class="container style-one">
                        <div class="row align-items-center">
                           
                            <div class="col-lg-6 ps-xxl-3">
                                <div class="platform-content" data-cue="slideInUp">
                                    <span class="section-subtitle style-two fs-13 fw-medium ls-1 d-inline-block bg_secondary text-title round-oval mb-15" data-cue="slideInUp"><img src="{{ asset('assets/img/icons/lock.svg') }}" alt="Icon">ABOUT US</span>
                                    <h2 class="section-title style-one text-title fw-medium mb-20" data-cue="slideInUp" data-delay="300">We Help Small Businesses Grow Without Stress</h2>
                                    
                                    <p class="mb-15 fs-18 fw-medium text_primary">Nextaflow was built for people who work hard and want their business to work hard too.</p>
                                    <p class="mb-25">We saw many business owners doing everything right posting online, answering messages, running ads but still feeling tired, overwhelmed, and stuck. Not because they were lazy, but because they were doing too much alone.</p>
                                    
                                    <h4 class="fw-semibold text-title mb-15">So we built Nextaflow.</h4>
                                    <p class="mb-30">Nextaflow is a simple system that helps your business reply faster, follow up better, and book more customers without you chasing people all day.</p>
                                    
                                    <div class="bg-gray round-10 p-4 mb-30">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3 d-flex align-items-start"><i class="ri-checkbox-circle-fill text_primary me-2 mt-1"></i> We believe growth should feel calm, not stressful.</li>
                                            <li class="mb-3 d-flex align-items-start"><i class="ri-checkbox-circle-fill text_primary me-2 mt-1"></i> We believe technology should help you, not confuse you.</li>
                                            <li class="d-flex align-items-start"><i class="ri-checkbox-circle-fill text_primary me-2 mt-1"></i> And we believe every business deserves a system that works quietly in the background.</li>
                                        </ul>
                                    </div>

                                    <!-- <h3 class="fw-bold text_primary lh-base fs-20">Nextaflow is not just software.<br>It is a smart helper for your business.</h3> -->
                                </div>
                            </div>

                             <div class="col-lg-6 pe-xxl-5">
                                <div class="platform-img round-10 pe-xxl-2 mb-md-30" data-cue="slideInUp">
                                    <img src="{{ asset('assets/img/about/platform-1.png') }}" alt="Image" class="tilt-img round-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Us Section End -->

                

                <!-- Funfact Section Start -->
                <!-- <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 px-lg-0">
                            <div class="counter-card-wrap style-one d-flex flex-wrap">
                                <div class="counter-card style-three" data-cue="slideInUp">
                                    <div class="counter-video bg-f position-relative">
                                       <a data-fslightbox="video1" href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="play-video d-flex flex-wrap align-items-center justify-content-center">
                                            <span class="play-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary"><i class="ri-play-large-fill"></i></span>
                                            <span class="play-text fs-xxl-18 fw-semibold text-white ls-1">PLAY VIDEO</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="counter-card style-three d-flex flex-column align-items-start justify-content-center" data-cue="slideInUp">
                                    <h4 class="font-secondary fw-semibold text-black"><span class="transition">5</span>M+</h4>
                                    <p class="fs-14 fw-semibold ls-1 d-block mb-0">SATISFIED CLIENTS ALL OVER THE WORLD</p>
                                </div>
                                <div class="counter-card style-three d-flex flex-column align-items-start justify-content-center" data-cue="slideInUp">
                                    <h4 class="font-secondary fw-semibold text-black"><span class="transition">22</span>K+</h4>
                                    <p class="fs-14 fw-semibold ls-1 d-block mb-0">ACTIVE <br>CUSTOMERS</p>
                                </div>
                                <div class="counter-card style-three d-flex flex-column align-items-start justify-content-center" data-cue="slideInUp">
                                    <h4 class="font-secondary fw-semibold text-black"><span class="transition">1</span>K+</h4>
                                    <p class="fs-14 fw-semibold ls-1 d-block mb-0">CLIENTS SATISFACTORY REVIEWS</p>
                                </div>
                                <div class="counter-card style-three d-flex flex-column align-items-start justify-content-center" data-cue="slideInUp">
                                    <h4 class="font-secondary fw-semibold text-black"><span class="transition">99</span>%</h4>
                                    <p class="fs-14 fw-semibold ls-1 d-block mb-0">SUCCESS <br>RATE</p>
                                </div>
                                <div class="counter-card style-three d-flex flex-column align-items-start justify-content-center" data-cue="slideInUp">
                                    <h4 class="font-secondary fw-semibold text-black"><span class="transition">88</span>+</h4>
                                    <p class="fs-14 fw-semibold ls-1 d-block mb-0">TEAM <br>MEMBERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Funfact Section End -->


                 <!-- <div class="about-area style-two position-relative z-1 overflow-hidden pt-130 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-5 pe-xxl-5 mb-30" data-cue="slideInUp">
                                <p class="mb-40">We’re a next-generation AI & Automation Agency with over a decade of proven success helping businesses grow, scale, and dominate their markets through data-driven systems. </p>
                                <a href="about-us.html" class="btn style-two fw-semibold position-relative round-oval" >Learn More<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="assets/img/icons/right-arrow-white.svg" alt="Icon"></span></a>
                            </div>
                            <div class="col-lg-4 col-md-7 mb-30">
                                <div class="about-img round-10" data-cue="slideInUp">
                                    <img src="assets/img/about/about-img-2.jpg" alt="Image" class="round-10">
                                </div>
                            </div>
                            <div class="col-lg-5 ps-xxl-5 pe-xxl-4 mb-30">
                                <span class="section-subtitle style-two fs-13 fw-medium ls-1 d-inline-block bg_secondary text-title round-oval mb-15" data-cue="slideInUp"><img src="assets/img/icons/lock.svg" alt="Icon">ABOUT US</span>
                                <h2 class="section-title style-one font-secondary fw-medium mb-40" data-cue="slideInUp" data-delay="400">The comprehensive platform for sales and marketing automation that sparks tangible business expansion. Experience a 200-400% Increase in Monthly Customer Acquisition with Our Proven Marketing and Sales Automation Tools, encompassing SMS, Social, AI, Email, Website, and more, all seamlessly integrated into one user-friendly platform. The best part? We handle ALL the setup for you!</h2>
                            </div>
                        </div>
                    </div>
                    <div class="move-text style-six overflow-hidden">
                        <ul class="list-unstyled mb-0">
                            <li class="position-relative font-secondary">SMARTER PROTECTION FOR YOUR DATA, NETWORK, AND CLOUD SYSTEMS </li>
                            <li class="position-relative font-secondary">SMARTER PROTECTION FOR YOUR DATA, NETWORK, AND CLOUD SYSTEMS </li>
                            <li class="position-relative font-secondary">SMARTER PROTECTION FOR YOUR DATA, NETWORK, AND CLOUD SYSTEMS </li>
                        </ul>
                    </div>
                </div> -->

                <!-- Service Section Start -->
                <!-- <div class="container pt-130">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 text-center">
                            <span class="d-block fs-14 fw-bold ls-15 text_primary mb-12" data-cue="slideInUp">SERVICES</span>
                            <h2 class="section-title style-one fw-medium text-center text-title mb-40" data-cue="slideInUp" data-delay="400">Everything You Need to Automate, Advertise, and Scale</h2>
                        </div>
                    </div>
                </div>
                <div class="service-slider-wrap position-relative pb-130" data-cue="slideInUp">
                    <div class="container style-one">
                        <div class="service-slider-one swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-card style-three bg-1 d-flex flex-column align-items-center justify-content-between text-center position-relative z-1 round-5">
                                        <img src="assets/img/services/service-card-shape-1.png" alt="Shape" class="service-shape-one position-absolute top-0 end-0 trasnition">
                                        <img src="assets/img/services/service-card-shape-2.png" alt="Shape" class="service-shape-two position-absolute bottom-0 start-0 trasnition">
                                        <h3 class="fs-20 fw-semibold"><a href="service-details.html" class="text-title link-hover-primary trasnition"> Automation </a></h3>
                                        <P>Smart Systems That Close Deals While You Sleep.</P>
                                        <div class="service-icon">
                                            <img src="assets/img/services/service-box-1.png" alt="Icon" class="service-img d-block mx-auto">
                                        </div>
                                        <a href="service-details.html" class="link style-two fw-semibold">Read More<i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style-three bg-2 d-flex flex-column align-items-center justify-content-between text-center position-relative z-1 round-5">
                                        <img src="assets/img/services/service-card-shape-1.png" alt="Shape" class="service-shape-one position-absolute top-0 end-0 trasnition">
                                        <img src="assets/img/services/service-card-shape-2.png" alt="Shape" class="service-shape-two position-absolute bottom-0 start-0 trasnition">
                                        <h3 class="fs-20 fw-semibold"><a href="service-details.html" class="text-title link-hover-primary trasnition">AI Solutions </a></h3>
                                         <P>Smart Systems That Close Deals While You Sleep.</P>
                                        <div class="service-icon">
                                            <img src="assets/img/services/service-box-2.png" alt="Icon" class="service-img d-block mx-auto">
                                        </div>
                                        <a href="service-details.html" class="link style-two fw-semibold">Read More<i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style-three bg-3 d-flex flex-column align-items-center justify-content-between text-center position-relative z-1 round-5">
                                        <img src="assets/img/services/service-card-shape-1.png" alt="Shape" class="service-shape-one position-absolute top-0 end-0 trasnition">
                                        <img src="assets/img/services/service-card-shape-2.png" alt="Shape" class="service-shape-two position-absolute bottom-0 start-0 trasnition">
                                        <h3 class="fs-20 fw-semibold"><a href="service-details.html" class="text-title link-hover-primary trasnition">Advertising </a></h3>
                                         <P>Smart Systems That Close Deals While You Sleep.</P>
                                        <div class="service-icon">
                                            <img src="assets/img/services/service-box-3.png" alt="Icon" class="service-img d-block mx-auto">
                                        </div>
                                        <a href="service-details.html" class="link style-two fw-semibold">Read More<i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style-three bg-4 d-flex flex-column align-items-center justify-content-between text-center position-relative z-1 round-5">
                                        <img src="assets/img/services/service-card-shape-1.png" alt="Shape" class="service-shape-one position-absolute top-0 end-0 trasnition">
                                        <img src="assets/img/services/service-card-shape-2.png" alt="Shape" class="service-shape-two position-absolute bottom-0 start-0 trasnition">
                                        <h3 class="fs-20 fw-semibold"><a href="service-details.html" class="text-title link-hover-primary trasnition">Lead Generation </a></h3>
                                         <P>Smart Systems That Close Deals While You Sleep.</P>
                                        <div class="service-icon">
                                            <img src="assets/img/services/service-box-4.png" alt="Icon" class="service-img d-block mx-auto">
                                        </div>
                                        <a href="service-details.html" class="link style-two fw-semibold">Read More<i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style-three bg-4 d-flex flex-column align-items-center justify-content-between text-center position-relative z-1 round-5">
                                        <img src="assets/img/services/service-card-shape-1.png" alt="Shape" class="service-shape-one position-absolute top-0 end-0 trasnition">
                                        <img src="assets/img/services/service-card-shape-2.png" alt="Shape" class="service-shape-two position-absolute bottom-0 start-0 trasnition">
                                        <h3 class="fs-20 fw-semibold"><a href="service-details.html" class="text-title link-hover-primary trasnition">Website Package </a></h3>
                                         <P>Smart Systems That Close Deals While You Sleep.</P>
                                        <div class="service-icon">
                                            <img src="assets/img/services/service-box-1.png" alt="Icon" class="service-img d-block mx-auto">
                                        </div>
                                        <a href="service-details.html" class="link style-two fw-semibold">Read More<i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style-three bg-4 d-flex flex-column align-items-center justify-content-between text-center position-relative z-1 round-5">
                                        <img src="assets/img/services/service-card-shape-1.png" alt="Shape" class="service-shape-one position-absolute top-0 end-0 trasnition">
                                        <img src="assets/img/services/service-card-shape-2.png" alt="Shape" class="service-shape-two position-absolute bottom-0 start-0 trasnition">
                                        <h3 class="fs-20 fw-semibold"><a href="service-details.html" class="text-title link-hover-primary trasnition">Brand Package </a></h3>
                                         <P>Smart Systems That Close Deals While You Sleep.</P>
                                        <div class="service-icon">
                                            <img src="assets/img/services/service-box-1.png" alt="Icon" class="service-img d-block mx-auto">
                                        </div>
                                        <a href="service-details.html" class="link style-two fw-semibold">Read More<i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-btn">
                        <button class="prev-btn service-prev bg-transparent border-0 d-flex flex-column align-items-center justify-content-center rounded-circle">
                            <img src="assets/img/icons/left-arrow-large.svg" alt="Image">
                        </button>
                        <button class="next-btn service-next bg-transparent border-0 d-flex flex-column align-items-center justify-content-center rounded-circle">
                            <img src="assets/img/icons/right-arrow-large.svg" alt="Image">
                        </button>
                    </div>
                </div> -->
                <!-- Service Section End -->

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
                                        <p class="mb-3">Nexaflow keeps all your customer details in one place. You can see:</p>
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
                                        <p class="mb-3">Nexaflow brings your messages together.<br>Email, SMS, WhatsApp, Instagram, and Facebook all in one inbox.</p>
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
                                        <h4 class="fs-18 fw-semibold text_primary mb-3">Let Nexaflow Work for You</h4>
                                        <p class="mb-3">Nexaflow sends messages automatically at the right time. It can:</p>
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
                                        <p class="mb-3">Nexaflow makes booking easy.<br>Customers choose a time.<br>Nexaflow sends reminders.</p>
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
                                        <p class="mb-3">Nexaflow helps you guide people step by step.<br>From interest → to message → to booking.</p>
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
                                        <p class="mb-3">Nexaflow works on your phone.<br>Check messages.<br>See bookings.<br>Track leads.</p>
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
                                        <p class="mb-3">Nexaflow shows you what’s happening in your business. You can see:</p>
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


                
                <!-- About Us Link (removed duplicate section) -->

                <!-- How It Works Start -->
                <!-- <div class="container style-one pt-130 pb-100">
                    <div class="row">
                        <div class="col-xxl-6 offset-xxl-3 col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center">
                            <span class="d-block fs-14 fw-bold ls-15 text_primary mb-12" data-cue="slideInUp">HOW IT WORKS</span>
                            <h2 class="section-title style-one fw-medium text-center text-title mb-30" data-cue="slideInUp" data-delay="400">Custom AI Robotics Solutions Are Unique Workflow</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center process-card-wrap">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-cue="slideInUp">
                            <div class="process-card style-two mb-30">
                                <div class="process-counter-wrap d-flex flex-wrap align-items-center justify-content-between">
                                    <span class="process-counter-name">D</span>
                                    <span class="process-counter bg_primary d-flex flex-column align-items-center justify-content-center rounded-circle">01</span>
                                </div>
                                <h3 class="fs-20 fw-semibold mb-15">Discovery & Consultation</h3>
                                <p class="pe-xxl-5 mb-0">We begin with in-depth discussions understand business operational needs.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-xxl-4" data-cue="slideInUp">
                            <div class="process-card style-two mb-30">
                                <div class="process-counter-wrap d-flex flex-wrap align-items-center justify-content-between">
                                    <span class="process-counter-name">S</span>
                                    <span class="process-counter bg_primary d-flex flex-column align-items-center justify-content-center rounded-circle">02</span>
                                </div>
                                <h3 class="fs-20 fw-semibold">Support & Scaling</h3>
                                <p class="pe-xxl-4 mb-0">We begin with in-depth discussions understand business operational needs.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-xxl-4" data-cue="slideInUp">
                            <div class="process-card style-two mb-30">
                                <div class="process-counter-wrap d-flex flex-wrap align-items-center justify-content-between">
                                    <span class="process-counter-name">T</span>
                                    <span class="process-counter bg_primary d-flex flex-column align-items-center justify-content-center rounded-circle">03</span>
                                </div>
                                <h3 class="fs-20 fw-semibold">Testing & Optimization</h3>
                                <p class="pe-xxl-4 mb-0">We begin with in-depth discussions understand business operational needs.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ps-xxl-4" data-cue="slideInUp">
                            <div class="process-card style-two mb-30">
                                <div class="process-counter-wrap d-flex flex-wrap align-items-center justify-content-between">
                                    <span class="process-counter-name">I</span>
                                    <span class="process-counter bg_primary d-flex flex-column align-items-center justify-content-center rounded-circle">04</span>
                                </div>
                                <h3 class="fs-20 fw-semibold">Integration & Development</h3>
                                <p class="pe-xxl-4 mb-0">We begin with in-depth discussions understand business operational needs.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- How It Works End -->

                <!-- Industries Section Start -->
                <div class="wh-area style-three position-relative ptb-130">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-5 pe-xxl-0">
                                <div class="wh-img-wrap round-10 mb-md-30" data-cue="slideInUp">
                                    <img src="{{ asset('assets/img/about/platform-2.jpg') }}" alt="Industries We Serve" class="round-10 w-100">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7 ps-xxl-4">
                                <div class="wh-content" data-cue="slideInUp">
                                    <span class="d-block fs-14 fw-bold ls-15 text_primary mb-12">INDUSTRIES WE SERVE</span>
                                    <h2 class="section-title style-one fw-medium text-title mb-10">Built for Businesses That Are Ready to Scale</h2>
                                    <p class="mb-30">We partner with service-based companies ready to automate, advertise, and dominate their industries. Whether you're in healthcare, home services, or professional consulting, we handle ALL the setup for you!</p>
                                    <div class="row gx-xl-3 mb-35">
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-medicine-bottle-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Med Spas</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-tree-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Tree Services</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-hand-coin-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Loan Officers</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-bank-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Funding</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-calculator-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Accounting</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-check-double-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Credit Repair</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-hammer-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Construction</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-home-4-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Real Estate</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-heart-pulse-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Fitness & Gym</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-heart-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Dental</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-shield-check-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Insurance</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-scales-3-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Law Firms</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item d-flex flex-wrap align-items-center bg-white round-10 mb-20 p-2">
                                                <i class="ri-tools-line me-2 fs-4 text_primary"></i>
                                                <span class="fw-medium">Septic & Plumbing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="https://api.leadconnectorhq.com/widget/booking/XchFTkMnL0ZY5QnwUtWN" target="_blank" class="btn style-three fw-semibold position-relative round-oval">Book a Demo<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Industries Section End -->

                <!-- Brand Section Start -->
                <!-- <div class="container style-two pt-130">
                    <div class="brand-slider-one swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-1.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-2.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-3.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-4.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-5.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-6.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-7.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-8.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                           <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-1.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-3.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo style-one">
                                    <img src="assets/img/brand/brand-4.svg" alt="Logo" class="d-block mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Brand Section End -->

              
                 
                <!-- Team Section Start -->
                <!-- <div class="container style-one pt-130">
                     <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center">
                            <span class="section-subtitle style-two d-inline-block text_primary fw-bold fs-14 ls-15 mb-12" data-cue="slideInUp">TEAM MEMBER</span>
                            <h2 class="section-title style-one fw-medium text-center text-title mb-40 px-xxl-5" data-cue="slideInUp" data-delay="400">A Team Member In The Companys AI And Robotics Division</h2>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="team-slider-wrap position-relative pb-130">
                    <div class="container">
                        <div class="team-slider-one swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-card style-one position-relative z-1 overflow-hidden text-center round-10">
                                        <div class="team-member-bg bg-1 position-absolute top-0 start-0 w-100 h-100 transition"></div>
                                        <div class="team-thumb rounded-circle mx-auto">
                                            <img src="assets/img/team/team-thumb-1.jpg" alt="Image" class="rounded-circle transition">
                                        </div>
                                        <div class="team-info position-relative z-1">
                                            <h3 class="fs-20 fw-semibold text-title transition">Elena Marlowe</h3>
                                            <span class="fs-15 d-block transition">Chief Automation Strategist</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style-one position-relative z-1 overflow-hidden text-center round-10">
                                        <div class="team-member-bg bg-2 position-absolute top-0 start-0 w-100 h-100 transition"></div>
                                        <div class="team-thumb rounded-circle mx-auto">
                                            <img src="assets/img/team/team-thumb-2.jpg" alt="Image" class="rounded-circle transition">
                                        </div>
                                        <div class="team-info position-relative z-1">
                                            <h3 class="fs-20 fw-semibold text-title transition">Ravi Deshmukh</h3>
                                            <span class="fs-15 d-block transition">Director of Operations</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style-one position-relative z-1 overflow-hidden text-center round-10">
                                        <div class="team-member-bg bg-3 position-absolute top-0 start-0 w-100 h-100 transition"></div>
                                        <div class="team-thumb rounded-circle mx-auto">
                                            <img src="assets/img/team/team-thumb-3.jpg" alt="Image" class="rounded-circle transition">
                                        </div>
                                        <div class="team-info position-relative z-1">
                                            <h3 class="fs-20 fw-semibold text-title transition">Sophia Zhang</h3>
                                            <span class="fs-15 d-block transition">Robotics Integration Manager</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style-one position-relative z-1 overflow-hidden text-center round-10">
                                        <div class="team-member-bg bg-4 position-absolute top-0 start-0 w-100 h-100 transition"></div>
                                        <div class="team-thumb rounded-circle mx-auto">
                                            <img src="assets/img/team/team-thumb-4.jpg" alt="Image" class="rounded-circle transition">
                                        </div>
                                        <div class="team-info position-relative z-1">
                                            <h3 class="fs-20 fw-semibold text-title transition">Lucas Anders</h3>
                                            <span class="fs-15 d-block transition">Senior AI Engineer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style-one position-relative z-1 overflow-hidden text-center round-10">
                                        <div class="team-member-bg bg-5 position-absolute top-0 start-0 w-100 h-100 transition"></div>
                                        <div class="team-thumb rounded-circle mx-auto">
                                            <img src="assets/img/team/team-thumb-5.jpg" alt="Image" class="rounded-circle transition">
                                        </div>
                                        <div class="team-info position-relative z-1">
                                            <h3 class="fs-20 fw-semibold text-title transition">Luca Moretti</h3>
                                            <span class="fs-15 d-block transition">LogicBay Systems</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style-one position-relative z-1 overflow-hidden text-center round-10">
                                        <div class="team-member-bg bg-6 position-absolute top-0 start-0 w-100 h-100 transition"></div>
                                        <div class="team-thumb rounded-circle mx-auto">
                                            <img src="assets/img/team/team-thumb-6.jpg" alt="Image" class="rounded-circle transition">
                                        </div>
                                        <div class="team-info position-relative z-1">
                                            <h3 class="fs-20 fw-semibold text-title transition">James Holdon</h3>
                                            <span class="fs-15 d-block transition">Director of Machine</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="slider-btn">
                        <button class="prev-btn team-prev bg-transparent border-0 d-flex flex-column align-items-center justify-content-center rounded-circle">
                            <img src="assets/img/icons/left-arrow-large.svg" alt="Image">
                        </button>
                        <button class="next-btn team-next bg-transparent border-0 d-flex flex-column align-items-center justify-content-center rounded-circle">
                            <img src="assets/img/icons/right-arrow-large.svg" alt="Image">
                        </button>
                    </div>
                </div> -->
                <!-- Team Section End -->

                
                <!-- Comparison Section Start -->
                <div class="comparison-area pt-130 pb-100" id="value-comparison">
                    <div class="container">
                        <div class="row text-center mb-50">
                            <div class="col-12">
                                <span class="section-subtitle fs-13 fw-semibold ls-15 d-inline-block text_primary round-oval mb-15" data-cue="slideInUp">VALUE COMPARISON</span>
                                <h2 class="section-title style-one font-secondary fw-medium mb-20" data-cue="slideInUp" data-delay="300">Stop Wasting Money on 15+ Different Tools</h2>
                                <p class="text-para mb-10" data-cue="slideInUp" data-delay="400">Nextaflow replaces all these expensive platforms, saving you over $1,500 every single month.</p>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-xl-10" data-cue="slideInUp">
                                <div class="table-responsive bg-white round-20 shadow-sm p-4">
                                    <table class="table table-borderless align-middle mb-0">
                                        <thead class="border-bottom">
                                            <tr>
                                                <th class="ps-4 py-3 text-title fw-bold">FEATURES</th>
                                                <th class="py-3 text-title fw-bold text-center">REPLACES</th>
                                                <th class="py-3 text-title fw-bold text-center">OTHER TOOLS</th>
                                                <th class="pe-4 py-3 text_primary fw-bold text-center">NEXTAFLOW</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">CRM & Pipeline Management</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">HubSpot / Pipedrive</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$99/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Unlimited Sales Funnels</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">ClickFunnels / Leadpages</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$297/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Website Builder</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">WordPress / Wix</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$29/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Surveys & Forms</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">Typeform / Jotform</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$49/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Email Marketing</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">Mailchimp / ActiveCampaign</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$99/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">2-Way SMS Marketing</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">Twilio / Podium</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$99/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Booking & Appointments</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">Calendly / Acuity</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$29/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Workflow Automations</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">Zapier / Make</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$169/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Courses / Products</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">Kajabi / Teachable</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$99/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Call Tracking</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">CallRail</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$49/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Reputation Management</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">BirdEye / Podium</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$159/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="ps-4 py-3 fw-medium text-title">Gray-Labeled Mobile App</td>
                                                <td class="py-3 text-center"><span class="badge bg-light text-dark round-oval px-3 py-2">Custom Dev</span></td>
                                                <td class="py-3 text-center text-danger fw-semibold">$200+/mo</td>
                                                <td class="pe-4 py-3 text-center"><i class="ri-checkbox-circle-fill fs-4 text-success"></i></td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="bg-light">
                                            <tr>
                                                <td colspan="2" class="ps-4 py-4 fw-bold text-title fs-20">OVERALL PRICE</td>
                                                <td class="py-4 text-center text-danger fw-bold fs-20">$1,612 /mo</td>
                                                <td class="pe-4 py-4 text-center text_primary fw-bold fs-24">$97 /mo</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="text-center mt-4">
                                     <p class="fs-18 fw-medium text-title"><span class="text_primary fw-bold">Save Over $1,500 Monthly</span> with the Nextaflow All-In-One System!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comparison Section End -->


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
                        
                        <!-- Done-For-You Setup -->
                        <!-- <div class="row justify-content-center mt-40">
                            <div class="col-lg-10">
                                <div class="bg-f round-10 p-4 text-center" data-cue="slideInUp">
                                    <div class="mb-3">
                                        <span class="fs-40">🧑‍💼</span>
                                    </div>
                                    <h3 class="fs-24 fw-semibold text-title mb-3">DONE-FOR-YOU SETUP (OPTIONAL)</h3>
                                    <p class="text-para fs-18 mb-3">Want us to set everything up for you?</p>
                                    <h4 class="font-secondary fw-bold text_primary mb-4">One-time setup: from £500</h4>
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-md-8">
                                            <p class="fw-semibold mb-3">We help you:</p>
                                            <ul class="list-unstyled mb-0 text-start">
                                                <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Connect all channels</li>
                                                <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Build your automations</li>
                                                <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Test everything</li>
                                                <li class="mb-2"><i class="ri-checkbox-circle-line text_primary me-2"></i>Go live faster</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="contact.html" class="btn style-three fw-semibold position-relative round-oval">Get Started<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="assets/img/icons/right-arrow-white.svg" alt="Icon"></span></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- Done-For-You Setup Section -->
                <div class="container style-one ptb-100 mt-100">
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

                <!-- No Surprises Section -->
                 <!-- <div class="container style-one mb-100">
                    <div class="bg-black ptb-100 round-20 position-relative z-1 overflow-hidden">
                        <div class="container text-center">
                            <h2 class="section-title style-one fw-medium text-white mb-40">🔐 NO SURPRISES. JUST CLARITY.</h2>
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="text-white">
                                        <div class="fs-18 fw-bold mb-2">No long contracts</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="text-white">
                                        <div class="fs-18 fw-bold mb-2">Cancel anytime</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="text-white">
                                        <div class="fs-18 fw-bold mb-2">Secure system</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="text-white">
                                        <div class="fs-18 fw-bold mb-2">Real support</div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-offwhite fs-18 fw-medium mt-20 mb-0">You are always in control.</p>
                        </div>
                    </div>
                </div> -->

                <!-- CTA Helper Section -->
            

                <!-- Testimonial Section Start -->
      
                <!-- Testimonial Section End -->

                <!-- Project Section Start -->
                <!-- <div class="container style-one pt-130">
                    <div class="row align-items-center mb-40">
                        <div class="col-xl-6 col-md-8">
                            <span class="d-block fs-14 fw-bold ls-15 text_primary mb-12" data-cue="slideInUp">PROJECTS</span>
                            <h2 class="section-title style-one fw-medium text-title" data-cue="slideInUp" data-delay="400">Smart Robotic Assembly Line Automation For Global Electronics</h2>
                        </div>
                        <div class="col-xl-6 col-md-4">
                            <div class="slider-btn style-three d-flex flex-wrap align-items-center justify-content-md-end" data-cue="slideInUp">
                                <button class="prev-btn project-prev position-relative border-0 me-2 d-flex flex-column align-items-center justify-content-center rounded-circle">
                                    <img src="assets/img/icons/left-arrow-black.svg" alt="Icon">
                                </button>
                                <button class="next-btn project-prev position-relative border-0 ms-2 d-flex flex-column align-items-center justify-content-center rounded-circle">
                                    <img src="assets/img/icons/right-arrow-black.svg" alt="Icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="container-fluid pb-130">
                  
                </div>
                <!-- Project Section End -->

                <!-- Feature Section Start -->
                 
                <!-- Feature Section End -->

                <!-- Call To Action Section Start -->
                <div class="cta-area style-three bg-f position-relative z-1 ptb-130 round-20">
                    <div class="container style-one">
                        <div class="row align-items-center">
                            <div class="col-xxl-5 col-md-6 pe-xxl-5 mb-md-30">
                                <span class="section-subtitle style-three fs-14 fw-bold ls-15 d-inline-block text_primary mb-15" data-cue="slideInUp">REVOLUTIONIZE YOUR MARKETING STRATEGY</span>
                                <h2 class="section-title style-one text-title fw-medium mb-0"  data-cue="slideInUp" data-delay="300">Nexaflow provides the support and strength to ignite REAL business growth. Is your business next?</h2>
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
                <!-- Call To Action Section End -->

@endsection
