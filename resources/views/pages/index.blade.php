@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section position-relative overflow-hidden" data-aos="fade-up">
    
    {{-- Animated background elements --}}
    <div class="hero-bg-shape shape-1"></div>
    <div class="hero-bg-shape shape-2"></div>
    <div class="hero-bg-shape shape-3"></div>
    
    <div class="container py-2 px-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-7 text-center text-lg-start mb-5 mb-lg-0">
                
                {{-- Badge --}}
                <div class="d-inline-block mb-4" data-aos="fade-right" data-aos-delay="100">
                    <span class="badge rounded-pill px-4 py-2" 
                          style="background: linear-gradient(135deg, rgba(20, 195, 142, 0.15), rgba(8, 145, 178, 0.15)); 
                                 color: var(--primary); 
                                 font-size: 0.9rem; 
                                 font-weight: 600;
                                 border: 2px solid var(--primary);">
                        <i class="fa-solid fa-star me-2"></i>Building Tomorrow's Leaders
                    </span>
                </div>

                {{-- Main Headline --}}
                <h1 class="display-3 fw-bold mb-4 hero-title" data-aos="fade-right" data-aos-delay="200">
                    Empowering the <span class="gradient-text">Youth</span><br>
                    To Lead, Serve, and Inspire
                </h1>

                {{-- Description --}}
                <p class="fs-5 mb-4 text-muted lh-lg" style="max-width: 600px;" data-aos="fade-right" data-aos-delay="300">
                    A youth-led organization dedicated to developing leadership,
                    strengthening communities, and creating meaningful connections.
                </p>

                {{-- CTA Buttons --}}
                <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="400">
                    <a href="{{ route('events') }}" class="btn btn-accent btn-lg px-5 py-3 shadow">
                        <i class="fa-solid fa-calendar-days me-2"></i>Explore Events
                    </a>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary btn-lg px-5 py-3">
                        Learn More <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>

            </div>

            {{-- Hero Image --}}
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="300">
                <div class="hero-image-wrapper position-relative">
                    <div class="floating-card">
                        <img src="{{ asset('images/team2.jpg') }}" alt="Youth team" 
                             class="img-fluid rounded-4 shadow-lg w-100" 
                             style="object-fit: cover; max-height: 500px;">
                        
                        {{-- Floating stats badge --}}
                        <div class="position-absolute floating-badge" 
                             style="bottom: 20px; left: 20px; background: white; padding: 10px; border-radius: 1rem; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-gradient rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: var(--gradient-1);">
                                    <i class="fa-solid fa-users fs-4 bg-gradient" ></i>
                                    
                                </div>
                                <div>
                                    <h4 class="mb-0 fw-bold" style="color: var(--primary);">10+</h4>
                                    <small class="text-muted">Active Members</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hero-section {
        padding: 4rem 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 50%, #f8f9fa 100%);
        position: relative;
    }

    .hero-bg-shape {
        position: absolute;
        border-radius: 50%;
        background: var(--gradient-1);
        opacity: 0.08;
        animation: float 20s infinite ease-in-out;
    }

    .shape-1 {
        width: 400px;
        height: 400px;
        top: -100px;
        right: -100px;
    }

    .shape-2 {
        width: 300px;
        height: 300px;
        bottom: 50px;
        left: -50px;
        animation-delay: 5s;
    }

    .shape-3 {
        width: 200px;
        height: 200px;
        top: 50%;
        left: 30%;
        animation-delay: 10s;
    }

    .gradient-text {
        background: var(--gradient-1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

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

    .floating-card {
        animation: floatSlow 6s ease-in-out infinite;
    }

    .floating-badge {
        animation: floatBadge 4s ease-in-out infinite;
    }

    @keyframes floatSlow {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes floatBadge {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .min-vh-50 {
        min-height: 50vh;
    }
</style>

{{-- ABOUT SECTION --}}
<section id="about" class="py-5 position-relative" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- IMAGE --}}
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="900">
                <div class="position-relative">
                    <img src="{{ asset('images/team.jpg') }}" alt="amoa youth" 
                         class="img-fluid rounded-4 shadow-lg w-100" 
                         style="max-height: 500px; object-fit: cover;">
                    
                    {{-- Decorative element --}}
                    <div class="position-absolute bg-primary rounded-4" 
                         style="width: 100%; height: 100%; top: 20px; left: 20px; z-index: -1; opacity: 0.1;">
                    </div>
                </div>
            </div>

            {{-- TEXT --}}
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="900">
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-2" 
                          style="background: rgba(20, 195, 142, 0.1); color: var(--primary); font-weight: 600;">
                        ABOUT US
                    </span>
                </div>

                <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">
                    Who We Are
                </h2>

                <p class="fs-5 mb-3" style="color: #4b5563; line-height: 1.8;">
                    We are a youth-led organization committed to empowering young people
                    through leadership programs, community outreach, and meaningful events.
                </p>

                <p class="text-muted mb-4" style="line-height: 1.8;">
                    Our goal is to create a safe space where the youth can grow, learn,
                    and make a positive impact in society.
                </p>

                {{-- Feature list --}}
                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-check-circle text-success fs-5"></i>
                            <span class="fw-semibold">Youth Leadership</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-check-circle text-success fs-5"></i>
                            <span class="fw-semibold">Community Impact</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-check-circle text-success fs-5"></i>
                            <span class="fw-semibold">Mentorship Programs</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-check-circle text-success fs-5"></i>
                            <span class="fw-semibold">Regular Events</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="btn btn-accent btn-lg px-5 shadow">
                    Learn More About Us <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- MISSION, VISION, VALUES --}}
<section class="py-5 px-5 bg-light" data-aos="fade-up">
    <div class="container">
        
        <div class="text-center mb-5">
            <span class="badge rounded-pill px-3 py-2 mb-3" 
                  style="background: rgba(20, 195, 142, 0.1); color: var(--primary); font-weight: 600;">
                OUR FOUNDATION
            </span>
            <h2 class="display-5 fw-bold" style="color: #2c3e50;">What Drives Us Forward</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card p-4 h-100 text-center border-0 shadow-sm hover-lift">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-bullseye fa-2x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Our Mission</h5>
                    <p class="text-muted">
                        To empower youth through leadership, education, and service, creating positive change in our communities.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card p-4 h-100 text-center border-0 shadow-sm hover-lift">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-eye fa-2x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Our Vision</h5>
                    <p class="text-muted">
                        A future where young people lead with integrity, purpose, and compassion for all.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card p-4 h-100 text-center border-0 shadow-sm hover-lift">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                            <i class="fa-solid fa-heart fa-2x" style="color: var(--primary);"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Our Values</h5>
                    <p class="text-muted">
                        Leadership, unity, service, and respect guide everything we do.
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

{{-- UPCOMING EVENTS --}}
@if ($upcoming->count() > 0)
    <section id="events" class="py-5" data-aos="fade-up">
        <div class="container">
            
            <div class="text-center mb-5">
                <span class="badge rounded-pill px-3 py-2 mb-3" 
                      style="background: rgba(20, 195, 142, 0.1); color: var(--primary); font-weight: 600;">
                    WHAT'S HAPPENING
                </span>
                <h2 class="display-5 fw-bold" style="color: #2c3e50;">Upcoming Activities</h2>
                <p class="text-muted fs-5 mt-3">Join us for exciting events and opportunities to make a difference</p>
            </div>

            <div class="row g-4">
                @foreach ($upcoming as $event)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card h-100 border-0 shadow-sm hover-lift overflow-hidden">
                            
                            {{-- Event Image --}}
                            @if ($event->images && count($event->images) > 0)
                                <div class="position-relative overflow-hidden" style="height: 240px;">
                                    <img src="{{ $event->images[0] }}" 
                                         class="img-fluid w-100 h-100" 
                                         style="object-fit: cover; transition: transform 0.4s ease;"
                                         onmouseover="this.style.transform='scale(1.1)'"
                                         onmouseout="this.style.transform='scale(1)'"
                                         alt="Event Image">
                                    
                                    {{-- Date badge --}}
                                    <div class="position-absolute top-0 start-0 m-3">
                                        <span class="badge bg-white text-dark px-3 py-2 shadow-sm">
                                            <i class="fa-solid fa-calendar-day me-1"></i>
                                            {{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}
                                        </span>
                                    </div>
                                </div>
                            @else
                                <div class="bg-gradient d-flex align-items-center justify-content-center" 
                                     style="height: 240px; background: var(--gradient-1);">
                                    <i class="fa-solid fa-calendar-days fa-4x text-white opacity-50"></i>
                                </div>
                            @endif

                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-3">{{ $event->title }}</h5>
                                <p class="text-muted mb-4">{{ Str::limit($event->description, 100) }}</p>
                                
                                @if ($event->link)
                                    <a href="{{ $event->link }}" 
                                       class="btn btn-accent w-100" 
                                       target="_blank">
                                        <i class="fa-solid fa-arrow-right me-2"></i>Join Now
                                    </a>
                                @else
                                    <button class="btn btn-outline-primary w-100" disabled>
                                        Coming Soon
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- View all events button --}}
            <div class="text-center mt-5">
                <a href="{{ route('events') }}" class="btn btn-outline-primary btn-lg px-5">
                    View All Events <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>

        </div>
    </section>
@endif

{{-- CTA SECTION --}}
<section class="py-5 position-relative overflow-hidden" data-aos="fade-up">
    
    {{-- Background gradient --}}
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background: linear-gradient(135deg, rgba(20, 195, 142, 0.1) 0%, rgba(8, 145, 178, 0.1) 100%); z-index: 0;">
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center g-5">
            
            {{-- Text Content --}}
            <div class="col-lg-7 px-5" data-aos="fade-right">
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-2" 
                          style="background: white; color: var(--primary); font-weight: 600; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        JOIN US TODAY
                    </span>
                </div>
                
                <h2 class="display-4 fw-bold mb-4" style="color: #2c3e50;">
                    Be Part of the <span class="gradient-text">Change</span>
                </h2>
                
                <p class="fs-5 mb-4 text-muted" style="line-height: 1.8;">
                    Take action and help shape a brighter future for the youth through leadership, 
                    service, and community engagement. Together, we can make a lasting impact.
                </p>

                {{-- Stats --}}
                <div class="row g-4 mb-4">
                    <div class="col-6 col-md-4">
                        <h3 class="fw-bold mb-0" style="color: var(--primary);">10+</h3>
                        <small class="text-muted">Active Members</small>
                    </div>
                    <div class="col-6 col-md-4">
                        <h3 class="fw-bold mb-0" style="color: var(--primary);">2+</h3>
                        <small class="text-muted">Events Held</small>
                    </div>
                    <div class="col-6 col-md-4">
                        <h3 class="fw-bold mb-0" style="color: var(--primary);">1</h3>
                        <small class="text-muted">Community</small>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="btn btn-accent btn-lg px-5 py-3 shadow">
                    <i class="fa-solid fa-rocket me-2"></i>Get Involved Today
                </a>
            </div>

            {{-- Image --}}
            <div class="col-lg-5 px-5" data-aos="fade-left">
                <div class="position-relative">
                    <img src="{{ asset('images/volunteer.jpg') }}" 
                         alt="Youth volunteering" 
                         class="img-fluid rounded-4 shadow-lg w-100" 
                         style="object-fit: cover; max-height: 450px;">
                    
                    {{-- Decorative element --}}
                    <div class="position-absolute rounded-4" 
                         style="width: 100%; height: 100%; top: -20px; right: -20px; z-index: -1; background: var(--gradient-1); opacity: 0.15;">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection