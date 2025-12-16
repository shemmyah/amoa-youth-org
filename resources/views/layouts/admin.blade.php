<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">


    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #F0F0F0;
        }

        /* Sidebar */
        .admin-sidebar {
            min-height: 100vh;
            background-color: #333333;
            color: #fff;
            padding-top: 2rem;
        }

        .admin-sidebar a {
            color: #fff;
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .admin-sidebar a:hover {
            background-color: #14c38e;
            color: #1a1a1a;
            text-decoration: none;
        }

        .admin-sidebar i {
            margin-right: 0.5rem;
        }

        .admin-content {
            padding: 2rem;
        }
    </style>
</head>

<body>

    <div class="d-flex">

        {{-- SIDEBAR --}}
        <div class="admin-sidebar flex-shrink-0 p-3">
            <h4 class="text-center mb-4">Admin Panel</h4>
            <nav class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}" class="text-decoration-none"><i class="fa-solid fa-house"></i>
                    Dashboard</a>
                <a href="{{ route('admin.events.create') }}" class="text-decoration-none"><i
                        class="fa-solid fa-plus"></i> Add Event</a>
                {{-- <a href="{{ route('admin.events.index') }}"><i class="fa-solid fa-calendar-days"></i> All Events</a> --}}
                <a href="{{ route('index') }}" class="text-decoration-none"><i class="fa-solid fa-arrow-left"></i> Back
                    to Public</a>
                <form action="{{ route('admin.logout') }}" method="POST" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-outline-light w-100">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>
                </form>
            </nav>
        </div>

        {{-- MAIN CONTENT --}}
        <div class="admin-content flex-grow-1">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
