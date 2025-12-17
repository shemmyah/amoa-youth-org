@extends('layouts.admin')

@section('title', 'Add Event')

@section('content')

<section class="py-5">
    <div class="container">

        {{-- PAGE TITLE --}}
        <div class="text-center mb-5">
            <h2 class="fw-bold">Add New Event</h2>
            <p class="text-muted">Fill in the details below to create a new event.</p>
        </div>

        {{-- SUCCESS MESSAGE --}}
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- VALIDATION ERRORS --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- ADD EVENT FORM --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 shadow-sm">
                    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Event Title --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Event Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description" rows="4" class="form-control" required>{{ old('description') }}</textarea>
                        </div>

                        {{-- Start Date & Time --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Start Date & Time</label>
                            <input type="datetime-local" name="start_date" class="form-control" value="{{ old('start_date') }}" required>
                        </div>

                        {{-- End Date & Time --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">End Date & Time (optional)</label>
                            <input type="datetime-local" name="end_date" class="form-control" value="{{ old('end_date') }}">
                        </div>

                        {{-- Link --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Link for register (optional)</label>
                            <input type="text" name="link" class="form-control" value="{{ old('link') }}">
                        </div>

                        {{-- Images --}}
                        <div class="mb-3">
                            <label class="form-label">Event Images (max 5)</label>
                            <input type="file" name="images[]" class="form-control" accept="image/*" multiple>
                            <small class="text-muted">You can upload up to 5 images. Each image max 2MB.</small>
                        </div>

                        {{-- Submit --}}
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-outline-dark btn-lg">
                                <i class="fa-solid fa-plus me-1"></i> Add Event
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
