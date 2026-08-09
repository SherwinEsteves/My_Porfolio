<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Portfolio')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <script>
        (function () {
            var saved = localStorage.getItem('theme');
            var theme = saved || 'dark';
            document.documentElement.classList.add(theme);
        })();
    </script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-surface text-body font-sans antialiased">

    <header class="sticky top-0 z-50 bg-surface/60 backdrop-blur-xl px-6 md:px-12 lg:px-20 border-b border-line/40">
    <div class="h-20 flex items-center justify-between overflow-visible">
        <div>
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-24 w-auto -my-4">
            </a>
        </div>

        <div class="flex items-center gap-2">
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="/#home" data-nav="home" class="relative group py-1">
                    <span class="nav-label text-body group-hover:text-heading transition-colors duration-300">Home</span>
                    <span class="nav-underline absolute -bottom-0.5 h-0.5 bg-accent transition-all duration-300 w-0 left-1/2 group-hover:w-full group-hover:left-0"></span>
                </a>
                <a href="/#blog" data-nav="blog" class="relative group py-1">
                    <span class="nav-label text-body group-hover:text-heading transition-colors duration-300">Blog</span>
                    <span class="nav-underline absolute -bottom-0.5 h-0.5 bg-accent transition-all duration-300 w-0 left-1/2 group-hover:w-full group-hover:left-0"></span>
                </a>
                <a href="/#skills" data-nav="skills" class="relative group py-1">
                    <span class="nav-label text-body group-hover:text-heading transition-colors duration-300">Skills</span>
                    <span class="nav-underline absolute -bottom-0.5 h-0.5 bg-accent transition-all duration-300 w-0 left-1/2 group-hover:w-full group-hover:left-0"></span>
                </a>
                <a href="/#experience" data-nav="experience" class="relative group py-1">
                    <span class="nav-label text-body group-hover:text-heading transition-colors duration-300">Experience</span>
                    <span class="nav-underline absolute -bottom-0.5 h-0.5 bg-accent transition-all duration-300 w-0 left-1/2 group-hover:w-full group-hover:left-0"></span>
                </a>
                <a href="/#education" data-nav="education" class="relative group py-1">
                    <span class="nav-label text-body group-hover:text-heading transition-colors duration-300">Education</span>
                    <span class="nav-underline absolute -bottom-0.5 h-0.5 bg-accent transition-all duration-300 w-0 left-1/2 group-hover:w-full group-hover:left-0"></span>
                </a>
                <a href="/#contact" data-nav="contact" class="relative group py-1">
                    <span class="nav-label text-body group-hover:text-heading transition-colors duration-300">Contact</span>
                    <span class="nav-underline absolute -bottom-0.5 h-0.5 bg-accent transition-all duration-300 w-0 left-1/2 group-hover:w-full group-hover:left-0"></span>
                </a>
            </nav>

            <button id="theme-toggle" aria-label="Toggle dark mode" class="w-10 h-10 flex items-center justify-center text-body hover:text-accent transition text-lg">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
            </button>

            <button id="menu-toggle" class="md:hidden text-heading text-2xl">☰</button>
        </div>

        </div>

        <nav id="mobile-menu" class="md:hidden overflow-hidden transition-all duration-300 ease-in-out text-body text-sm font-medium bg-surface" style="max-height: 0; opacity: 0;">
            <div class="flex flex-col gap-4 mt-4 mb-4">
                <a href="/#home" data-nav="home" class="mobile-nav-link hover:text-heading transition">Home</a>
                <a href="/#blog" data-nav="blog" class="mobile-nav-link hover:text-heading transition">Blog</a>
                <a href="/#skills" data-nav="skills" class="mobile-nav-link hover:text-heading transition">Skills</a>
                <a href="/#experience" data-nav="experience" class="mobile-nav-link hover:text-heading transition">Experience</a>
                <a href="/#education" data-nav="education" class="mobile-nav-link hover:text-heading transition">Education</a>
                <a href="/#contact" data-nav="contact" class="mobile-nav-link hover:text-heading transition">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-line/40 bg-surface/40 backdrop-blur-xl">
        <div class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-12">
            <div class="grid md:grid-cols-3 gap-10">
                <div>
                    <a href="/#home">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-14 w-auto mb-4">
                    </a>
                    <p class="text-muted text-sm leading-relaxed">
                        IT Infrastructure professional focused on system administration, networking, and reliable technical support.
                    </p>
                </div>

                <div>
                    <h4 class="text-heading font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/#home" class="text-muted hover:text-accent transition">Home</a></li>
                        <li><a href="/#blog" class="text-muted hover:text-accent transition">Blog</a></li>
                        <li><a href="/#skills" class="text-muted hover:text-accent transition">Skills</a></li>
                        <li><a href="/#experience" class="text-muted hover:text-accent transition">Experience</a></li>
                        <li><a href="/#education" class="text-muted hover:text-accent transition">Education</a></li>
                        <li><a href="/#contact" class="text-muted hover:text-accent transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-heading font-semibold mb-4">Contact</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center gap-3 text-muted">
                            <i class="fas fa-envelope w-4 text-accent"></i>
                            <span>you@example.com</span>
                        </li>
                        <li class="flex items-center gap-3 text-muted">
                            <i class="fas fa-phone w-4 text-accent"></i>
                            <span>+63 900 000 0000</span>
                        </li>
                        <li class="flex items-center gap-3 text-muted">
                            <i class="fas fa-location-dot w-4 text-accent"></i>
                            <span>City, Country</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-line/40">
            <div class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-4 flex flex-col md:flex-row items-center justify-between gap-2 text-sm text-muted">
                <p>&copy; 2026 Sherwin B. Esteves. All rights reserved.</p>
                <p>Designed &amp; built with <span class="text-heading">Laravel</span></p>
            </div>
        </div>
    </footer>

</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
