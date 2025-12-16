@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

{{-- PAGE TITLE --}}
<section class="text-center py-5" data-aos="fade-up">
    <h1 class="fw-bold display-5">
        Get in <span style="color: var(--highlight)">Touch</span>
    </h1>
    <p class="mt-3 fs-5 text-muted">
        Have questions, suggestions, or want to join? Send us a message!
    </p>
</section>

{{-- SUCCESS MESSAGE --}}
@if(session('success'))
<section class="py-3">
    <div class="container d-flex justify-content-center">
        <div class="alert alert-success success-alert d-flex align-items-center px-4 py-3" role="alert"
             data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
            <i class="fas fa-check-circle me-2"></i>
            <span>{{ session('success') }}</span>
        </div>
    </div>
</section>

<style>
.success-alert {
    background-color: #d4edda; /* Soft green */
    color: #155724;
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    font-weight: 500;
    max-width: 600px;
    width: 100%;
}
.success-alert i {
    font-size: 1.2rem;
}
</style>
@endif


{{-- CONTACT FORM --}}
<section class="py-5" data-aos="fade-up">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h4 class="fw-bold mb-4 text-center">Contact Form</h4>

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf

                    {{-- Name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    {{-- Message --}}
                    <div class="mb-3">
                        <label for="message" class="form-label fw-semibold">Message</label>
                        <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-center">
                        <button type="submit" class="btn btn-accent btn-lg">Send Message</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

{{-- CONNECT TO SOCIALS --}}
<section class="py-5 text-center" data-aos="fade-up">
    <h5 class="fw-bold mb-4">Connect With Us</h5>
    <a href="https://www.facebook.com/profile.php?id=61563942009546" target="_blank" 
       class="facebook-btn d-inline-flex align-items-center px-4 py-3 text-decoration-none">
        <i class="fab fa-facebook-f me-3"></i> Visit our Facebook Page
    </a>
</section>

<style>
.facebook-btn {
    background: #1877F2; /* Facebook blue */
    color: #fff;
    font-weight: 600;
    font-size: 1.1rem;
    border-radius: 50px; /* Rounded pill shape */
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.facebook-btn:hover {
    background: #145dbf; /* Darker blue on hover */
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.25);
}
</style>



@endsection
