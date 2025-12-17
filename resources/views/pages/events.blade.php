@extends('layouts.app')

@section('title', 'Events')

@section('content')

    {{-- PAGE TITLE --}}
    <section class="text-center py-5" data-aos="fade-up">
        <h1 class="fw-bold display-5">
            Upcoming & Past <span style="color: var(--highlight)">Events</span>
        </h1>
        <p class="mt-3 fs-5 text-muted">
            Explore our programs, workshops, and activities. Get involved and participate!
        </p>
    </section>

    {{-- UPCOMING EVENTS --}}
    <section class="py-5" data-aos="fade-up">
        <h2 class="fw-bold mb-4">Upcoming Events</h2>

        <div class="row g-4">
            @forelse($upcoming as $event)
                <div class="col-md-4">
                    <div class="card p-4 h-100 d-flex flex-column">

                        {{-- Event Images --}}
                        @if ($event->images && count($event->images) > 0)
                            @if (count($event->images) > 1)
                                {{-- Carousel for multiple images --}}
                                <div id="carouselUpcoming{{ $event->id }}" class="carousel slide mb-3"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($event->images as $key => $img)
                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/' . $img) }}" class="d-block w-100"
                                                    style="height:200px; object-fit:cover;" alt="Event Image">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselUpcoming{{ $event->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselUpcoming{{ $event->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            @else
                                {{-- Single image --}}
                                <img src="{{ asset('storage/' . $event->images[0]) }}" class="img-fluid mb-3"
                                    style="height:200px; object-fit:cover;" alt="Event Image">
                            @endif
                        @endif

                        <h5 class="fw-bold">{{ $event->title }}</h5>
                        <p class="text-light">Date: {{ \Carbon\Carbon::parse($event->start_date)->format('M d, Y H:i') }}
                            @if ($event->end_date)
                                - {{ \Carbon\Carbon::parse($event->end_date)->format('M d, Y H:i') }}
                            @endif
                        </p>
                        <p style="color: #d9d2d2f1;" class="flex-grow-1">{{ $event->description }}</p>
                        @if ($event->link)
                            <a href="{{ $event->link }}" class="btn btn-accent mt-2" target="_blank">Join Now</a>
                        @endif
                    </div>
                </div>
            @empty
                <p>No upcoming events.</p>
            @endforelse
        </div>
    </section>

    {{-- PAST EVENTS --}}
    <section class="py-5" data-aos="fade-up">
        <h2 class="fw-bold mb-4">Past Events</h2>

        <div class="row g-4">
            @forelse($past as $event)
                <div class="col-md-4">
                    <div class="card p-4 h-100 d-flex flex-column text-center">

                        {{-- Event Images --}}
                        @if ($event->images && count($event->images) > 0)
                            @if (count($event->images) > 1)
                                <div id="carouselPast{{ $event->id }}" class="carousel slide mb-3"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($event->images as $key => $img)
                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/' . $img) }}" class="d-block w-100"
                                                    style="height:200px; object-fit:cover;" alt="Event Image">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselPast{{ $event->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselPast{{ $event->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            @else
                                <img src="{{ asset('storage/' . $event->images[0]) }}" class="img-fluid mb-3"
                                    style="height:200px; object-fit:cover;" alt="Event Image">
                            @endif
                        @endif

                        <h5 class="fw-bold">{{ $event->title }}</h5>
                        <p style="color: #d9d2d2f1;" class="flex-grow-1">{{ $event->description }}</p>

                        @if ($event->link)
                            <a href="{{ $event->link }}" target="_blank" class="btn btn-accent mt-2">
                                See Event Post
                            </a>
                        @endif

                    </div>
                </div>
            @empty
                <p>No past events.</p>
            @endforelse

        </div>
    </section>

@endsection
