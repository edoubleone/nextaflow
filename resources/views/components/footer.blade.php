<!-- Footer Section Start -->
<footer class="footer-area style-three bg-black position-relative z-1 pt-130">
    <div class="container style-one">
        <div class="row justify-content-center mb-40">
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget mb-30">
                    <a href="{{ route('home') }}" class="logo"><img src="{{ asset('assets/img/logo/logo-footer-black.png') }}" alt="Logo"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget mb-30 ps-xxl-5 ms-xxl-1">
                    <h3 class="footer-widget-title text-white fs-18 fw-semibold">Quick Links</h3>
                    <ul class="footer-menu list-unstyled mb-0">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ps-xxl-0 pe-xxl-5 pe-lg-4">
                <div class="footer-widget mb-30">
                    <h3 class="footer-widget-title text-white fs-18 fw-semibold">Address</h3>
                    <ul class="contact-info list-unstyled mb-0">
                        <li class="position-relative">
                            <img src="{{ asset('assets/img/icons/pin-small.svg') }}" alt="Icon">
                            <span class="text-white fw-medium">Address : 7404 Executive place, Lanham MD 20706, United States</span> 
                        </li>
                        <li class="position-relative">
                            <img src="{{ asset('assets/img/icons/mail-small.svg') }}" alt="Icon">
                            <span class="text-white fw-medium d-block">Email :</span>
                            <a href="mailto:info@edoubleone.net">info@edoubleone.net</a>
                        </li>
                        <li class="position-relative">
                            <img src="{{ asset('assets/img/icons/phone-small.svg') }}" alt="Icon">
                            <span class="text-white fw-medium d-block">Phone :</span> 
                            <a href="tel:+12029710392">+1 (202) 971-0392</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ps-xxl-4 pe-xxl-1">
                <div class="footer-widget mb-30">
                    <h3 class="text-white fs-20 font-secondary fw-medium mb-12">Subscribe To Our Newsletter</h3>
                    <form action="{{ route('subscribe') }}" method="POST" class="newsletter-form position-relative">
                        @csrf
                        <input type="email" name="email" class="fs-15 w-100 bg-transparent text-white outline-0" placeholder="Enter Your Email" required>
                        <button type="submit" class="position-absolute bg-transparent border-0 end-0" style="cursor: pointer;"><img src="{{ asset('assets/img/icons/plane-small.svg') }}" alt="Icon"></button>
                    </form>
                    <div class="post-share d-flex flex-wrap align-items-center">
                        <span class="text-white fw-medium me-2">Follow Us :</span>
                        <ul class="social-profile style-one list-unstyled mb-0">
                            <li><a href="https://x.com/edoubleoneinc?t=lrNy6KIiT9EGCUUO2fVenw&s=09" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i class="ri-twitter-x-line"></i></a></li>
                            <li><a href="https://www.instagram.com/edoubleoneinc?igsh=MWFhanV0YWh6eXM2aQ==" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i class="ri-instagram-line"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/e-double-one-inc/" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom position-relative overflow-hidden z-1 pb-30 text-center">
        <div class="container position-relative" style="z-index: 1;">
            <p class="mb-2 text-white">© 2026 <a href="https://www.edoubleone.net/" target="_blank" class="text-white" style="text-decoration: none;">Edoubleone, Inc.</a> | All Rights Reserved</p>
            <p class="mb-3 text-white">Powered by <a href="https://www.edoubleone.net/" target="_blank" class="text_primary fw-semibold" style="text-decoration: none;">Edoubleone.net</a></p>
            <ul class="footer-bottom-menu list-unstyled mb-0 d-flex justify-content-center flex-wrap align-items-center">
                <li><a href="{{ route('privacy') }}" class="text-white fs-14" style="text-decoration: none;">Privacy Policy</a></li>
                <li class="mx-3 text-white fs-14">|</li>
                <li><a href="{{ route('terms') }}" class="text-white fs-14" style="text-decoration: none;">Terms of Service</a></li>
                <li class="mx-3 text-white fs-14">|</li>
                <li><a href="{{ route('security') }}" class="text-white fs-14" style="text-decoration: none;">Security Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Back to Top -->
<div id="progress-wrap" class="progress-wrap style-one">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
