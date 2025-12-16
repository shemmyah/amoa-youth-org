@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center mt-5">

    <div class="card shadow-lg border-0" style="max-width: 420px; width: 100%;">
        <div class="card-body p-4">

            <div class="text-center mb-3">
                <i class="fa-solid fa-shield-halved fa-3x text-secondary"></i>
            </div>

            <h4 class="text-center fw-bold mb-1">Admin Access</h4>
            <p class="text-center text-muted mb-4">
                Restricted area. Authorized personnel only.
            </p>

            <form method="POST" action="{{ route('admin.authenticate') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label small fw-semibold">Admin Code</label>
                    <input
                        type="password"
                        name="code"
                        class="form-control form-control-lg"
                        placeholder="Enter secret code"
                        required
                    >
                </div>

                <button class="btn btn-dark w-100 py-2 fw-semibold">
                    <i class="fa-solid fa-arrow-right-to-bracket me-1"></i>
                    Enter
                </button>
            </form>

        </div>
    </div>

</div>
@endsection
