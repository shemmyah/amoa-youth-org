@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="text-center py-5" data-aos="fade-up">
        <h1 class="fw-bold display-5">
            Empowering the <span style="color: var(--highlight)">Youth</span><br>
            To Lead, Serve, and Inspire
        </h1>

        <p class="mt-4 fs-5 text-muted">
            A youth organization dedicated to building leadership, community service,
            and meaningful connections.
        </p>

        <div class="mt-4">
            <a href="{{ route('about') }}" class="btn btn-accent btn-lg me-2">Learn More</a>
            <a href="{{ route('events') }}" class="btn btn-outline-dark btn-lg">Our Events</a>
        </div>
    </section>

    <section id="about" class="py-5" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Who We Are</h2>
                <p>
                    We are a youth-led organization committed to empowering young people
                    through leadership programs, community outreach, and meaningful events.
                </p>
                <p>
                    Our goal is to create a safe space where the youth can grow, learn,
                    and make a positive impact in society.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <div class="position-relative d-inline-block">
                    <img src="{{ asset('images/team.jpg') }}" alt="amoa youth" class="img-fluid rounded shadow-lg"
                        style="max-height: 400px; object-fit: cover; border: 5px solid #f0f0f0;">

                    {{-- Optional overlay text --}}
                    <div class="position-absolute bottom-0 start-50 translate-middle text-white fw-bold fs-4"
                        style="text-shadow: 1px 1px 3px rgba(0,0,0,0.7);">
                        Meet Our Team
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-5" data-aos="fade-up">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card p-4 h-100 text-center">
                    <i class="fa-solid fa-bullseye fa-3x mb-3 text-success"></i>
                    <h5 class="fw-bold">Our Mission</h5>
                    <p style="color: #d9d2d2f1">
                        To empower youth through leadership, education, and service.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 h-100 text-center">
                    <i class="fa-solid fa-eye fa-3x mb-3 text-success"></i>
                    <h5 class="fw-bold">Our Vision</h5>
                    <p style="color: #d9d2d2f1">
                        A future where young people lead with integrity and purpose.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 h-100 text-center">
                    <i class="fa-solid fa-heart fa-3x mb-3 text-success"></i>
                    <h5 class="fw-bold">Our Values</h5>
                    <p style="color: #d9d2d2f1">
                        Leadership, unity, service, and respect.
                    </p>
                </div>
            </div>

        </div>
    </section>

    @if ($upcoming->count() > 0)
        <section id="events" class="py-5" data-aos="fade-up">
            <h2 class="fw-bold text-center mb-4">Upcoming Activities</h2>

            <div class="row g-4">
                @foreach ($upcoming as $event)
                    <div class="col-md-4">
                        <div class="card p-3 h-100">

                            {{-- Event Images (optional) --}}
                            @if ($event->images && count($event->images) > 0)
                                <img src="{{ asset('storage/' . $event->images[0]) }}" class="img-fluid mb-3"
                                    style="height:200px; object-fit:cover;" alt="Event Image">
                            @endif

                            <h5 class="fw-bold">{{ $event->title }}</h5>
                            <p style="color: #d9d2d2f1">{{ $event->description }}</p>
                            @if ($event->link)
                                <a href="{{ $event->link }}" class="btn btn-accent mt-2" target="_blank">Join Now</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif



    <section class="text-center py-5" data-aos="zoom-in">
        <h2 class="fw-bold mb-3">
            Be Part of the Change
        </h2>
        <p class="mb-4">
            Join us and help shape a better future for the youth.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-accent btn-lg">
            Get Involved
        </a>
    </section>

@endsection
