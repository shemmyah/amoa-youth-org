@extends('layouts.app')

@section('title', 'About Us')

@section('content')

{{-- HERO SECTION --}}
<section class="about-hero py-5 position-relative overflow-hidden" data-aos="fade-up">
    
    {{-- Animated background shapes --}}
    <div class="position-absolute top-0 end-0 opacity-10" style="width: 400px; height: 400px; background: var(--gradient-1); border-radius: 50%; transform: translate(30%, -30%);"></div>
    <div class="position-absolute bottom-0 start-0 opacity-10" style="width: 300px; height: 300px; background: var(--gradient-1); border-radius: 50%; transform: translate(-30%, 30%);"></div>
    
    <div class="container position-relative py-5">
        <div class="row align-items-center px-5">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="mb-3">
                    <span class="badge rounded-pill px-4 py-2" 
                          style="background: rgba(20, 195, 142, 0.15); color: var(--primary); font-weight: 600; border: 2px solid var(--primary);">
                        <i class="fa-solid fa-heart me-2"></i>OUR STORY
                    </span>
                </div>
                
                <h1 class="display-3 fw-bold mb-4">
                    About <span class="gradient-text">Amoa Youth</span>
                </h1>
                
                <p class="fs-5 text-muted mb-4" style="line-height: 1.8;">
                    Empowering youth to lead, serve, and grow together for a better community. 
                    We believe in the power of young people to create positive change.
                </p>

                <div class="d-flex gap-4 mb-4">
                    <div>
                        <h3 class="fw-bold mb-0" style="color: var(--primary);">5+</h3>
                        <small class="text-muted">Years Active</small>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-0" style="color: var(--primary);">500+</h3>
                        <small class="text-muted">Members</small>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-0" style="color: var(--primary);">50+</h3>
                        <small class="text-muted">Events</small>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="btn btn-accent btn-lg px-5 shadow">
                    <i class="fa-solid fa-paper-plane me-2"></i>Join Our Community
                </a>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="{{ asset('images/team3.jpg') }}" 
                         alt="Amoa Youth Team" 
                         class="img-fluid rounded-4 shadow-lg w-100" 
                         style="object-fit: cover; max-height: 500px;">
                    
                    {{-- Floating badge --}}
                    {{-- <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 bg-transparent rounded-4 shadow-lg p-4" 
                         style="animation: floatBadge 4s ease-in-out infinite;">
                        <div class="text-center">
                            <i class="fa-solid fa-users fa-2x mb-2" style="color: var(--primary);"></i>
                            <h5 class="fw-bold mb-0" style="color: var(--primary);">United for Change</h5>
                            <small class="text-muted">Building Tomorrow Together</small>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .gradient-text {
        background: var(--gradient-1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    @keyframes floatBadge {
        0%, 100% { transform: translate(-50%, 0); }
        50% { transform: translate(-50%, -10px); }
    }
</style>

{{-- OUR JOURNEY --}}
<section class="py-5" data-aos="fade-up">
    <div class="container">
        
        <div class="text-center mb-5">
            <span class="badge rounded-pill px-3 py-2 mb-3" 
                  style="background: rgba(20, 195, 142, 0.1); color: var(--primary); font-weight: 600;">
                THE JOURNEY
            </span>
            <h2 class="display-5 fw-bold" style="color: #2c3e50;">How We Got Here</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 hover-lift text-center p-4">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 90px; height: 90px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-seedling fa-2x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span class="badge bg-primary rounded-pill px-3 py-1">Phase 1</span>
                    </div>
                    <h5 class="fw-bold mb-3">The Beginning</h5>
                    <p class="text-muted mb-0">
                        Founded with a vision to give youth a voice and a platform to grow, 
                        learn, and make a difference in their communities.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 hover-lift text-center p-4">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 90px; height: 90px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-users fa-2x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span class="badge bg-primary rounded-pill px-3 py-1">Phase 2</span>
                    </div>
                    <h5 class="fw-bold mb-3">Building Community</h5>
                    <p class="text-muted mb-0">
                        Developed comprehensive programs focused on leadership development, 
                        community service, and collaborative initiatives.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 hover-lift text-center p-4">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 90px; height: 90px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-rocket fa-2x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span class="badge bg-primary rounded-pill px-3 py-1">Future</span>
                    </div>
                    <h5 class="fw-bold mb-3">Looking Ahead</h5>
                    <p class="text-muted mb-0">
                        Preparing the next generation of responsible leaders who will 
                        continue to drive positive change in our communities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hover-lift {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12) !important;
    }
</style>

{{-- MISSION & VISION --}}
<section class="py-5 px-5 bg-light" data-aos="fade-up">
    <div class="container">
        
        <div class="text-center mb-5">
            <span class="badge rounded-pill px-3 py-2 mb-3" 
                  style="background: rgba(20, 195, 142, 0.1); color: var(--primary); font-weight: 600;">
                OUR PURPOSE
            </span>
            <h2 class="display-5 fw-bold" style="color: #2c3e50;">What Drives Us</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-4" 
                                 style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                                <i class="fa-solid fa-bullseye fa-2x" style="color: var(--primary);"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="fw-bold mb-3">Our Mission</h4>
                            <p class="text-muted mb-0" style="line-height: 1.8;">
                                To empower young individuals through leadership development, volunteerism,
                                and inclusive community programs that inspire positive change and create 
                                lasting impact in society.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-4" 
                                 style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                                <i class="fa-solid fa-eye fa-2x" style="color: var(--primary);"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="fw-bold mb-3">Our Vision</h4>
                            <p class="text-muted mb-0" style="line-height: 1.8;">
                                A united community led by empowered youth who act with integrity,
                                compassion, and responsibility, shaping a brighter future for all 
                                generations to come.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CORE VALUES --}}
<section class="py-5" data-aos="fade-up">
    <div class="container">
        
        <div class="text-center mb-5">
            <span class="badge rounded-pill px-3 py-2 mb-3" 
                  style="background: rgba(20, 195, 142, 0.1); color: var(--primary); font-weight: 600;">
                OUR FOUNDATION
            </span>
            <h2 class="display-5 fw-bold mb-3" style="color: #2c3e50;">Core Values</h2>
            <p class="text-muted fs-5">The principles that guide everything we do</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 100px; height: 100px; background: linear-gradient(135deg, #14c38e, #0891b2);">
                            <i class="fa-solid fa-user-tie fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Leadership</h5>
                    <p class="text-muted mb-0">
                        Taking responsibility and initiative to guide others toward positive outcomes
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 100px; height: 100px; background: linear-gradient(135deg, #14c38e, #0891b2);">
                            <i class="fa-solid fa-hand-holding-heart fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Service</h5>
                    <p class="text-muted mb-0">
                        Meaningful community action that creates lasting impact and benefits others
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 100px; height: 100px; background: linear-gradient(135deg, #14c38e, #0891b2);">
                            <i class="fa-solid fa-scale-balanced fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Integrity</h5>
                    <p class="text-muted mb-0">
                        Honesty and transparency in all our actions and decisions
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 100px; height: 100px; background: linear-gradient(135deg, #14c38e, #0891b2);">
                            <i class="fa-solid fa-people-arrows fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Unity</h5>
                    <p class="text-muted mb-0">
                        Inclusivity and teamwork that brings diverse people together
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- OFFICERS & TEAM --}}
<section class="py-5 px-5 bg-light" data-aos="fade-up">
    <div class="container">
        
        <div class="text-center mb-5">
            <span class="badge rounded-pill px-3 py-2 mb-3" 
                  style="background: rgba(20, 195, 142, 0.1); color: var(--primary); font-weight: 600;">
                OUR TEAM
            </span>
            <h2 class="display-5 fw-bold mb-3" style="color: #2c3e50;">Leadership Team</h2>
            <p class="text-muted fs-5">Meet the dedicated individuals guiding our organization</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient mx-auto d-flex align-items-center justify-content-center" 
                             style="width: 120px; height: 120px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-user-tie fa-3x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-primary rounded-pill px-3 py-1">Executive</span>
                    </div>
                    <h5 class="fw-bold mb-2">President</h5>
                    <p class="text-muted small mb-0">Overall Leadership & Strategic Direction</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient mx-auto d-flex align-items-center justify-content-center" 
                             style="width: 120px; height: 120px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-user-check fa-3x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-primary rounded-pill px-3 py-1">Executive</span>
                    </div>
                    <h5 class="fw-bold mb-2">Vice President</h5>
                    <p class="text-muted small mb-0">Program Support & Coordination</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient mx-auto d-flex align-items-center justify-content-center" 
                             style="width: 120px; height: 120px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-file-lines fa-3x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-primary rounded-pill px-3 py-1">Administration</span>
                    </div>
                    <h5 class="fw-bold mb-2">Secretary</h5>
                    <p class="text-muted small mb-0">Documentation & Record Keeping</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient mx-auto d-flex align-items-center justify-content-center" 
                             style="width: 120px; height: 120px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-coins fa-3x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-primary rounded-pill px-3 py-1">Finance</span>
                    </div>
                    <h5 class="fw-bold mb-2">Treasurer</h5>
                    <p class="text-muted small mb-0">Financial Management & Reporting</p>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm p-4" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-2 text-center">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                         style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                        <i class="fa-solid fa-users-gear fa-2x" style="color: var(--primary);"></i>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h5 class="fw-bold mb-2">Collaborative Leadership</h5>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        Our officers work closely with committee heads, coordinators, and volunteers to ensure
                        transparent leadership and effective implementation of programs that benefit our entire community.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-5 px-5 position-relative overflow-hidden" data-aos="fade-up">
    
    {{-- Background gradient --}}
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background: linear-gradient(135deg, rgba(20, 195, 142, 0.1) 0%, rgba(8, 145, 178, 0.1) 100%);">
    </div>

    <div class="container position-relative py-5">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-7" data-aos="fade-right">
                <div class="mb-3">
                    <span class="badge rounded-pill px-4 py-2" 
                          style="background: white; color: var(--primary); font-weight: 600; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <i class="fa-solid fa-star me-2"></i>BE PART OF SOMETHING BIGGER
                    </span>
                </div>
                
                <h2 class="display-4 fw-bold mb-4" style="color: #2c3e50;">
                    Ready to <span class="gradient-text">Get Involved</span>?
                </h2>
                
                <p class="fs-5 mb-4 text-muted" style="line-height: 1.8;">
                    Whether you want to volunteer, participate in activities, or simply learn more about
                    our initiatives, we welcome your interest and involvement. Together, we can create 
                    meaningful change in our communities.
                </p>

                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg px-5 py-3 shadow">
                        <i class="fa-solid fa-paper-plane me-2"></i>Contact Us
                    </a>
                    <a href="{{ route('events') }}" class="btn btn-outline-primary btn-lg px-5 py-3">
                        View Events <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left">
                <div class="text-center">
                    <div class="position-relative d-inline-block">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 300px; height: 300px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-handshake fa-5x" style="color: var(--primary);"></i>
                        </div>
                        
                        {{-- Floating elements --}}
                        <div class="position-absolute top-0 end-0 bg-white rounded-circle shadow-lg p-3" 
                             style="animation: floatBadge 3s ease-in-out infinite;">
                            <i class="fa-solid fa-heart fa-2x text-danger"></i>
                        </div>
                        <div class="position-absolute bottom-0 start-0 bg-white rounded-circle shadow-lg p-3" 
                             style="animation: floatBadge 3s ease-in-out infinite; animation-delay: 1.5s;">
                            <i class="fa-solid fa-users fa-2x" style="color: var(--primary);"></i>
                        </div>
                    </div>
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