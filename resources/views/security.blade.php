@extends('layouts.main')

@section('content')

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-area bg-f round-20 position-relative z-1">
                    <div class="container text-center">
                        <ul class="br-menu text-center bg_secondary d-inline-block list-unstyled mb-15">
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block"><a href="{{ route('home') }}">HOME</a></li>
                            <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">SECURITY POLICY</li>
                        </ul>
                        <h2 class="section-title style-one fw-medium font-secondary text-black text-center mb-6">Security Policy</h2>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Security Section start -->
                <div class="terms-wrap ptb-130">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-lg-12">
                                <div class="single-para">
                                    <h3>Security Infrastructure</h3>
                                    <p>
                                        Nextaflow maintains a comprehensive security infrastructure designed to protect your business data, customer information, and automation workflows. Our security framework includes:
                                    </p>
                                    <ul class="list-unstyled mb-3 ps-3">
                                        <li>• Enterprise-grade SSL/TLS encryption for all data transmission</li>
                                        <li>• Multi-layer security architecture with firewalls and intrusion detection</li>
                                        <li>• Role-based access control (RBAC) for platform administration</li>
                                        <li>• Regular vulnerability assessments and penetration testing</li>
                                        <li>• ISO 27001 compliant security management systems</li>
                                    </ul>
                                </div>
                                <div class="single-para">
                                    <h3>Data Encryption and Storage</h3>
                                    <p>All data transmitted to and from the Nextaflow platform is encrypted using industry-standard TLS 1.2 or higher. Sensitive information such as customer data, authentication credentials, and automation configurations are encrypted at rest using AES-256 encryption. Our database infrastructure is hosted on secure, monitored servers with redundant backup systems.</p>
                                </div>
                                <div class="single-para">
                                    <h3>Access Control and Authentication</h3>
                                    <p>Nextaflow implements strong authentication mechanisms including password requirements, two-factor authentication (2FA), and session management. All user access is logged and monitored. Administrative access is restricted to authorized personnel only and requires multi-factor authentication. API keys and tokens are encrypted and regularly rotated.</p>
                                </div>
                                <div class="single-para">
                                    <h3>Incident Response and Monitoring</h3>
                                    <p>
                                        We maintain a 24/7 security monitoring system that detects and responds to potential security threats. Our incident response team follows established protocols to address any security concerns promptly.
                                    </p>
                                    <p>
                                        In the event of a security incident affecting user data, we will notify affected users within 48 hours. We maintain detailed incident logs and conduct thorough post-incident reviews to prevent future occurrences.
                                    </p>
                                </div>
                                <div class="single-para">
                                    <h3>Compliance and Certifications</h3>
                                    <p>Nextaflow complies with major data protection regulations including GDPR, CCPA, and other applicable privacy laws. Our platform undergoes regular compliance audits and maintains certifications in data security standards. We work with third-party security auditors to ensure continuous compliance.</p>
                                    <ol>
                                        <li>Regular security training for all team members</li>
                                        <li>Mandatory security updates and patch management</li>
                                        <li>Third-party security assessments and audits</li>
                                        <li>Disaster recovery and business continuity planning</li>
                                    </ol>
                                </div>
                                <div class="single-para">
                                    <h3>Third-Party Security</h3>
                                    <p>All third-party integrations connected to Nextaflow are vetted for security compliance. We ensure partners maintain equivalent security standards. Integration authentication is secured through OAuth 2.0 and API key management. Users maintain full control over connected integrations and can revoke access at any time.</p>
                                </div>
                                <div class="single-para">
                                    <h3>Reporting Security Vulnerabilities</h3>
                                    <p>If you discover a security vulnerability in Nextaflow, please report it responsibly to security@edoubleone.net. We appreciate your help in keeping our platform secure and will acknowledge receipt of your report within 24 hours.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Security Section end -->

@endsection
