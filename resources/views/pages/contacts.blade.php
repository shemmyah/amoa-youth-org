@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    {{-- HERO SECTION --}}
    <section class="contact-hero py-5 position-relative overflow-hidden" data-aos="fade-up">

        {{-- Animated background shapes --}}
        <div class="position-absolute top-0 end-0 opacity-10"
            style="width: 350px; height: 350px; background: var(--gradient-1); border-radius: 50%; transform: translate(20%, -20%); pointer-events: none;">
        </div>
        <div class="position-absolute bottom-0 start-0 opacity-10"
            style="width: 250px; height: 250px; background: var(--gradient-1); border-radius: 50%; transform: translate(-20%, 20%); pointer-events: none;">
        </div>

        <div class="container position-relative text-center py-5">
            <div class="mb-3">
                <span class="badge rounded-pill px-4 py-2"
                    style="background: rgba(20, 195, 142, 0.15); color: var(--primary); font-weight: 600; border: 2px solid var(--primary);">
                    <i class="fa-solid fa-envelope me-2"></i>LET'S CONNECT
                </span>
            </div>

            <h1 class="display-3 fw-bold mb-4">
                Get in <span class="gradient-text">Touch</span>
            </h1>

            <p class="fs-5 text-muted mx-auto" style="max-width: 700px; line-height: 1.8;">
                Have questions, suggestions, or want to join our community? We'd love to hear from you.
                Send us a message and we'll get back to you as soon as possible!
            </p>
        </div>
    </section>

    <style>
        .gradient-text {
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>

    {{-- SUCCESS MESSAGE --}}
    @if (session('success'))
        <section class="py-3" data-aos="fade-down">
            <div class="container d-flex justify-content-center">
                <div class="alert alert-success success-alert d-flex align-items-center px-4 py-3" role="alert">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle me-3"
                        style="width: 40px; height: 40px; background: rgba(21, 87, 36, 0.2);">
                        <i class="fas fa-check-circle" style="font-size: 1.3rem;"></i>
                    </div>
                    <div>
                        <strong>Success!</strong>
                        <p class="mb-0">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .success-alert {
                background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
                color: #155724;
                border: 2px solid #28a745;
                border-radius: 1rem;
                box-shadow: 0 8px 25px rgba(40, 167, 69, 0.2);
                font-weight: 500;
                max-width: 600px;
                width: 100%;
                animation: slideDown 0.5s ease;
            }

            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    @endif

    {{-- MAIN CONTENT --}}
    <section class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row g-5 align-items-start">

                {{-- CONTACT INFO CARDS --}}
                <div class="col-lg-5">
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3" style="color: #2c3e50;">Contact Information</h3>
                        <p class="text-muted">We're here to help and answer any questions you might have.</p>
                    </div>

                    <div class="row g-4">
                        {{-- Email Card --}}
                        <div class="col-12" data-aos="fade-right" data-aos-delay="100">
                            <div class="card border-0 shadow-sm p-4 h-100 hover-lift">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="flex-shrink-0">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                                            <i class="fa-solid fa-envelope fa-xl" style="color: var(--primary);"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-2">Email Us</h6>
                                        <p class="text-muted small mb-2">Send us a message anytime</p>
                                        <a href="mailto:info@amoayouth.org" class="text-decoration-none"
                                            style="color: var(--primary); font-weight: 600;">
                                            amoayouthorganization@gmail.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Location Card --}}
                        <div class="col-12" data-aos="fade-right" data-aos-delay="200">
                            <div class="card border-0 shadow-sm p-4 h-100 hover-lift">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="flex-shrink-0">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                                            <i class="fa-solid fa-location-dot fa-xl" style="color: var(--primary);"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-2">Visit Us</h6>
                                        <p class="text-muted small mb-0">AMOA Subdivision<br>Compostela, Cebu</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Social Media Card --}}
                        <div class="col-12" data-aos="fade-right" data-aos-delay="300">
                            <div class="card border-0 shadow-sm p-4 h-100 hover-lift">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="flex-shrink-0">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                                            <i class="fa-solid fa-share-nodes fa-xl" style="color: var(--primary);"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-2">Follow Us</h6>
                                        <p class="text-muted small mb-3">Stay connected on social media</p>
                                        <a href="https://www.facebook.com/profile.php?id=61563942009546" target="_blank" class="btn btn-sm px-3 py-2 text-white" style="background: #1877F2; border-radius: 50px; font-weight: 600; transition: all 0.3s ease;">
                                            <i class="fab fa-facebook-f me-2"></i>
                                            Facebook
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Quick Response Note --}}
                    <div class="mt-4 p-4 rounded-3"
                        style="background: linear-gradient(135deg, rgba(20, 195, 142, 0.1), rgba(8, 145, 178, 0.1));"
                        data-aos="fade-right" data-aos-delay="400">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-clock fa-2x" style="color: var(--primary);"></i>
                            <div>
                                <h6 class="fw-bold mb-2">Quick Response Time</h6>
                                <p class="text-muted small mb-0">We typically respond within 24-48 hours during business
                                    days.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CONTACT FORM --}}
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm p-4 p-lg-5" data-aos="fade-left">
                        <div class="mb-4">
                            <h3 class="fw-bold mb-2" style="color: #2c3e50;">Send Us a Message</h3>
                            <p class="text-muted">Fill out the form below and we'll get back to you soon</p>
                        </div>

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf

                            {{-- Name --}}
                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold mb-2">
                                    <i class="fa-solid fa-user me-2" style="color: var(--primary);"></i>Full Name
                                </label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg"
                                    placeholder="Enter your full name"
                                    style="border: 2px solid #e9ecef; border-radius: 0.75rem; padding: 0.75rem 1.25rem;"
                                    required>
                            </div>

                            {{-- Email --}}
                            <div class="mb-4">
                                <label for="email" class="form-label fw-semibold mb-2">
                                    <i class="fa-solid fa-envelope me-2" style="color: var(--primary);"></i>Email Address
                                </label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg"
                                    placeholder="your.email@example.com"
                                    style="border: 2px solid #e9ecef; border-radius: 0.75rem; padding: 0.75rem 1.25rem;"
                                    required>
                            </div>

                            {{-- Message --}}
                            <div class="mb-4">
                                <label for="message" class="form-label fw-semibold mb-2">
                                    <i class="fa-solid fa-message me-2" style="color: var(--primary);"></i>Your Message
                                </label>
                                <textarea name="message" id="message" rows="6" class="form-control form-control-lg"
                                    placeholder="Tell us what's on your mind..."
                                    style="border: 2px solid #e9ecef; border-radius: 0.75rem; padding: 0.75rem 1.25rem; resize: vertical;" required></textarea>
                            </div>

                            {{-- Submit Button --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-accent btn-lg py-3"
                                    style="border-radius: 0.75rem; font-weight: 600;">
                                    <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .hover-lift {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 5;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12) !important;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(20, 195, 142, 0.15);
        }

        .form-label {
            color: #2c3e50;
        }
    </style>

    {{-- CTA SECTION --}}
    <section class="py-5  overflow-hidden" data-aos="fade-up">

        {{-- Background gradient --}}
        <div class=" top-0 start-0 w-100 h-100"
            style="background: linear-gradient(135deg, rgba(20, 195, 142, 0.08) 0%, rgba(8, 145, 178, 0.08) 100%);">
        </div>

        <div class="container position-relative py-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">

                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-4"
                            style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-users fa-3x" style="color: var(--primary);"></i>
                        </div>
                    </div>

                    <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">
                        Join Our <span class="gradient-text">Community</span>
                    </h2>

                    <p class="fs-5 mb-4 text-muted" style="max-width: 600px; margin: 0 auto; line-height: 1.8;">
                        Whether you want to volunteer, participate in activities, or learn more about
                        our initiatives, there's a place for you in our community.
                    </p>

                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ route('about') }}" class="btn btn-accent btn-lg px-5 py-3 shadow">
                            <i class="fa-solid fa-heart me-2"></i>Learn About Us
                        </a>
                        <a href="{{ route('events') }}" class="btn btn-outline-primary btn-lg px-5 py-3">
                            View Events <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .btn-outline-primary {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(20, 195, 142, 0.3);
        }
    </style>

@endsection
