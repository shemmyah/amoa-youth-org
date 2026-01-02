<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Youth Organization')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        :root {
            --primary: #14c38e;
            --primary-dark: #0f9d70;
            --secondary: #0891b2;
            --accent: #1a1a1a;
            --light-bg: #ffffff;
            --light-gray: #f8f9fa;
            --medium-gray: #e9ecef;
            --text-dark: #2d3748;
            --text-light: #4a5568;
            --shadow: rgba(0, 0, 0, 0.08);
            --shadow-hover: rgba(20, 195, 142, 0.15);
            --gradient-1: linear-gradient(135deg, #14c38e 0%, #0891b2 100%);
            --gradient-2: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--light-gray);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(20, 195, 142, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(8, 145, 178, 0.08) 0%, transparent 50%);
            pointer-events: none;
            /* z-index: 0; */
        }

        /* NAVBAR */
        .navbar-custom {
            background: var(--light-bg);
            padding: 1.2rem 0;
            border-bottom: 1px solid var(--medium-gray);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 20px var(--shadow);
        }

        .navbar-custom.scrolled {
            padding: 0.8rem 0;
            box-shadow: 0 4px 30px var(--shadow);
        }

        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
            color: var(--accent) !important;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar-brand img {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            filter: drop-shadow(0 2px 8px rgba(20, 195, 142, 0.3));
        }

        .navbar-brand:hover img {
            transform: rotate(360deg) scale(1.1);
        }

        .navbar-brand span {
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .navbar-toggler {
            border: 2px solid var(--primary);
            transition: all 0.3s ease;
        }

        .navbar-toggler:hover {
            background: rgba(20, 195, 142, 0.1);
            transform: scale(1.05);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%2314c38e' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            font-size: 0.95rem;
            margin-left: 1.5rem;
            position: relative;
            padding: 0.5rem 0;
            transition: all 0.3s ease;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: var(--gradient-1);
            bottom: 0;
            left: 0;
            border-radius: 3px;
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover {
            color: var(--primary) !important;
            transform: translateY(-2px);
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .nav-link.fw-bold {
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 600 !important;
        }

        /* MAIN CONTENT */
        main {
            position: relative;
            min-height: calc(100vh - 80px);
            padding-top: 8rem;
            z-index: 1;
        }

        /* Enhanced Cards */
        .card {
            background: var(--light-bg);
            color: var(--text-dark);
            border: 1px solid var(--medium-gray);
            border-radius: 1.5rem;
            overflow: hidden;
            position: relative;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px var(--shadow);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-1);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px var(--shadow-hover);
            border-color: var(--primary);
        }

        .card:hover::before {
            opacity: 0.03;
        }

        .card-body {
            position: relative;
            z-index: 1;
        }

        /* Buttons */
        .btn-accent {
            background: var(--gradient-1) !important;
            border: none !important;
            color: white !important;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(20, 195, 142, 0.3);
        }

        .btn-accent::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.6s ease;
        }

        .btn-accent:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(20, 195, 142, 0.4);
        }

        .btn-accent:hover::before {
            left: 100%;
        }

        /* Content Container */
        .content-wrapper {
            position: relative;
            z-index: 2;
        }

        /* Decorative Elements */
        .decorative-shape {
            position: fixed;
            border-radius: 50%;
            background: var(--gradient-1);
            opacity: 0.06;
            pointer-events: none;
            animation: float 20s infinite ease-in-out;
            z-index: 0;
        }

        .decorative-shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            right: 5%;
            animation-delay: 0s;
        }

        .decorative-shape:nth-child(2) {
            width: 400px;
            height: 400px;
            bottom: 15%;
            left: -10%;
            animation-delay: 5s;
        }

        .decorative-shape:nth-child(3) {
            width: 250px;
            height: 250px;
            top: 50%;
            right: -5%;
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            25% {
                transform: translate(30px, -30px) scale(1.1);
            }
            50% {
                transform: translate(-20px, 20px) scale(0.9);
            }
            75% {
                transform: translate(40px, 10px) scale(1.05);
            }
        }

        /* Smooth animations */
        .fade-up {
            opacity: 0;
            animation: fadeUp 0.8s ease forwards;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light-gray);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-1);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.3rem;
            }

            .nav-link {
                margin-left: 0;
                padding: 0.8rem 0;
            }

            main {
                padding-top: 6rem;
            }
        }

        /* Additional accent elements */
        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient-1);
            border-radius: 2px;
        }
    </style>
</head>

<body>
    <!-- Decorative Background Elements -->
    <div class="decorative-shape"></div>
    <div class="decorative-shape"></div>
    <div class="decorative-shape"></div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-custom navbar-light shadow-sm fixed-top" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('logo/logo.png') }}" alt="{{ config('app.name', 'AYO') }}" 
                    style="max-height: 55px; width: auto;">
                <span class="d-none d-md-inline">AMOA YOUTH <span>ORG</span></span>
                <span class="d-md-none">AYO</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-md-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('events') }}">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    @if (session('is_admin'))
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('admin.dashboard') }}">
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
    <main>
        <div class="container content-wrapper">
            <div class="fade-up">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            once: true,
            duration: 800,
            offset: 100
        });

        // Navbar scroll effect
        const navbar = document.querySelector('.navbar-custom');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>