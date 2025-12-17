@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')

    <section class="py-5">
        <div class="container-fluid">

            {{-- Welcome Card --}}
            <div class="card p-4 mb-4 shadow-sm text-center">
                <h2 class="fw-bold">Welcome, Admin!</h2>
                <p style="color: #d9d2d2f1;">Manage your events and monitor upcoming & past programs.</p>
            </div>

            {{-- Stats Cards --}}
            <div class="row g-4 mb-4">

                <div class="col-md-6">
                    <div class="card p-4 text-center shadow-sm bg-dark text-light">
                        <i class="fa-solid fa-calendar-days fa-2x text-success mb-2"></i>
                        <h5 class="fw-bold">Upcoming Events</h5>
                        <p class="fs-5">{{ \App\Models\Event::where('start_date', '>=', now())->count() }}</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card p-4 text-center shadow-sm bg-dark text-light">
                        <i class="fa-solid fa-calendar-check fa-2x text-success mb-2"></i>
                        <h5 class="fw-bold">Past Events</h5>
                        <p class="fs-5">{{ \App\Models\Event::where('start_date', '<', now())->count() }}</p>
                    </div>
                </div>

            </div>

            {{-- All Events Table --}}
            <div class="card p-4 shadow-sm">
                <h5 class="fw-bold mb-3">All Events</h5>
                <div class="table-responsive">
                    <table class="table table-dark table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Link</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (\App\Models\Event::orderBy('start_date', 'desc')->get() as $event)
                                <tr>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ \Carbon\Carbon::parse($event->start_date)->format('M d, Y H:i') }}</td>
                                    <td>{{ $event->end_date ? \Carbon\Carbon::parse($event->end_date)->format('M d, Y H:i') : '-' }}
                                    </td>
                                    <td>
                                        @if ($event->link)
                                            <a href="{{ $event->link }}" target="_blank"
                                                class="btn btn-sm btn-accent">Visit</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        {{-- Edit Button --}}
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editEventModal{{ $event->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        {{-- Delete Button --}}
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteEventModal{{ $event->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- EDIT EVENT MODAL --}}
                                <div class="modal fade" id="editEventModal{{ $event->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Event</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="title" class="form-control"
                                                            value="{{ $event->title }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="description" rows="3" class="form-control" required>{{ $event->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Start Date & Time</label>
                                                        <input type="datetime-local" name="start_date" class="form-control"
                                                            value="{{ \Carbon\Carbon::parse($event->start_date)->format('Y-m-d\TH:i') }}"
                                                            required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">End Date & Time (optional)</label>
                                                        <input type="datetime-local" name="end_date" class="form-control"
                                                            value="{{ $event->end_date ? \Carbon\Carbon::parse($event->end_date)->format('Y-m-d\TH:i') : '' }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Link (optional)</label>
                                                        <input type="url" name="link" class="form-control"
                                                            value="{{ $event->link }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Event Images (max 5)</label>
                                                        <input type="file" name="images[]" class="form-control"
                                                            accept="image/*" multiple>
                                                        @if ($event->images ?? false)
                                                            <div class="mt-2 d-flex flex-wrap gap-2">
                                                                @foreach ($event->images as $img)
                                                                    <img src="{{ $img }}"
                                                                        alt="Event Image" class="img-thumbnail"
                                                                        style="width:80px; height:80px;">
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <small class="text-muted">You can upload up to 5 images. Each image max
                                                        2MB.</small>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-warning">Update Event</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- DELETE EVENT MODAL --}}
                                <div class="modal fade" id="deleteEventModal{{ $event->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content text-dark">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete Event</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete <strong>{{ $event->title }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('admin.events.destroy', $event->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>

@endsection
