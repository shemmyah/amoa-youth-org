@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<section class="py-5 mb-5 text-center position-relative overflow-hidden" data-aos="fade-up">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at top, rgba(47,127,122,0.08), transparent 60%);"></div>
    <div class="container position-relative">
        <div class="mb-3">
            {{-- <i class="fa-solid fa-people-group fa-3x text-success"></i> --}}
        </div>
        <h1 class="fw-bold display-6 mb-2">About <span style="color: var(--highlight)">{{ config('app.name') }}</span></h1>
        <p class="text-muted mx-auto" style="max-width: 720px;">
            Empowering youth to lead, serve, and grow together for a better community.
        </p>
    </div>
</section>

<section class="mb-5" data-aos="fade-up">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h4 class="fw-bold mb-4">
                <i class="fa-solid fa-book-open me-2" style="color: #14c38e;"></i>
                Our Journey
            </h4>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fa-solid fa-seedling fa-2x mb-2 text-success"></i>
                        <h6 class="fw-bold">The Beginning</h6>
                        <p class="small" style="color: #d9d2d2f1">Founded to give youth a voice and a platform to grow.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fa-solid fa-users fa-2x mb-2 text-success"></i>
                        <h6 class="fw-bold">Building Community</h6>
                        <p class="small" style="color: #d9d2d2f1">Programs focused on leadership, service, and collaboration.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fa-solid fa-rocket fa-2x mb-2 text-success"></i>
                        <h6 class="fw-bold">Looking Ahead</h6>
                        <p class="small" style="color: #d9d2d2f1">Preparing the next generation of responsible leaders.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5" data-aos="fade-up">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-3">
                        <i class="fa-solid fa-bullseye me-2" style="color: #14c38e;"></i>
                        Our Mission
                    </h4>
                    <p class="mb-0" style="color: #d9d2d2f1">
                        To empower young individuals through leadership development, volunteerism,
                        and inclusive community programs that inspire positive change.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-3">
                        <i class="fa-solid fa-eye me-2" style="color: #14c38e;"></i>
                        Our Vision
                    </h4>
                    <p class="mb-0" style="color: #d9d2d2f1">
                        A united community led by empowered youth who act with integrity,
                        compassion, and responsibility.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5" data-aos="fade-up">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h4 class="fw-bold text-center mb-4">
                <i class="fa-solid fa-compass me-2" style="color: #14c38e;"></i>
                Our Core Values
            </h4>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="text-center p-3 rounded bg-light h-100">
                        <i class="fa-solid fa-user-tie fa-lg mb-2 text-success"></i>
                        <strong class="d-block text-dark">Leadership</strong>
                        <small class="text-dark">Responsibility and initiative</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 rounded bg-light h-100">
                        <i class="fa-solid fa-hand-holding-heart fa-lg mb-2 text-success"></i>
                        <strong class="d-block text-dark">Service</strong>
                        <small class="text-dark">Meaningful community action</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 rounded bg-light h-100">
                        <i class="fa-solid fa-scale-balanced fa-lg mb-2 text-success"></i>
                        <strong class="d-block text-dark">Integrity</strong>
                        <small class="text-dark">Honesty and transparency</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3 rounded bg-light h-100">
                        <i class="fa-solid fa-people-arrows fa-lg mb-2 text-success"></i>
                        <strong class="d-block text-dark">Unity</strong>
                        <small class="text-dark">Inclusivity and teamwork</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5" data-aos="fade-up">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h4 class="fw-bold text-center mb-4">
                <i class="fa-solid fa-user-group me-2" style="color: #14c38e;"></i>
                Officers & Team
            </h4>

            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="text-center">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width:120px;height:120px;">
                            <i class="fa-solid fa-user-tie fa-2x text-success"></i>
                        </div>
                        <h6 class="fw-bold mb-0">President</h6>
                        <small style="color: #d9d2d2f1">Overall Leadership</small>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="text-center">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width:120px;height:120px;">
                            <i class="fa-solid fa-user-check fa-2x text-success"></i>
                        </div>
                        <h6 class="fw-bold mb-0">Vice President</h6>
                        <small style="color: #d9d2d2f1">Program Support</small>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="text-center">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width:120px;height:120px;">
                            <i class="fa-solid fa-file-lines fa-2x text-success"></i>
                        </div>
                        <h6 class="fw-bold mb-0">Secretary</h6>
                        <small style="color: #d9d2d2f1">Documentation</small>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="text-center">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width:120px;height:120px;">
                            <i class="fa-solid fa-coins fa-2x text-success"></i>
                        </div>
                        <h6 class="fw-bold mb-0">Treasurer</h6>
                        <small style="color: #d9d2d2f1">Financial Management</small>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <p class="text-center mb-0" style="max-width:700px; margin:auto; color: #d9d2d2f1;">
                Our officers work closely with committee heads, coordinators, and volunteers to ensure
                transparent leadership and effective implementation of programs.
            </p>
        </div>
    </div>
</section>

<section class="mb-5 text-center" data-aos="fade-up">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-5">
            <i class="fa-solid fa-handshake fa-2x mb-3" style="color: #14c38e;"></i>
            <h4 class="fw-bold mb-2">Get Involved</h4>
            <p class="mb-4" style="max-width:650px; margin:auto; color: #d9d2d2f1;">
                Whether you want to volunteer, participate in activities, or simply learn more about
                our initiatives, we welcome your interest and involvement.
            </p>
            <a href="{{ route('contact') }}" class="btn btn-accent">
                Contact Us
            </a>
        </div>
    </div>
</section>

@endsection
