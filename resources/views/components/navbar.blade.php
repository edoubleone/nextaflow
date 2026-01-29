<!-- Navbar Start -->
<div class="navbar-area style-three position-relative" id="navbar">
    <div class="container-fluid">
        <div class="navbar-wrapper d-flex justify-content-between align-items-center">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('assets/img/logo/logo-navbar-green.png') }}" alt="Logo" class="logo-light">
                <img src="{{ asset('assets/img/logo/logo-navbar-green.png') }}" alt="Logo" class="logo-dark">
            </a>
            <div class="menu-area mx-auto">
                <div class="overlay"></div>
                <nav class="menu">
                    <div class="menu-mobile-header">
                        <button type="button" class="menu-mobile-arrow bg-transparent border-0"><i class="ri-arrow-left-s-line"></i></button>
                        <div class="menu-mobile-title"></div>
                        <button type="button" class="menu-mobile-close bg-transparent border-0"><i class="ri-close-line"></i></button>
                    </div>
                    <ul class="menu-section p-0 mb-0 lh-1">
                        <li class="" >
                            <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home<i class=""></i></a>
                            
                        </li>
                        <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="{{ Route::is('services') ? 'active' : '' }}">Services</a></li>
                        <li><a href="{{ route('pricing') }}" class="{{ Route::is('pricing') ? 'active' : '' }}">Pricing</a></li>
                        <li><a href="{{ route('home') }}#value-comparison">Compare Plans</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="other-options d-flex flex-wrap align-items-center justify-content-end">
                <div class="option-item">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="mobile-options position-relative d-lg-none me-3">
                            <button class="dropdown-toggle  text-center bg-transparent border-0 p-0 transition" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="ri-more-fill"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-centered mobile-option-list top-1 border-0" data-bs-popper="static">
                                <a href="{{ route('contact') }}" class="btn style-three fw-semibold position-relative round-oval">Get In Touch<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                            </div>
                        </div>
                        <button  class="search-btn bg-transparent border-0 d-flex flex-wrap align-items-center dropdown-toggle text-center p-0 transition" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                <img src="{{ asset('assets/img/icons/search.svg') }}" alt="Search Icon">
                        </button>
                        <div class="search-dropdown dropdown-menu dropdown-menu-right top-1 border-0" data-bs-popper="static">
                             <form class="search-popup position-relative" action="#">
                                <input type="search" class="form-control text-para" placeholder="Search Here....">
                                <button type="submit" class="position-absolute top-0 end-0 h-100 border-0 bg-transparent d-flex flex-column align-items-center justify-content-center"><i class="ri-search-2-line"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="option-item d-lg-block d-none">
                    <a href="{{ route('contact') }}" class="btn style-three fw-semibold position-relative round-oval">Get In Touch<span class="position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/img/icons/right-arrow-white.svg') }}" alt="Icon"></span></a>
                </div>
                <div class="option-item d-lg-none">
                    <button type="button" class="menu-mobile-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->
