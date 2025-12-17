@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="py-5 text-center position-relative overflow-hidden" data-aos="fade-up">

    {{-- subtle background accent --}}
    <div class="position-absolute top-0 start-50 translate-middle-x"
        style="width: 120%; height: 70%;">
    </div>

    <div class="container">

        {{-- headline --}}
        <h1 class="fw-bold display-4 mt-3" style="color: #2c3e50;">
            Empowering the <span style="color: var(--highlight)">Youth</span><br>
            To <span class="text-decoration-underline">Lead</span>,
            <span class="text-decoration-underline">Serve</span>, and
            <span class="text-decoration-underline">Inspire</span>
        </h1>

        {{-- description --}}
        <p class="mt-4 fs-5 mx-auto" style="max-width: 720px; color: #4b5563;">
            A youth-led organization dedicated to developing leadership,
            strengthening communities, and creating meaningful connections.
        </p>

        {{-- single CTA button --}}
        <div class="mt-5">
            <a href="{{ route('events') }}" class="btn btn-accent btn-lg px-5">
                Explore Events
            </a>
        </div>

    </div>
</section>


    <section id="about" class="py-3 position-relative" data-aos="fade-up">

        {{-- soft background accent --}}
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(180deg, rgba(182,206,180,0.20), transparent); z-index: -1; border-radius: 10px;">
        </div>

        <div class="container">
            <div class="row align-items-center g-5">

                {{-- TEXT --}}
                <div class="col-md-6 px-5" data-aos="fade-right" data-aos-duration="900">
                    {{-- <span class="text-uppercase fw-semibold small" style="color: var(--highlight)">
                        About Us
                    </span> --}}

                    <h2 class="fw-bold mb-3 fs-1" style="color: #2c3e50;">
                        Who We Are
                    </h2>

                    <p class="fs-5" style="color: #4b5563;">
                        We are a youth-led organization committed to empowering young people
                        through leadership programs, community outreach, and meaningful events.
                    </p>

                    <p class="text-muted">
                        Our goal is to create a safe space where the youth can grow, learn,
                        and make a positive impact in society.
                    </p>

                    <a href="{{ route('about') }}" class="btn btn-accent mt-3">
                        Learn More About Us
                    </a>
                </div>

                {{-- IMAGE --}}
                <div class="col-md-6 text-center p-5" data-aos="fade-left" data-aos-duration="900">
                    <div class="position-relative d-inline-block">

                        {{-- image --}}
                        <img src="{{ asset('images/team.jpg') }}" alt="amoa youth" class="img-fluid rounded-4 shadow-lg"
                            style="max-height: 420px; object-fit: cover;">

                        {{-- overlay badge --}}
                        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3
                                px-4 py-2 rounded-pill text-white"
                            style="backdrop-filter: blur(4px);">
                            Meet Our Team
                        </div>

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



    <section class="py-5" style="background: linear-gradient(180deg, rgba(182,206,180,0.20), transparent); z-index: -1; border-radius: 10px;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            {{-- Text Content --}}
            <div class="col-lg-6 mb-4 mb-lg-0 text-start">
                <h2 class="fw-bold display-5 mb-3" style="color: #2c3e50;">Be Part of the Change</h2>
                <p class="fs-5 mb-4" style="color: #4b5563;">
                    Take action and help shape a brighter future for the youth through leadership, service, and community engagement.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-accent btn-lg px-5 fw-bold"
                   style="transition: transform 0.3s, background-color 0.3s;"
                   onmouseover="this.style.transform='translateY(-3px)'; this.style.backgroundColor='#ffffffcc';"
                   onmouseout="this.style.transform='translateY(0)'; this.style.backgroundColor='#fff';">
                    Get Involved
                </a>
            </div>

            <div class="col-lg-4">
                <div class="overflow-hidden rounded shadow-lg" style="width: 105%;">
                    <img src="{{ asset('images/volunteer.jpg') }}" alt="Youth volunteering" 
                         class="img-fluid" 
                         style="object-fit: cover; object-position: center;">
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
