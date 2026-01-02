@extends('layouts.app')

@section('title', 'Events')

@section('content')

{{-- HERO SECTION --}}
<section class="events-hero py-5 position-relative overflow-hidden" data-aos="fade-up">
    
    {{-- Animated background shapes --}}
    <div class="position-absolute top-0 end-0 opacity-10" style="width: 350px; height: 350px; background: var(--gradient-1); border-radius: 50%; transform: translate(20%, -20%);"></div>
    <div class="position-absolute bottom-0 start-0 opacity-10" style="width: 250px; height: 250px; background: var(--gradient-1); border-radius: 50%; transform: translate(-20%, 20%);"></div>
    
    <div class="container position-relative text-center py-5">
        <div class="mb-3">
            <span class="badge rounded-pill px-4 py-2" 
                  style="background: rgba(20, 195, 142, 0.15); color: var(--primary); font-weight: 600; border: 2px solid var(--primary);">
                <i class="fa-solid fa-calendar-star me-2"></i>STAY CONNECTED
            </span>
        </div>
        
        <h1 class="display-3 fw-bold mb-4">
            Upcoming & Past <span class="gradient-text">Events</span>
        </h1>
        
        <p class="fs-5 text-muted mx-auto" style="max-width: 700px; line-height: 1.8;">
            Explore our programs, workshops, and activities. Get involved, make connections, 
            and participate in meaningful experiences that shape our community.
        </p>

        {{-- Quick Stats --}}
        <div class="d-flex gap-4 justify-content-center mt-5 flex-wrap">
            <div class="text-center">
                <h3 class="fw-bold mb-0" style="color: var(--primary);">{{ $upcoming->count() }}</h3>
                <small class="text-muted">Upcoming</small>
            </div>
            <div class="text-center">
                <h3 class="fw-bold mb-0" style="color: var(--primary);">{{ $past->count() }}</h3>
                <small class="text-muted">Past Events</small>
            </div>
            <div class="text-center">
                <h3 class="fw-bold mb-0" style="color: var(--primary);">{{ $upcoming->count() + $past->count() }}</h3>
                <small class="text-muted">Total</small>
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

    .hover-lift {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12) !important;
    }

    .event-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 1rem 1rem 0 0;
        height: 240px;
    }

    .event-image-wrapper img {
        transition: transform 0.4s ease;
    }

    .event-image-wrapper:hover img {
        transform: scale(1.1);
    }

    .event-badge {
        position: absolute;
        top: 1rem;
        left: 1rem;
        z-index: 10;
    }

    .date-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        z-index: 10;
        background: white;
        padding: 0.5rem 1rem;
        border-radius: 0.75rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .event-image-wrapper:hover .carousel-control-prev,
    .event-image-wrapper:hover .carousel-control-next {
        opacity: 1;
    }

    .carousel-control-prev {
        left: 10px;
    }

    .carousel-control-next {
        right: 10px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }
</style>

{{-- UPCOMING EVENTS --}}
<section class="py-5" data-aos="fade-up">
    <div class="container">
        
        <div class="mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                     style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                    <i class="fa-solid fa-calendar-days" style="color: var(--primary);"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-0" style="color: #2c3e50;">Upcoming Events</h2>
                    <p class="text-muted mb-0">Don't miss out on these exciting opportunities</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            @forelse($upcoming as $event)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="card border-0 shadow-sm h-100 hover-lift overflow-hidden">

                        {{-- Event Images --}}
                        @if ($event->images && count($event->images) > 0)
                            <div class="event-image-wrapper">
                                {{-- Status Badge --}}
                                <div class="event-badge">
                                    <span class="badge px-3 py-2" 
                                          style="background: linear-gradient(135deg, #14c38e, #0891b2); color: white; font-weight: 600;">
                                        <i class="fa-solid fa-clock me-1"></i>Upcoming
                                    </span>
                                </div>

                                {{-- Date Badge --}}
                                <div class="date-badge">
                                    <div class="text-center">
                                        <div class="fw-bold" style="color: var(--primary); font-size: 1.25rem;">
                                            {{ \Carbon\Carbon::parse($event->start_date)->format('d') }}
                                        </div>
                                        <small class="text-muted">{{ \Carbon\Carbon::parse($event->start_date)->format('M Y') }}</small>
                                    </div>
                                </div>

                                @if (count($event->images) > 1)
                                    {{-- Carousel for multiple images --}}
                                    <div id="carouselUpcoming{{ $event->id }}" class="carousel slide h-100">
                                        <div class="carousel-inner h-100">
                                            @foreach ($event->images as $key => $img)
                                                <div class="carousel-item h-100 {{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ $img }}" class="d-block w-100 h-100" 
                                                         style="object-fit: cover;" alt="Event Image">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselUpcoming{{ $event->id }}" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselUpcoming{{ $event->id }}" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                @else
                                    {{-- Single image --}}
                                    <img src="{{ $event->images[0] }}" class="w-100 h-100" 
                                         style="object-fit: cover;" alt="Event Image">
                                @endif
                            </div>
                        @else
                            {{-- Placeholder when no image --}}
                            <div class="event-image-wrapper d-flex align-items-center justify-content-center" 
                                 style="background: var(--gradient-1);">
                                <i class="fa-solid fa-calendar-days fa-4x text-white opacity-50"></i>
                            </div>
                        @endif

                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="fw-bold mb-3">{{ $event->title }}</h5>
                            
                            {{-- Time Info --}}
                            <div class="mb-3">
                                <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                    <i class="fa-solid fa-clock"></i>
                                    <span>{{ \Carbon\Carbon::parse($event->start_date)->format('h:i A') }}</span>
                                    @if ($event->end_date)
                                        <span>- {{ \Carbon\Carbon::parse($event->end_date)->format('h:i A') }}</span>
                                    @endif
                                </div>
                                @if($event->location)
                                    <div class="d-flex align-items-center gap-2 text-muted small">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>{{ $event->location }}</span>
                                    </div>
                                @endif
                            </div>

                            <p class="text-muted flex-grow-1 mb-4">{{ Str::limit($event->description, 120) }}</p>
                            
                            @if ($event->link)
                                <a href="{{ $event->link }}" class="btn btn-accent w-100" target="_blank">
                                    <i class="fa-solid fa-arrow-right me-2"></i>Join Now
                                </a>
                            @else
                                <button class="btn btn-outline-primary w-100" disabled>
                                    <i class="fa-solid fa-bell me-2"></i>Registration Coming Soon
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="card border-0 shadow-sm text-center p-5">
                        <div class="mb-4">
                            <i class="fa-solid fa-calendar-xmark fa-4x text-muted opacity-50"></i>
                        </div>
                        <h4 class="fw-bold mb-2">No Upcoming Events</h4>
                        <p class="text-muted mb-0">Check back soon for new events and activities!</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- PAST EVENTS --}}
<section class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        
        <div class="mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                     style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                    <i class="fa-solid fa-clock-rotate-left" style="color: var(--primary);"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-0" style="color: #2c3e50;">Past Events</h2>
                    <p class="text-muted mb-0">Look back at our memorable moments and achievements</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            @forelse($past as $event)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="card border-0 shadow-sm h-100 hover-lift overflow-hidden">

                        {{-- Event Images --}}
                        @if ($event->images && count($event->images) > 0)
                            <div class="event-image-wrapper">
                                {{-- Completed Badge --}}
                                <div class="event-badge">
                                    <span class="badge bg-secondary px-3 py-2" style="font-weight: 600;">
                                        <i class="fa-solid fa-check-circle me-1"></i>Completed
                                    </span>
                                </div>

                                @if (count($event->images) > 1)
                                    {{-- Carousel for multiple images --}}
                                    <div id="carouselPast{{ $event->id }}" class="carousel slide h-100">
                                        <div class="carousel-inner h-100">
                                            @foreach ($event->images as $key => $img)
                                                <div class="carousel-item h-100 {{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ $img }}" class="d-block w-100 h-100" 
                                                         style="object-fit: cover;" alt="Event Image">
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                        {{-- Carousel indicators for past events --}}
                                        @if(count($event->images) > 1)
                                            <div class="carousel-indicators" style="margin-bottom: 0.5rem;">
                                                @foreach ($event->images as $key => $img)
                                                    <button type="button" data-bs-target="#carouselPast{{ $event->id }}" 
                                                            data-bs-slide-to="{{ $key }}" 
                                                            class="{{ $key == 0 ? 'active' : '' }}"
                                                            aria-label="Slide {{ $key + 1 }}"></button>
                                                @endforeach
                                            </div>
                                        @endif

                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselPast{{ $event->id }}" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselPast{{ $event->id }}" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                @else
                                    {{-- Single image --}}
                                    <img src="{{ $event->images[0] }}" class="w-100 h-100" 
                                         style="object-fit: cover;" alt="Event Image">
                                @endif
                            </div>
                        @else
                            {{-- Placeholder when no image --}}
                            <div class="event-image-wrapper d-flex align-items-center justify-content-center" 
                                 style="background: linear-gradient(135deg, #6c757d, #495057);">
                                <i class="fa-solid fa-image fa-4x text-white opacity-50"></i>
                            </div>
                        @endif

                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="fw-bold mb-3">{{ $event->title }}</h5>
                            
                            {{-- Date Info --}}
                            <div class="mb-3">
                                <div class="d-flex align-items-center gap-2 text-muted small">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span>{{ \Carbon\Carbon::parse($event->start_date)->format('M d, Y') }}</span>
                                </div>
                            </div>

                            <p class="text-muted flex-grow-1 mb-4">{{ Str::limit($event->description, 120) }}</p>
                            
                            @if ($event->link)
                                <a href="{{ $event->link }}" target="_blank" class="btn btn-outline-primary w-100">
                                    <i class="fa-solid fa-external-link-alt me-2"></i>View Event Post
                                </a>
                            @else
                                <div class="text-center py-2">
                                    <small class="text-muted">
                                        <i class="fa-solid fa-circle-info me-1"></i>Event details archived
                                    </small>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="card border-0 shadow-sm text-center p-5">
                        <div class="mb-4">
                            <i class="fa-solid fa-folder-open fa-4x text-muted opacity-50"></i>
                        </div>
                        <h4 class="fw-bold mb-2">No Past Events</h4>
                        <p class="text-muted mb-0">Our event history will appear here once we complete some events.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-5 position-relative overflow-hidden" data-aos="fade-up">
    
    {{-- Background gradient --}}
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="background: linear-gradient(135deg, rgba(20, 195, 142, 0.08) 0%, rgba(8, 145, 178, 0.08) 100%);">
    </div>

    <div class="container position-relative py-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center">
                
                <div class="mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-4" 
                         style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                        <i class="fa-solid fa-bell fa-3x" style="color: var(--primary);"></i>
                    </div>
                </div>
                
                <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">
                    Never Miss an <span class="gradient-text">Event</span>
                </h2>
                
                <p class="fs-5 mb-4 text-muted" style="max-width: 600px; margin: 0 auto; line-height: 1.8;">
                    Stay updated with our latest events, workshops, and community activities. 
                    Get in touch to learn how you can participate and make a difference.
                </p>

                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg px-5 py-3 shadow">
                        <i class="fa-solid fa-paper-plane me-2"></i>Contact Us
                    </a>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary btn-lg px-5 py-3">
                        Learn More <i class="fa-solid fa-arrow-right ms-2"></i>
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

    .btn-outline-primary:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
</style>

@endsection