@extends('layouts.main')

@section('content')

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-area bg-f round-20 position-relative z-1">
                    <div class="container text-center">
                        <ul class="br-menu text-center bg_secondary d-inline-block list-unstyled mb-15">
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block"><a href="{{ route('home') }}">HOME</a></li>
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">TERMS & CONDITIONS</li>
                        </ul>
                        <h2 class="section-title style-one fw-medium font-secondary text-black text-center mb-6">Terms & Conditions</h2>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Privacy Policy Section start -->
                <div class="terms-wrap ptb-130">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-lg-12">
                                <div class="single-para">
                                    <h3>Service Description</h3>
                                    <p>
                                        Nextaflow is a comprehensive business automation and customer relationship management (CRM) platform. Our services include CRM functionality, conversation management across multiple channels, marketing automation, calendar booking, funnel creation, mobile applications, and business analytics. We provide these services on an "as-is" basis to help small businesses automate their operations and scale their customer acquisition.
                                    </p>
                                </div>
                                <div class="single-para">
                                    <h3>User Accounts and Responsibilities</h3>
                                    <p>When you create a Nextaflow account, you agree to provide accurate information and maintain the confidentiality of your login credentials. You are responsible for all activities that occur under your account. You must notify us immediately of any unauthorized access. Users must comply with all applicable laws and regulations when using our platform, particularly regarding customer communication and data handling.</p>
                                </div>
                                <div class="single-para">
                                    <h3>Acceptable Use Policy</h3>
                                    <p>Users agree not to use Nextaflow for illegal purposes, spam, harassment, or violation of others' rights. You may not attempt to gain unauthorized access to the platform or circumvent security measures. Prohibited activities include phishing, malware distribution, and automated scraping. Violation of these terms may result in account suspension or termination.</p>
                                </div>
                                <div class="single-para">
                                    <h3>Intellectual Property Rights</h3>
                                    <p>
                                        Nextaflow and all its contents, features, and functionality are owned by Edoubleone and protected by copyright, trademark, and other intellectual property laws. Your use of our platform does not grant you ownership of any intellectual property rights in Nextaflow or its content. You retain all rights to customer data and content you create within the platform.
                                    </p>
                                </div>
                                <div class="single-para">
                                    <h3>Limitation of Liability</h3>
                                    <p>To the fullest extent permitted by law, Nextaflow and Edoubleone shall not be liable for any indirect, incidental, special, consequential, or punitive damages. Our total liability is limited to the amount you paid for our services in the past 12 months. Some jurisdictions do not allow limitation of liability, so this may not apply to you.</p>
                                    <ol>
                                        <li>We strive for 99.5% platform uptime but do not guarantee uninterrupted service</li>
                                        <li>We are not liable for data loss caused by user error or third-party integrations</li>
                                        <li>Users accept responsibility for compliance with applicable laws</li>
                                        <li>We reserve the right to modify or discontinue services with notice</li>
                                    </ol>
                                </div>
                                <div class="single-para">
                                    <h3>Payment Terms and Cancellation</h3>
                                    <p>Subscription fees are billed according to your selected plan. Cancellation can be made anytime through your account settings. Upon cancellation, you retain access until the end of your billing period. Data retention after cancellation follows our Privacy Policy. We do not provide refunds for partial months unless cancellation is due to service failure on our part.</p>
                                </div>
                                <div class="single-para">
                                    <h3>Modifications to Terms</h3>
                                    <p>Nextaflow reserves the right to modify these terms at any time. We will provide notice of significant changes via email or platform announcement. Your continued use of Nextaflow after modifications constitutes acceptance of updated terms. For questions about these terms, contact us at info@edoubleone.net.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Privacy Policy Section end -->

@endsection 