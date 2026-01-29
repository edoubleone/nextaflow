@extends('layouts.main')

@section('content')

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-area bg-f round-20 position-relative z-1">
                    <div class="container text-center">
                        <ul class="br-menu text-center bg_secondary d-inline-block list-unstyled mb-15">
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block"><a href="{{ route('home') }}">HOME</a></li>
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">PRIVACY POLICY</li>
                        </ul>
                        <h2 class="section-title style-one fw-medium font-secondary text-black text-center mb-6">Privacy Policy</h2>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Privacy Policy Section start -->
                <div class="terms-wrap ptb-130">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-lg-12">
                                <div class="single-para">
                                    <h3>Information Collection</h3>
                                    <p>
                                        At Nextaflow, we collect information necessary to provide our business automation, CRM, and customer relationship management services. We gather information including:
                                    </p>
                                    <ul class="list-unstyled mb-3 ps-3">
                                        <li>• Account registration data (name, email, company information)</li>
                                        <li>• Business and customer data you input into our platform</li>
                                        <li>• Usage analytics and platform interaction data</li>
                                        <li>• Communication preferences and contact information</li>
                                        <li>• Payment and billing information</li>
                                    </ul>
                                </div>
                                <div class="single-para">
                                    <h3>How We Use Your Information</h3>
                                    <p>We use the information we collect to deliver and improve our Nextaflow automation platform, including CRM functionality, inbox management, automation workflows, calendar booking, and reporting features. Your data helps us:</p>
                                    <ul class="list-unstyled mb-3 ps-3">
                                        <li>• Process and manage your automation workflows</li>
                                        <li>• Provide customer support and technical assistance</li>
                                        <li>• Send service updates and feature announcements</li>
                                        <li>• Improve our platform based on usage patterns</li>
                                        <li>• Ensure platform security and prevent fraudulent activity</li>
                                    </ul>
                                </div>
                                <div class="single-para">
                                    <h3>Data Collection and Use</h3>
                                    <p>We collect information through your direct interaction with our platform. This includes data you input while using Nextaflow's CRM, automation, booking systems, and reporting features. We also collect technical information about how you use our platform to continuously improve your experience and ensure optimal performance.</p>
                                </div>
                                <div class="single-para">
                                    <h3>Data Protection and Security</h3>
                                    <p>
                                        Your data security is paramount to us. Nextaflow implements industry-leading encryption and security protocols to protect your business information, customer data, and automation workflows.
                                    </p>
                                    <p>
                                        We use SSL/TLS encryption for data transmission, secure database storage, and regular security audits. Your sensitive business information, customer contacts, and automation configurations are protected with enterprise-grade security measures. Access to your data is restricted to authorized personnel only and monitored continuously.
                                    </p>
                                </div>
                                <div class="single-para">
                                    <h3>Data Retention and Deletion</h3>
                                    <p>We retain your data for as long as necessary to provide our services and maintain your account. You have the right to request deletion of your data at any time. Upon request, we will delete your personal information within 30 days, except where we're required to retain it for legal or compliance purposes.</p>
                                    <ol>
                                        <li>Data is encrypted and securely stored on our servers</li>
                                        <li>Automatic backups are maintained for business continuity</li>
                                        <li>Access logs are monitored for unauthorized attempts</li>
                                        <li>Regular security audits ensure compliance with data protection standards</li>
                                    </ol>
                                </div>
                                <div class="single-para">
                                    <h3>Third-Party Integrations</h3>
                                    <p>Nextaflow integrates with various third-party services to enhance your automation capabilities. When you connect integrations such as payment processors, email providers, or communication platforms, you authorize us to share necessary data with these partners. We ensure all third-party partners maintain similar data protection standards. You can disconnect any integration at any time through your account settings.</p>
                                </div>
                                <div class="single-para">
                                    <h3>Your Privacy Rights</h3>
                                    <p>You have the right to access, modify, or request deletion of your personal data. To exercise these rights, contact our privacy team at info@edoubleone.net. We will respond to legitimate requests within 30 days. You can also manage your communication preferences and update your information directly through your Nextaflow account dashboard.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Privacy Policy Section end -->

@endsection this