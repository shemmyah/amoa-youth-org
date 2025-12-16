<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Youth Organization')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #1a1a1a;
            /* Dark background */
            --secondary: #333333;
            /* Darker navbar gradient */
            --accent: #ffffff;
            /* White text and accents */
            --highlight: #14c38e;
            /* Green highlight */
            --light: #F0F0F0;
            /* Light background for main */
            --card-bg: #2b2b2b;
            /* Card background */
            --card-shadow: rgba(0, 0, 0, 0.3);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light);
            color: var(--primary);
        }

        /* NAVBAR */
        .navbar-custom {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 1rem 0;
            transition: all 0.4s ease;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.6rem;
            letter-spacing: 1px;
            color: var(--accent) !important;
            position: relative;
            transition: transform 0.3s ease;
        }

        .navbar-brand span {
            color: var(--highlight);
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            color: var(--accent) !important;
            font-weight: 500;
            margin-left: 1.2rem;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--highlight);
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.4s ease;
        }

        .nav-link:hover {
            color: var(--highlight) !important;
        }

        .nav-link:hover::after {
            width: 70%;
        }

        /* MAIN CONTENT */
        /* main {
            min-height: auto;
            padding-top: 6rem;
            background: linear-gradient(120deg, var(--light), #e0e0e0);
        } */

        /* Cards */
        .card {
            background-color: var(--card-bg);
            color: var(--accent);
            border: none;
            border-radius: 1rem;
            box-shadow: 0 6px 20px var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px var(--card-shadow);
        }

        /* Buttons */
        .btn-accent {
            background: linear-gradient(90deg, var(--highlight), var(--accent)) !important;
            border: none !important;
            color: var(--primary) !important;
            font-weight: 600;
            transition: background 0.4s, transform 0.3s;
        }

        .btn-accent:hover {
            background: linear-gradient(90deg, var(--accent), var(--highlight)) !important;
            transform: scale(1.05);
        }


        /* FOOTER */
        /* footer {
            background-color: var(--secondary);
            color: var(--accent);
            padding: 2rem 0;
            text-align: center;
        } */

        /* FADE-UP ANIMATION */
        .fade-up {
            animation: fadeUp 0.8s ease forwards;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Smooth scroll and subtle hover effects */
        html {
            scroll-behavior: smooth;
        }

        a {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-custom shadow-sm fixed-top" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('logo/logo.png') }}" alt="{{ config('app.name', 'AYO') }}" class="img-fluid"
                    style="max-height: 65px; width: 58px;">
                {{ config('app.name') }}<span> ORG</span>
            </a>

            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('events') }}">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    @if (session('is_admin'))
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-success" href="{{ route('admin.dashboard') }}">
                                <i class="fa-solid fa-lock me-1"></i> Admin
                            </a>
                        </li>
                    @endif

                    @can('admin')
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="/admin/dashboard">
                                <i class="fa-solid fa-lock me-1"></i>Admin
                            </a>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <main class="py-5 mt-5">
        <div class="container fade-up">
            {{-- <div class="row justify-content-center"> --}}
            <div class="col">
                @yield('content')
            </div>
            {{-- </div> --}}
        </div>
    </main>

    {{-- <!-- FOOTER -->
    <footer data-aos="fade-up">
        <div class="container">
            <small>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</small>
        </div>
    </footer> --}}

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800
        });
    </script>
</body>

</html>
