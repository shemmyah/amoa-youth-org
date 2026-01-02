@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')

<section class="py-4">
    <div class="container-fluid">

        {{-- Welcome Header --}}
        <div class="row mb-4" data-aos="fade-down">
            <div class="col-12">
                <div class="card border-0 shadow-sm p-4" style="background: linear-gradient(135deg, var(--gradient-1)); color: white; border-radius: 1rem;">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-2">
                                <i class="fa-solid fa-gauge-high me-2"></i>Welcome, Admin!
                            </h2>
                            <p class="mb-0 opacity-90">Manage your events and monitor upcoming & past programs from here.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                            <button class="btn btn-light btn-lg px-4" data-bs-toggle="modal" data-bs-target="#createEventModal" style="border-radius: 50px; font-weight: 600;">
                                <i class="fa-solid fa-plus me-2"></i>Create Event
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="row g-4 mb-4">
            
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 hover-lift" style="border-radius: 1rem;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                                 style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(20, 195, 142, 0.2), rgba(8, 145, 178, 0.2));">
                                <i class="fa-solid fa-calendar-days fa-xl" style="color: var(--primary);"></i>
                            </div>
                            <span class="badge bg-success px-3 py-2">Active</span>
                        </div>
                        <h3 class="fw-bold mb-1" style="color: var(--primary);">
                            {{ \App\Models\Event::where('start_date', '>=', now())->count() }}
                        </h3>
                        <p class="text-muted mb-0">Upcoming Events</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 hover-lift" style="border-radius: 1rem;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                                 style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(108, 117, 125, 0.2), rgba(73, 80, 87, 0.2));">
                                <i class="fa-solid fa-calendar-check fa-xl text-secondary"></i>
                            </div>
                            <span class="badge bg-secondary px-3 py-2">Completed</span>
                        </div>
                        <h3 class="fw-bold mb-1 text-secondary">
                            {{ \App\Models\Event::where('start_date', '<', now())->count() }}
                        </h3>
                        <p class="text-muted mb-0">Past Events</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 hover-lift" style="border-radius: 1rem;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                                 style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(13, 110, 253, 0.2), rgba(10, 88, 202, 0.2));">
                                <i class="fa-solid fa-list-check fa-xl text-primary"></i>
                            </div>
                            <span class="badge bg-primary px-3 py-2">Total</span>
                        </div>
                        <h3 class="fw-bold mb-1 text-primary">
                            {{ \App\Models\Event::count() }}
                        </h3>
                        <p class="text-muted mb-0">All Events</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100 hover-lift" style="border-radius: 1rem;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
                                 style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(253, 126, 20, 0.2), rgba(253, 95, 0, 0.2));">
                                <i class="fa-solid fa-clock fa-xl text-warning"></i>
                            </div>
                            <span class="badge bg-warning text-dark px-3 py-2">This Month</span>
                        </div>
                        <h3 class="fw-bold mb-1 text-warning">
                            {{ \App\Models\Event::whereMonth('start_date', now()->month)->count() }}
                        </h3>
                        <p class="text-muted mb-0">Monthly Events</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- All Events Table --}}
        <div class="card border-0 shadow-sm" style="border-radius: 1rem;" data-aos="fade-up">
            <div class="card-header bg-white border-0 p-4" style="border-radius: 1rem 1rem 0 0;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="fw-bold mb-1">All Events</h5>
                        <p class="text-muted small mb-0">Manage and organize your events</p>
                    </div>
                    <div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEventModal">
                            <i class="fa-solid fa-plus me-2"></i>Add New
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead style="background: #f8f9fa;">
                            <tr>
                                <th class="py-3 px-4 fw-semibold">Event Title</th>
                                <th class="py-3 px-4 fw-semibold">Start Date</th>
                                <th class="py-3 px-4 fw-semibold">End Date</th>
                                <th class="py-3 px-4 fw-semibold">Status</th>
                                <th class="py-3 px-4 fw-semibold">Link</th>
                                <th class="py-3 px-4 fw-semibold text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (\App\Models\Event::orderBy('start_date', 'desc')->get() as $event)
                                <tr>
                                    <td class="px-4 py-3">
                                        <div class="d-flex align-items-center gap-3">
                                            @if ($event->images && count($event->images) > 0)
                                                <img src="{{ $event->images[0] }}" alt="Event" 
                                                     class="rounded" 
                                                     style="width: 50px; height: 50px; object-fit: cover;">
                                            @else
                                                <div class="rounded d-flex align-items-center justify-content-center" 
                                                     style="width: 50px; height: 50px; background: var(--gradient-1);">
                                                    <i class="fa-solid fa-calendar text-white"></i>
                                                </div>
                                            @endif
                                            <div>
                                                <div class="fw-semibold">{{ $event->title }}</div>
                                                <small class="text-muted">{{ Str::limit($event->description, 50) }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="small">
                                            <i class="fa-solid fa-calendar-day me-1 text-muted"></i>
                                            {{ \Carbon\Carbon::parse($event->start_date)->format('M d, Y') }}
                                        </div>
                                        <div class="small text-muted">
                                            <i class="fa-solid fa-clock me-1"></i>
                                            {{ \Carbon\Carbon::parse($event->start_date)->format('h:i A') }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        @if($event->end_date)
                                            <div class="small">
                                                <i class="fa-solid fa-calendar-day me-1 text-muted"></i>
                                                {{ \Carbon\Carbon::parse($event->end_date)->format('M d, Y') }}
                                            </div>
                                            <div class="small text-muted">
                                                <i class="fa-solid fa-clock me-1"></i>
                                                {{ \Carbon\Carbon::parse($event->end_date)->format('h:i A') }}
                                            </div>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">
                                        @if(\Carbon\Carbon::parse($event->start_date)->isFuture())
                                            <span class="badge bg-success px-3 py-2">
                                                <i class="fa-solid fa-clock me-1"></i>Upcoming
                                            </span>
                                        @else
                                            <span class="badge bg-secondary px-3 py-2">
                                                <i class="fa-solid fa-check me-1"></i>Completed
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">
                                        @if ($event->link)
                                            <a href="{{ $event->link }}" target="_blank" 
                                               class="btn btn-sm btn-outline-primary">
                                                <i class="fa-solid fa-external-link-alt me-1"></i>Visit
                                            </a>
                                        @else
                                            <span class="text-muted small">No link</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <div class="d-flex gap-2 justify-content-center">
                                            <button class="btn btn-sm btn-warning" 
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editEventModal{{ $event->id }}"
                                                    title="Edit Event">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" 
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteEventModal{{ $event->id }}"
                                                    title="Delete Event">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                {{-- EDIT EVENT MODAL --}}
                                <div class="modal fade" id="editEventModal{{ $event->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="border-radius: 1rem;">
                                            <div class="modal-header border-0 pb-0">
                                                <div>
                                                    <h5 class="modal-title fw-bold">Edit Event</h5>
                                                    <p class="text-muted small mb-0">Update event information</p>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-semibold">
                                                            <i class="fa-solid fa-heading me-2 text-primary"></i>Event Title
                                                        </label>
                                                        <input type="text" name="title" class="form-control form-control-lg"
                                                            value="{{ $event->title }}" 
                                                            placeholder="Enter event title"
                                                            style="border-radius: 0.5rem;"
                                                            required>
                                                        @error('title')
                                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label class="form-label fw-semibold">
                                                            <i class="fa-solid fa-align-left me-2 text-primary"></i>Description
                                                        </label>
                                                        <textarea name="description" rows="4" class="form-control" 
                                                                  placeholder="Describe your event..."
                                                                  style="border-radius: 0.5rem;"
                                                                  required>{{ $event->description }}</textarea>
                                                        @error('description')
                                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">
                                                                <i class="fa-solid fa-calendar-plus me-2 text-primary"></i>Start Date & Time
                                                            </label>
                                                            <input type="datetime-local" name="start_date" class="form-control"
                                                                value="{{ \Carbon\Carbon::parse($event->start_date)->format('Y-m-d\TH:i') }}"
                                                                style="border-radius: 0.5rem;"
                                                                required>
                                                            @error('start_date')
                                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">
                                                                <i class="fa-solid fa-calendar-check me-2 text-primary"></i>End Date & Time <span class="text-muted">(optional)</span>
                                                            </label>
                                                            <input type="datetime-local" name="end_date" class="form-control"
                                                                value="{{ $event->end_date ? \Carbon\Carbon::parse($event->end_date)->format('Y-m-d\TH:i') : '' }}"
                                                                style="border-radius: 0.5rem;">
                                                            @error('end_date')
                                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label fw-semibold">
                                                            <i class="fa-solid fa-link me-2 text-primary"></i>Event Link <span class="text-muted">(optional)</span>
                                                        </label>
                                                        <input type="url" name="link" class="form-control"
                                                            value="{{ old('link', $event->link) }}"
                                                            placeholder="https://example.com"
                                                            style="border-radius: 0.5rem;">
                                                        @error('link')
                                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label fw-semibold">
                                                            <i class="fa-solid fa-images me-2 text-primary"></i>Event Images <span class="text-muted">(max 5)</span>
                                                        </label>
                                                        <input type="file" name="images[]" class="form-control"
                                                            accept="image/*" multiple
                                                            style="border-radius: 0.5rem;">
                                                        @if ($event->images ?? false)
                                                            <div class="mt-3">
                                                                <p class="small text-muted mb-2">Current images:</p>
                                                                <div class="d-flex flex-wrap gap-2">
                                                                    @foreach ($event->images as $img)
                                                                        <img src="{{ $img }}" alt="Event Image"
                                                                            class="rounded shadow-sm"
                                                                            style="width:100px; height:100px; object-fit: cover;">
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <small class="text-muted d-block mt-2">
                                                            <i class="fa-solid fa-circle-info me-1"></i>You can upload up to 5 images. Each image max 2MB.
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-warning px-4">
                                                        <i class="fa-solid fa-save me-2"></i>Update Event
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- DELETE EVENT MODAL --}}
                                <div class="modal fade" id="deleteEventModal{{ $event->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="border-radius: 1rem;">
                                            <div class="modal-header border-0 pb-0">
                                                <h5 class="modal-title fw-bold text-danger">
                                                    <i class="fa-solid fa-triangle-exclamation me-2"></i>Delete Event
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert alert-danger d-flex align-items-center mb-3" role="alert">
                                                    <i class="fa-solid fa-exclamation-circle fa-2x me-3"></i>
                                                    <div>
                                                        This action cannot be undone!
                                                    </div>
                                                </div>
                                                <p class="mb-0">Are you sure you want to delete <strong>{{ $event->title }}</strong>?</p>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-danger px-4">
                                                        <i class="fa-solid fa-trash me-2"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5">
                                        <i class="fa-solid fa-calendar-xmark fa-3x text-muted opacity-50 mb-3 d-block"></i>
                                        <p class="text-muted mb-0">No events found. Create your first event!</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    .hover-lift {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12) !important;
    }

    .table tbody tr {
        transition: all 0.2s ease;
    }

    .table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(20, 195, 142, 0.15);
    }
</style>

@endsection