@extends('layouts.main')

@section('content')

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-area bg-f round-20 position-relative z-1">
                    <div class="container text-center">
                        <ul class="br-menu text-center bg_secondary d-inline-block list-unstyled mb-15">
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block"><a href="{{ route('home') }}">HOME</a></li>
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">CONTACT US</li>
                        </ul>
                        <h2 class="section-title style-one fw-medium font-secondary text-black text-center mb-6">Contact Us</h2>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Contact Section Start -->
                <div class="container style-one pt-130">
                    <div class="row">
                        <div class="col-lg-5 mb-md-30">
                             <div class="comment-form-box round-10">
                                @if(session('success'))
                                    <div class="alert alert-success mt-2">
                                        <strong>{{ session('success') }}</strong>
                                        @if(session('contact_data'))
                                            <div class="mt-3">
                                                <h5>Submission Details:</h5>
                                                <ul class="list-unstyled">
                                                    <li><strong>Name:</strong> {{ session('contact_data')['first_name'] }} {{ session('contact_data')['last_name'] }}</li>
                                                    <li><strong>Email:</strong> {{ session('contact_data')['email'] }}</li>
                                                    <li><strong>Phone:</strong> {{ session('contact_data')['phone'] }}</li>
                                                    <li><strong>Appointment Date:</strong> {{ session('contact_data')['appointment_date'] }}</li>
                                                    <li><strong>Appointment Time:</strong> {{ session('contact_data')['appointment_time'] }}</li>
                                                    <li><strong>Selected Plan:</strong> {{ session('contact_data')['selected_plan'] ?? 'None' }}</li>
                                                    <li><strong>Message:</strong> {{ session('contact_data')['message'] }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                                @if(session('error'))
                                    <div class="alert alert-danger mt-2">{{ session('error') }}</div>
                                @endif
                                <form action="{{ route('contact.store') }}" method="POST" class="comment-form style-one round-10" id="cmt-form">
                                    @csrf
                                    <h3 class="fs-20 fw-semibold mb-18"> Get In Touch</h3>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative mb-20">
                                                <input type="text" name="first_name" required class="w-100 ht-52 round-5 bg-white text-para border-0" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group position-relative mb-20">
                                                <input type="text" name="last_name" required class="w-100 ht-52 round-5 bg-white text-para border-0" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-20">
                                        <input type="email" name="email" placeholder="Email" required class="w-100 ht-52 round-5 bg-white text-para border-0">
                                    </div>
                                    <div class="form-group mb-20">
                                        <input type="text" name="phone" placeholder="Phone" required class="w-100 ht-52 round-5 bg-white text-para border-0">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-20">
                                                <input type="date" name="appointment_date" required class="w-100 ht-52 round-5 bg-white text-para border-0">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-20">
                                                <input type="time" name="appointment_time" required class="w-100 ht-52 round-5 bg-white text-para border-0">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-20">
                                        <input type="text" name="selected_plan" value="{{ request('plan') }}" readonly placeholder="Selected Plan" class="w-100 ht-52 round-5 bg-white text-para border-0">
                                    </div>
                                    <div class="form-group mb-20">
                                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Your Message" required class="w-100 round-20 bg-white text-para border-0 resize-0"></textarea>
                                    </div>
                                    <div class="form-check checkbox style-two mb-25">
                                        <input class="form-check-input" type="checkbox" id="test_2" required>
                                        <label class="form-check-label" for="test_2">
                                           I've read & agreed to <a href="#" class="text_primary link-hover-primary">Terms & Conditions</a> & <a href="#">Privacy Policy</a>
                                        </label>
                                    </div>
                                    <button class="btn style-three d-block w-100 fw-semibold position-relative round-oval" type="submit">Send Message<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-7 ps-xxl-5">
                            <div class="contact-content ps-xxl-5 ms-xxl-3 mb-60">
                                <h2 class="section-title style-one font-secondary fw-medium text-title mb-18">We Are Always Ready To Help You And Answer Your Questions</h2>
                                <!-- <p class="mb-45">Pacific hake false trevally queen parrotfish black prickleback mosshead warbonnet sweeper! Greenling sleeper.</p> -->
                                <div class="contact-card-wrap style-one d-flex flex-wrap position-relative">
                                    <div class="contact-card style-two d-flex flex-wrap">
                                        <span class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary"><img src="{{ asset('assets/img/icons/phone-black.svg') }}" alt="Icon"></span>
                                        <div>
                                            <h6 class="fs-16 fw-semibold mb-12">Call Center</h6>
                                            <a href="tel:+12029710392" class="d-block text-para hover-text-primary">+1 (202) 971-0392</a>
                                        </div>
                                    </div>
                                    <div class="contact-card style-two d-flex flex-wrap">
                                        <span class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary"><img src="{{ asset('assets/img/icons/pin-black.svg') }}" alt="Icon"></span>
                                        <div>
                                            <h6 class="fs-16 fw-semibold mb-12">Our Location</h6>
                                            <p>7404 Executive place, Lanham MD 20706, United States</p>
                                        </div>
                                    </div>
                                    <div class="contact-card style-two d-flex flex-wrap">
                                        <span class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary"><img src="{{ asset('assets/img/icons/pin-black.svg') }}" alt="Icon"></span>
                                        <div>
                                            <h6 class="fs-16 fw-semibold mb-12">Email</h6>
                                            <a href="mailto:info@edoubleone.net" class="d-block text-para hover-text-primary">info@edoubleone.net</a>
                                        </div>
                                    </div>
                                    <div class="contact-card style-two">
                                        <h6 class="fs-16 fw-semibold mb-25 d-block">Follow Us</h6>
                                        <ul class="social-profile style-four list-unstyled mb-0">
                                            <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i class="ri-twitter-x-line"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i class="ri-instagram-line"></i></a></li>
                                            <li><a href="https://www.linkedin.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i class="ri-linkedin-fill"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/contact-img.png') }}" alt="Image" class="contact-img d-block mx-auto">
                        </div>
                    </div>
                </div>
                <!-- Contact Section End -->

                <div class="map-area position-relative z-1">
                    <div class="container">
                        <div class="comp-map style-two w-100 round-10">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.7419088194023!2d-76.84556!3d38.9831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c8e3e3e3e3e3%3A0x0!2s7404%20Executive%20Place%2C%20Lanham%2C%20MD%2020706!5e0!3m2!1sen!2sus!4v1612419490850!5m2!1sen!2sus">
                            </iframe>
                        </div>
                    </div>
                </div>

@endsection