@extends('layouts.app')
@section('title', 'Home')
@section('content')

{{-- ================================================================ --}}
{{-- HOME --}}
{{-- ================================================================ --}}
<section id="home"
    class="relative max-w-6xl mx-auto px-6 md:px-12 lg:px-20 pt-14 pb-16 md:pt-0 md:pb-0 min-h-[calc(100vh-80px)]
           flex items-center overflow-hidden">

    {{-- ============================================================ --}}
    {{-- MAIN CONTENT --}}
    {{-- ============================================================ --}}

    <div class="relative z-10 w-full grid md:grid-cols-[1.1fr_0.9fr]
                gap-12 lg:gap-16 items-center">


        {{-- ======================================================== --}}
        {{-- LEFT SIDE --}}
        {{-- ======================================================== --}}

        <div class="text-center md:text-left">

            {{-- small professional label --}}
            <p class="animate-fade-up
                      inline-flex items-center justify-center md:justify-start gap-3
                      text-xs md:text-sm
                      font-semibold
                      uppercase
                      tracking-[0.18em]
                      text-accent
                      mb-5"
               style="animation-delay: 0s">

                <span class="hidden md:block w-8 h-px bg-accent/60"></span>
                IT Support &bull; Infrastructure &bull; Systems

            </p>


            {{-- name --}}
            <h1 class="animate-fade-up
                       text-3xl sm:text-4xl lg:text-5xl
                       font-bold
                       tracking-tight
                       text-heading
                       leading-[1.1]
                       mb-4"
                style="animation-delay: 100ms">

                Sherwin B. Esteves

            </h1>


            {{-- professional title --}}
            <p class="animate-fade-up
                      text-lg md:text-xl
                      font-semibold
                       text-heading
                       mb-1"
               style="animation-delay: 200ms">

                IT Support &amp; Infrastructure

            </p>


            {{-- secondary specialization --}}
            <p class="animate-fade-up
                      text-sm md:text-base
                      text-accent
                       font-medium
                       mb-6"
               style="animation-delay: 250ms">

                System Administration &bull; Networking &bull; Virtualization

            </p>


            {{-- description --}}
            <p class="animate-fade-up
                      text-muted
                      leading-relaxed
                      text-sm md:text-base
                      max-w-xl
                      mx-auto md:mx-0
                      mb-8"
               style="animation-delay: 300ms">

                I'm an IT professional focused on IT infrastructure, system administration,
                networking, and keeping technology running reliably.

            </p>


            {{-- ==================================================== --}}
            {{-- TECHNICAL HIGHLIGHTS --}}
            {{-- ==================================================== --}}

            <div class="animate-fade-up
                        flex flex-wrap
                        justify-center md:justify-start
                        gap-2.5
                        mb-8"
                 style="animation-delay: 400ms">

                <span class="px-3.5 py-1.5
                             rounded-full
                             bg-card border border-line
                             text-body text-sm
                             hover:-translate-y-0.5
                             hover:border-accent/50
                             hover:bg-accent/5
                             transition-all duration-200">

                    Linux &amp; System Administration

                </span>

                <span class="px-3.5 py-1.5
                             rounded-full
                             bg-card border border-line
                             text-body text-sm
                             hover:-translate-y-0.5
                             hover:border-accent/50
                             hover:bg-accent/5
                             transition-all duration-200">

                    Proxmox &amp; Virtualization

                </span>

                <span class="px-3.5 py-1.5
                             rounded-full
                             bg-card border border-line
                             text-body text-sm
                             hover:-translate-y-0.5
                             hover:border-accent/50
                             hover:bg-accent/5
                             transition-all duration-200">

                    Networking &amp; Secure Connectivity

                </span>

                <span class="px-3.5 py-1.5
                             rounded-full
                             bg-card border border-line
                             text-body text-sm
                             hover:-translate-y-0.5
                             hover:border-accent/50
                             hover:bg-accent/5
                             transition-all duration-200">

                    VPS &amp; Server Infrastructure

                </span>

            </div>


            {{-- ==================================================== --}}
            {{-- CTA BUTTONS --}}
            {{-- ==================================================== --}}

            <div class="animate-fade-up
                        flex flex-col sm:flex-row
                        justify-center md:justify-start
                        gap-4
                        mb-9"
                 style="animation-delay: 500ms">

                <a href="#"
                   class="group inline-flex items-center justify-center gap-2
                          w-full sm:flex-1
                          px-6 py-3
                          rounded-lg
                          bg-accent
                          text-white
                          font-semibold
                          transition-all duration-300
                          hover:bg-accent-hover
                          hover:-translate-y-0.5
                          hover:shadow-xl hover:shadow-accent/20
                          active:translate-y-0 active:scale-[0.99]
                          shadow-lg shadow-accent/10">

                    View My Projects

                    <span class="transition-transform duration-300
                                 group-hover:translate-x-1">

                        &rarr;

                    </span>

                </a>


                <a href="#"
                   class="inline-flex items-center justify-center gap-2
                          w-full sm:flex-1
                          px-6 py-3
                          rounded-lg
                          border border-line
                          bg-card
                          text-body
                          font-semibold
                          transition-all duration-300
                          hover:border-accent
                          hover:bg-accent/5
                          hover:text-accent
                          hover:-translate-y-0.5
                          active:translate-y-0 active:scale-[0.99]">

                    <i class="fas fa-download text-sm"></i>
                    Download Resume

                </a>

            </div>


            {{-- ==================================================== --}}
            {{-- SOCIAL LINKS --}}
            {{-- ==================================================== --}}

            <div class="animate-fade-up
                        flex items-center
                        justify-center md:justify-start
                        gap-3"
                 style="animation-delay: 600ms">

                <a href="#"
                   class="w-10 h-10
                          flex items-center justify-center
                          rounded-lg
                          bg-card border border-line
                          text-muted
                          hover:-translate-y-0.5
                          hover:bg-accent/5
                          hover:text-accent
                          hover:border-accent/50
                          transition-all duration-200">

                    <i class="fab fa-facebook-f"></i>

                </a>

                <a href="#"
                   class="w-10 h-10
                          flex items-center justify-center
                          rounded-lg
                          bg-card border border-line
                          text-muted
                          hover:-translate-y-0.5
                          hover:bg-accent/5
                          hover:text-accent
                          hover:border-accent/50
                          transition-all duration-200">

                    <i class="fab fa-twitter"></i>

                </a>

                <a href="#"
                   class="w-10 h-10
                          flex items-center justify-center
                          rounded-lg
                          bg-card border border-line
                          text-muted
                          hover:-translate-y-0.5
                          hover:bg-accent/5
                          hover:text-accent
                          hover:border-accent/50
                          transition-all duration-200">

                    <i class="fab fa-instagram"></i>

                </a>

                <a href="#"
                   class="w-10 h-10
                          flex items-center justify-center
                          rounded-lg
                          bg-card border border-line
                          text-muted
                          hover:-translate-y-0.5
                          hover:bg-accent/5
                          hover:text-accent
                          hover:border-accent/50
                          transition-all duration-200">

                    <i class="fab fa-tiktok"></i>

                </a>

                <a href="#"
                   class="w-10 h-10
                          flex items-center justify-center
                          rounded-lg
                          bg-card border border-line
                          text-muted
                          hover:-translate-y-0.5
                          hover:bg-accent/5
                          hover:text-accent
                          hover:border-accent/50
                          transition-all duration-200">

                    <i class="fab fa-youtube"></i>

                </a>

            </div>

        </div>


        {{-- ======================================================== --}}
        {{-- RIGHT SIDE — PHOTO --}}
        {{-- ======================================================== --}}

        <div class="relative flex justify-center md:justify-end order-first md:order-last">

            {{-- photo container --}}
            <div class="relative animate-fade-in-right" style="animation-delay: 150ms">

                {{-- gradient border --}}
                <div class="relative
                            p-[3px]
                            rounded-[1.5rem]
                            bg-gradient-to-br
                            from-accent
                            via-accent-hover
                            to-accent
                            transition-all duration-500 ease-out
                            hover:scale-[1.02]
                            hover:-translate-y-1
                            hover:shadow-2xl hover:shadow-accent/25">

                    {{-- photo --}}
                    <div class="w-64 h-80
                                sm:w-72 sm:h-[360px]
                                md:w-80 md:h-[400px]
                                rounded-[1.35rem]
                                overflow-hidden
                                bg-card">

                        <img
                            src="{{ asset('images/7e88dd42ca80ccc3b94b642b6479b146.jpg') }}"
                            alt="Sherwin B. Esteves"
                            class="w-full h-full
                                   object-cover
                                   object-top"
                        >

                    </div>

                </div>

                {{-- status dot --}}
                <div class="absolute
                            top-5 right-5
                            w-3 h-3
                            rounded-full
                            bg-accent
                            shadow-lg shadow-accent/50">
                </div>
            </div>

        </div>

    </div>

</section>
{{-- ================= END OF HOME SECTION ================= --}}


{{-- ================================================================ --}}
{{--  ABOUT --}}
{{-- ================================================================ --}}
<section id="about" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-10 md:py-12 min-h-[calc(100vh-80px)] flex flex-col justify-center border-t border-line">

    {{-- section header --}}
    <div class="reveal mb-10 text-center md:text-left">
        <p class="text-accent font-semibold uppercase tracking-widest text-sm mb-2">About Me</p>
        <h1 class="text-xl md:text-2xl font-bold text-heading">A Little About Me</h1>
        <div class="mt-4 w-24 h-1 bg-gradient-to-r from-accent to-accent-hover rounded-full"></div>
    </div>
    {{-- end section header --}}

    {{-- about grid: text (left) + personal info (right) --}}
    <div class="grid md:grid-cols-2 gap-12 items-center">

        {{-- text column --}}
        <div class="text-center md:text-left">
            <p class="reveal text-body leading-relaxed mb-4" style="transition-delay: 100ms">
                I'm an Information Technology student and IT professional who enjoys learning
                through hands-on experience, troubleshooting real-world technical problems,
                and building reliable systems and infrastructure.
            </p>

            <p class="reveal text-muted leading-relaxed mb-4" style="transition-delay: 160ms">
                My interests are centered around IT infrastructure, system administration,
                networking, virtualization, server management, and DevOps practices. I enjoy
                understanding how systems work together and finding practical ways to keep
                services reliable, secure, and efficient.
            </p>

            <p class="reveal text-muted leading-relaxed" style="transition-delay: 220ms">
                I'm continuously developing my technical skills through professional experience,
                personal projects, and hands-on experimentation with Linux servers, Proxmox,
                networking, VPS infrastructure, and self-hosted applications.
            </p>
        </div>
        {{-- end text column --}}

        {{-- personal info card --}}
        <div class="reveal-right glass rounded-2xl p-7" style="transition-delay: 200ms">
            <h2 class="text-lg font-semibold text-heading mb-6 flex items-center gap-3">
                <i class="fas fa-user text-accent"></i> Quick Facts
            </h2>

            <ul class="space-y-6">
                {{-- based in --}}
                <li class="flex items-start gap-4">
                    <span class="w-10 h-10 flex items-center justify-center rounded-lg glass text-accent">
                        <i class="fas fa-location-dot"></i>
                    </span>
                    <div>
                        <p class="text-sm text-muted">Based in</p>
                        <p class="text-body">Quezon City, Philippines</p>
                    </div>
                </li>

                {{-- education --}}
                <li class="flex items-start gap-4">
                    <span class="w-10 h-10 flex items-center justify-center rounded-lg glass text-accent">
                        <i class="fas fa-graduation-cap"></i>
                    </span>
                    <div>
                        <p class="text-sm text-muted">Education</p>
                        <p class="text-body leading-relaxed">Bachelor of Science in Information Technology</p>
                    </div>
                </li>

                {{-- primary focus --}}
                <li class="flex items-start gap-4">
                    <span class="w-10 h-10 flex items-center justify-center rounded-lg glass text-accent">
                        <i class="fas fa-server"></i>
                    </span>
                    <div>
                        <p class="text-sm text-muted">Primary Focus</p>
                        <p class="text-body leading-relaxed">IT Infrastructure &bull; System Administration &bull; Networking &bull; Virtualization</p>
                    </div>
                </li>

                {{-- career direction --}}
                <li class="flex items-start gap-4">
                    <span class="w-10 h-10 flex items-center justify-center rounded-lg glass text-accent">
                        <i class="fas fa-route"></i>
                    </span>
                    <div>
                        <p class="text-sm text-muted">Career Direction</p>
                        <p class="text-body leading-relaxed">DevOps &bull; Systems Engineering &bull; Infrastructure</p>
                    </div>
                </li>
            </ul>
        </div>
        {{-- end personal info card --}}

    </div>
    {{-- end about grid --}}

</section>
{{-- ================= END OF ABOUT SECTION ================= --}}

{{-- ================================================================ --}}
{{--  SKILLS --}}
{{-- ================================================================ --}}
<section id="skills" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-10 md:py-12 min-h-[calc(100vh-80px)] flex flex-col justify-center border-t border-line">

    {{-- section header --}}
    <div class="reveal mb-10 text-center md:text-left">
        <p class="text-accent font-semibold uppercase tracking-widest text-sm mb-2">What I Do</p>
        <h1 class="text-xl md:text-2xl font-bold text-heading">My Skills</h1>
        <div class="mt-4 w-24 h-1 bg-gradient-to-r from-accent to-accent-hover rounded-full"></div>
    </div>
    {{-- end section header --}}

    {{-- skills grid --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- ==================================================== --}}
        {{-- INFRASTRUCTURE & SYSTEMS --}}
        {{-- ==================================================== --}}

        <div class="reveal glass rounded-2xl p-7 flex flex-col" style="transition-delay: 0ms">
            <div class="mb-3">
                <h3 class="text-lg font-semibold text-heading flex items-center gap-3">
                    <i class="fas fa-server text-accent"></i> Infrastructure &amp; Systems
                </h3>
                <span class="mt-2 ml-8 inline-flex px-2.5 py-1 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider">Core</span>
            </div>
            <p class="text-muted text-sm leading-relaxed mb-5">
                Linux servers, system services, and dependable day-to-day server administration.
            </p>
            <div class="flex flex-wrap gap-2 mt-auto">
                <span class="skill-tag">Linux / Ubuntu Server</span>
                <span class="skill-tag">System Administration</span>
                <span class="skill-tag">Server Deployment</span>
                <span class="skill-tag">Server Troubleshooting</span>
                <span class="skill-tag">System Services &amp; Logs</span>
                <span class="skill-tag">Backup &amp; Recovery</span>
                <span class="skill-tag">VPS Management</span>
            </div>
        </div>

        {{-- ==================================================== --}}
        {{-- NETWORKING & CONNECTIVITY --}}
        {{-- ==================================================== --}}

        <div class="reveal glass rounded-2xl p-7 flex flex-col" style="transition-delay: 80ms">
            <div class="mb-3">
                <h3 class="text-lg font-semibold text-heading flex items-center gap-3">
                    <i class="fas fa-network-wired text-accent"></i> Networking &amp; Connectivity
                </h3>
                <span class="mt-2 ml-8 inline-flex px-2.5 py-1 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider">Core</span>
            </div>
            <p class="text-muted text-sm leading-relaxed mb-5">
                Practical networking — DNS, reverse proxying, secure tunnels, and connectivity troubleshooting.
            </p>
            <div class="flex flex-wrap gap-2 mt-auto">
                <span class="skill-tag">TCP/IP Fundamentals</span>
                <span class="skill-tag">DNS &amp; Domain Config</span>
                <span class="skill-tag">Nginx / Reverse Proxy</span>
                <span class="skill-tag">SSL/TLS</span>
                <span class="skill-tag">VPN / Secure Connectivity</span>
                <span class="skill-tag">OpenZiti</span>
                <span class="skill-tag">Firewall &amp; Network Security</span>
                <span class="skill-tag">Network Troubleshooting</span>
            </div>
        </div>

        {{-- ==================================================== --}}
        {{-- VIRTUALIZATION & SERVER INFRASTRUCTURE --}}
        {{-- ==================================================== --}}

        <div class="reveal glass rounded-2xl p-7 flex flex-col" style="transition-delay: 160ms">
            <div class="mb-3">
                <h3 class="text-lg font-semibold text-heading flex items-center gap-3">
                    <i class="fas fa-cubes text-accent"></i> Virtualization &amp; Server Infrastructure
                </h3>
                <span class="mt-2 ml-8 inline-flex px-2.5 py-1 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider">Core</span>
            </div>
            <p class="text-muted text-sm leading-relaxed mb-5">
                Virtual machines and containers on Proxmox with storage, snapshots, and backups.
            </p>
            <div class="flex flex-wrap gap-2 mt-auto">
                <span class="skill-tag">Proxmox VE</span>
                <span class="skill-tag">LXC Containers</span>
                <span class="skill-tag">Virtual Machines</span>
                <span class="skill-tag">Storage / Mount Points</span>
                <span class="skill-tag">Snapshots</span>
                <span class="skill-tag">Backups</span>
                <span class="skill-tag">Virtualized Infrastructure</span>
            </div>
        </div>

        {{-- ==================================================== --}}
        {{-- IT SUPPORT & TROUBLESHOOTING --}}
        {{-- ==================================================== --}}

        <div class="reveal glass rounded-2xl p-7 flex flex-col" style="transition-delay: 240ms">
            <div class="mb-3">
                <h3 class="text-lg font-semibold text-heading flex items-center gap-3">
                    <i class="fas fa-screwdriver-wrench text-accent"></i> IT Support &amp; Troubleshooting
                </h3>
                <span class="mt-2 ml-8 inline-flex px-2.5 py-1 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider">Core</span>
            </div>
            <p class="text-muted text-sm leading-relaxed mb-5">
                Hands-on diagnosis of hardware, Windows, network, and server problems.
            </p>
            <div class="flex flex-wrap gap-2 mt-auto">
                <span class="skill-tag">Hardware Troubleshooting</span>
                <span class="skill-tag">Windows Troubleshooting</span>
                <span class="skill-tag">Network / Access Point Troubleshooting</span>
                <span class="skill-tag">System Diagnostics</span>
                <span class="skill-tag">Server Troubleshooting</span>
                <span class="skill-tag">CCTV Infrastructure Troubleshooting</span>
            </div>
        </div>

        {{-- ==================================================== --}}
        {{-- DATABASES --}}
        {{-- ==================================================== --}}

        <div class="reveal glass rounded-2xl p-7 flex flex-col" style="transition-delay: 320ms">
            <div class="mb-3">
                <h3 class="text-lg font-semibold text-heading flex items-center gap-3">
                    <i class="fas fa-database text-accent"></i> Databases
                </h3>
                <span class="mt-2 ml-8 inline-flex px-2.5 py-1 rounded-md bg-card border border-line text-body text-[10px] font-semibold uppercase tracking-wider">Working Knowledge</span>
            </div>
            <p class="text-muted text-sm leading-relaxed mb-5">
                MySQL / MariaDB setup, querying, and troubleshooting database-server connectivity.
            </p>
            <div class="flex flex-wrap gap-2 mt-auto">
                <span class="skill-tag">MySQL</span>
                <span class="skill-tag">MariaDB</span>
                <span class="skill-tag">SQL</span>
                <span class="skill-tag">Database Troubleshooting</span>
                <span class="skill-tag">Database / Server Connectivity</span>
            </div>
        </div>

        {{-- ==================================================== --}}
        {{-- WEB DEVELOPMENT --}}
        {{-- ==================================================== --}}

        <div class="reveal glass rounded-2xl p-7 flex flex-col" style="transition-delay: 400ms">
            <div class="mb-3">
                <h3 class="text-lg font-semibold text-heading flex items-center gap-3">
                    <i class="fas fa-code text-accent"></i> Web Development
                </h3>
                <span class="mt-2 ml-8 inline-flex px-2.5 py-1 rounded-md bg-card border border-line text-body text-[10px] font-semibold uppercase tracking-wider">Working Knowledge</span>
            </div>
            <p class="text-muted text-sm leading-relaxed mb-5">
                Building and maintaining web applications with PHP, Laravel, and modern front-end tools.
            </p>
            <div class="flex flex-wrap gap-2 mt-auto">
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">Laravel</span>
                <span class="skill-tag">HTML</span>
                <span class="skill-tag">CSS</span>
                <span class="skill-tag">JavaScript</span>
                <span class="skill-tag">Tailwind CSS</span>
                <span class="skill-tag">Bootstrap</span>
                <span class="skill-tag">Vite</span>
                <span class="skill-tag">Composer</span>
            </div>
        </div>

        {{-- ==================================================== --}}
        {{-- TOOLS & DEVELOPMENT WORKFLOW --}}
        {{-- ==================================================== --}}

        <div class="reveal glass rounded-2xl p-7 flex flex-col" style="transition-delay: 480ms">
            <div class="mb-3">
                <h3 class="text-lg font-semibold text-heading flex items-center gap-3">
                    <i class="fas fa-toolbox text-accent"></i> Tools &amp; Development Workflow
                </h3>
                <span class="mt-2 ml-8 inline-flex px-2.5 py-1 rounded-md bg-transparent border border-line/60 text-muted text-[10px] font-semibold uppercase tracking-wider">Familiar</span>
            </div>
            <p class="text-muted text-sm leading-relaxed mb-5">
                Everyday tools I use to develop, version, and manage projects.
            </p>
            <div class="flex flex-wrap gap-2 mt-auto">
                <span class="skill-tag">Git / GitHub</span>
                <span class="skill-tag">VS Code</span>
                <span class="skill-tag">Node.js / npm</span>
                <span class="skill-tag">Composer</span>
                <span class="skill-tag">Figma</span>
                <span class="skill-tag">Photoshop</span>
            </div>
        </div>

    </div>
    {{-- end skills grid --}}

</section>
{{-- ================= END OF SKILLS SECTION ================= --}}

{{-- ================================================================ --}}
{{--  EXPERIENCE --}}
{{-- ================================================================ --}}
<section id="experience" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-10 md:py-12 min-h-[calc(100vh-80px)] flex flex-col border-t border-line">

    {{-- section header --}}
    <div class="reveal mb-10 text-center md:text-left">
        <p class="text-accent font-semibold uppercase tracking-widest text-sm mb-2">Experience</p>
        <h1 class="text-xl md:text-2xl font-bold text-heading">Professional Experience</h1>
        <div class="mt-4 w-24 h-1 bg-gradient-to-r from-accent to-accent-hover rounded-full"></div>
    </div>
    {{-- end section header --}}

    {{-- role card --}}
    <div class="reveal glass rounded-2xl p-7" style="transition-delay: 80ms">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-4">
            <div>
                <h3 class="text-2xl font-bold text-heading mb-1">IT Assistant</h3>
                <p class="text-accent font-medium">Exxel Prime International Trading Inc.</p>
            </div>
            <span class="shrink-0 self-start md:self-center inline-flex px-3 py-1 rounded-md bg-accent/15 border border-accent/30 text-accent text-xs font-semibold uppercase tracking-wider">June 2026 — Current</span>
        </div>
        <p class="text-muted leading-relaxed max-w-3xl mb-6">
            Provide day-to-day IT support and maintain the company's IT infrastructure,
            including servers, network equipment, employee devices, backups, access points,
            and CCTV systems.
        </p>
        <button type="button" data-open-modal="responsibilities-modal"
            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-accent hover:bg-accent-hover active:scale-[0.98] text-white text-sm font-semibold transition-all duration-300">
            <i class="fas fa-list-check"></i>
            View Responsibilities
        </button>
    </div>
    {{-- end role card --}}

    {{-- responsibilities modal --}}
    <div id="responsibilities-modal" data-modal class="fixed inset-0 z-[100] hidden">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" data-modal-backdrop></div>
        <div class="relative z-10 flex items-center justify-center min-h-screen p-4 md:p-6 pointer-events-none">
            <div class="pointer-events-auto relative flex flex-col glass rounded-2xl w-full max-w-3xl max-h-[85vh] overflow-hidden">

                {{-- modal header --}}
                <div class="flex items-center justify-between gap-4 px-6 py-4 border-b border-line/40 shrink-0 rounded-t-2xl">
                    <div>
                        <h3 class="text-lg font-bold text-heading">Key Responsibilities</h3>
                        <p class="text-sm text-accent">IT Assistant — Exxel Prime International Trading Inc.</p>
                    </div>
                    <button type="button" data-close-modal aria-label="Close" class="w-9 h-9 shrink-0 inline-flex items-center justify-center rounded-full bg-accent/10 text-body hover:bg-accent/20 hover:text-heading transition-colors">
                        <i class="fas fa-xmark"></i>
                    </button>
                </div>
                {{-- end modal header --}}

                {{-- modal body --}}
                <div class="overflow-y-auto px-6 py-6 space-y-7 overscroll-contain">

                    {{-- SERVER & INFRASTRUCTURE --}}
                    <div>
                        <h4 class="text-base font-semibold text-heading mb-3 flex items-center gap-2.5">
                            <i class="fas fa-server text-accent"></i> Server &amp; Infrastructure
                        </h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Manage and troubleshoot company servers and IT infrastructure.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Perform server maintenance and investigate system and service issues.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Work within Linux-based server environments.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Monitor services and respond to issues as they occur.
                            </li>
                        </ul>
                    </div>

                    {{-- EMPLOYEE IT SUPPORT --}}
                    <div>
                        <h4 class="text-base font-semibold text-heading mb-3 flex items-center gap-2.5">
                            <i class="fas fa-headset text-accent"></i> Employee IT Support
                        </h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Provide day-to-day technical support to employees.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Diagnose and resolve Windows and workstation-related problems.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Troubleshoot application and connectivity issues affecting daily work.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Restore normal workstation operation with minimal disruption.
                            </li>
                        </ul>
                    </div>

                    {{-- PROXMOX & VIRTUALIZATION --}}
                    <div>
                        <h4 class="text-base font-semibold text-heading mb-3 flex items-center gap-2.5">
                            <i class="fas fa-cubes text-accent"></i> Proxmox &amp; Virtualization
                        </h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Manage and troubleshoot Proxmox virtualized environments.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Work with virtual machines and LXC containers.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Handle storage, mount points, snapshots, and backup operations.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Troubleshoot virtualization and container-related issues.
                            </li>
                        </ul>
                    </div>

                    {{-- NETWORK INFRASTRUCTURE --}}
                    <div>
                        <h4 class="text-base font-semibold text-heading mb-3 flex items-center gap-2.5">
                            <i class="fas fa-network-wired text-accent"></i> Network Infrastructure
                        </h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Deploy and configure network access points and wireless equipment.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Configure wireless controllers, including Ubiquiti, Sundray, and Comfast.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Work with network switches, including Linksys switches.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Troubleshoot network connectivity and wireless issues.
                            </li>
                        </ul>
                    </div>

                    {{-- DEVICE & PRINTER MAINTENANCE --}}
                    <div>
                        <h4 class="text-base font-semibold text-heading mb-3 flex items-center gap-2.5">
                            <i class="fas fa-print text-accent"></i> Device &amp; Printer Maintenance
                        </h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Maintain and troubleshoot desktop computers and laptops.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Diagnose hardware issues and perform basic component troubleshooting.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Troubleshoot and maintain printers and other office peripherals.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Assist with device setup and deployment when required.
                            </li>
                        </ul>
                    </div>

                    {{-- BACKUP OPERATIONS --}}
                    <div>
                        <h4 class="text-base font-semibold text-heading mb-3 flex items-center gap-2.5">
                            <i class="fas fa-cloud-arrow-up text-accent"></i> Backup Operations
                        </h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Perform and assist with server and system backup operations.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Monitor backup processes and investigate failures when necessary.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Assist with recovery-related operations when required.
                            </li>
                        </ul>
                    </div>

                    {{-- CCTV INFRASTRUCTURE --}}
                    <div>
                        <h4 class="text-base font-semibold text-heading mb-3 flex items-center gap-2.5">
                            <i class="fas fa-video text-accent"></i> CCTV Infrastructure
                        </h4>
                        <ul class="space-y-2">
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Configure and troubleshoot CCTV systems and related infrastructure.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Assist with CCTV storage and connectivity.
                            </li>
                            <li class="flex gap-2.5 text-sm text-muted leading-relaxed">
                                <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-accent/60 shrink-0"></span>
                                Troubleshoot issues affecting cameras, storage, or system availability.
                            </li>
                        </ul>
                    </div>

                    {{-- TECHNOLOGIES & EQUIPMENT --}}
                    <div>
                        <h4 class="text-base font-semibold text-heading mb-3 flex items-center gap-2.5">
                            <i class="fas fa-cogs text-accent"></i> Technologies &amp; Equipment
                        </h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="skill-tag">Servers</span>
                            <span class="skill-tag">Linux</span>
                            <span class="skill-tag">Proxmox VE</span>
                            <span class="skill-tag">LXC</span>
                            <span class="skill-tag">Virtual Machines</span>
                            <span class="skill-tag">Network Switches</span>
                            <span class="skill-tag">Linksys</span>
                            <span class="skill-tag">Ubiquiti</span>
                            <span class="skill-tag">Sundray</span>
                            <span class="skill-tag">Comfast</span>
                            <span class="skill-tag">Access Points</span>
                            <span class="skill-tag">CCTV</span>
                            <span class="skill-tag">Windows</span>
                            <span class="skill-tag">Printers</span>
                            <span class="skill-tag">Backup Systems</span>
                        </div>
                    </div>

                </div>
                {{-- end modal body --}}

            </div>
        </div>
    </div>
    {{-- end responsibilities modal --}}

</section>
{{-- ================= END OF EXPERIENCE SECTION ================= --}}

{{-- ================================================================ --}}
{{--  EDUCATION --}}
{{-- ================================================================ --}}
<section id="education" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-10 md:py-12 min-h-[calc(100vh-80px)] flex flex-col justify-center border-t border-line">

    {{-- section header --}}
    <div class="reveal mb-8 text-center md:text-left">
        <p class="text-accent font-semibold uppercase tracking-widest text-sm mb-2">Education & Certifications</p>
        <h1 class="text-xl md:text-2xl font-bold text-heading">A Foundation of Learning</h1>
        <div class="mt-4 w-24 h-1 bg-gradient-to-r from-accent to-accent-hover rounded-full"></div>
    </div>
    {{-- end section header --}}

    {{-- section intro --}}
    <p class="reveal text-muted leading-relaxed max-w-2xl mb-12" style="transition-delay: 60ms">
        Formal IT education supported by continuous professional development —
        academic background combined with certifications and hands-on technical training.
    </p>
    {{-- end section intro --}}

    {{-- EDUCATION --}}
    <h2 class="reveal flex items-center gap-2.5 text-base font-semibold text-heading mb-6" style="transition-delay: 100ms">
        <span class="w-8 h-8 rounded-lg bg-accent/10 text-accent flex items-center justify-center text-sm"><i class="fas fa-graduation-cap"></i></span>
        Education
    </h2>

    {{-- education timeline --}}
    <div class="reveal relative border-l-2 border-accent/30 pl-8 ml-4 space-y-8 mb-12" style="transition-delay: 140ms">

        {{-- entry 1 --}}
        <div class="relative">
            <span class="absolute -left-[41px] top-1.5 w-4 h-4 rounded-full bg-accent ring-4 ring-accent/20"></span>
            <span class="inline-flex px-3 py-1 rounded-md bg-accent/10 border border-accent/20 text-accent text-xs font-semibold uppercase tracking-wider mb-2">2019 — 2021</span>
            <h3 class="text-lg font-semibold text-heading mb-1">Bestlink College of the Philippines</h3>
            <p class="text-accent text-sm mb-1">Information and Communication Technology</p>
            <p class="text-muted text-sm">Major in Computer Hardware</p>
        </div>
        {{-- end entry 1 --}}

        {{-- entry 2 --}}
        <div class="relative">
            <span class="absolute -left-[41px] top-1.5 w-4 h-4 rounded-full bg-accent ring-4 ring-accent/20"></span>
            <span class="inline-flex px-3 py-1 rounded-md bg-accent/10 border border-accent/20 text-accent text-xs font-semibold uppercase tracking-wider mb-2">2021 — 2025</span>
            <h3 class="text-lg font-semibold text-heading mb-1">Quezon City University</h3>
            <p class="text-accent text-sm mb-1">Bachelor of Science in Information Technology</p>
        </div>
        {{-- end entry 2 --}}

    </div>
    {{-- end education timeline --}}

    {{-- CERTIFICATIONS --}}
    @php
        $certifications = [
            // To add a certification, copy the block below and fill in the details:
            // [
            //     'title'       => 'Certificate Name',
            //     'issuer'      => 'Issuing Organization',
            //     'year'        => '2026',
            //     'description' => 'Short description of what the certification covers.',
            //     'image'       => 'images/certificates/certificate.jpg', // optional: opens in lightbox
            //     'pdf'         => 'images/certificates/certificate.pdf', // optional: opens in new tab
            // ],
            [
                'title'       => 'IT Customer Support Basics',
                'issuer'      => 'Cisco Networking Academy',
                'year'        => '2026',
                'description' => 'Develop help desk and customer support skills to succeed in entry-level positions. Learn to manage and troubleshoot IT environments.',
                'pdf'         => 'images/IT_Customer_Support_Basics_certificate_sherwin-esteves-11282002-gmail-com_4b29342c-a789-499f-82bd-18d0b5eb1ea4.pdf',
            ],
        ];
    @endphp

    <h2 class="reveal flex items-center gap-2.5 text-base font-semibold text-heading mb-6" style="transition-delay: 240ms">
        <span class="w-8 h-8 rounded-lg bg-accent/10 text-accent flex items-center justify-center text-sm"><i class="fas fa-certificate"></i></span>
        Certifications
    </h2>

    @if (count($certifications) > 0)
        {{-- certification cards grid --}}
        <div class="grid md:grid-cols-2 gap-6">
            @foreach ($certifications as $cert)
                <div class="reveal glass rounded-2xl overflow-hidden flex flex-col hover:border-accent/40 transition cursor-pointer"
                    style="transition-delay: {{ $loop->iteration * 60 + 280 }}ms"
                    data-cert-view
                    data-cert-title="{{ $cert['title'] }}"
                    data-cert-issuer="{{ $cert['issuer'] }}"
                    data-cert-year="{{ $cert['year'] }}"
                    data-cert-image="{{ $cert['image'] ?? '' }}"
                    data-cert-pdf="{{ $cert['pdf'] ?? '' }}">

                    {{-- certificate preview --}}
                    <div class="bg-white border-b border-line/40 p-3">
                        @if (!empty($cert['image']))
                            <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }} certificate" class="w-full h-auto object-contain max-h-44">
                        @elseif (!empty($cert['pdf']))
                            <iframe src="{{ asset($cert['pdf']) }}" title="{{ $cert['title'] }} certificate preview" class="w-full h-44 pointer-events-none" loading="lazy"></iframe>
                        @else
                            <div class="h-44 flex items-center justify-center text-accent text-4xl">
                                <i class="fas fa-award"></i>
                            </div>
                        @endif
                    </div>
                    {{-- end certificate preview --}}

                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-start justify-between gap-4 mb-1">
                            <h3 class="text-lg font-semibold text-heading">{{ $cert['title'] }}</h3>
                            <span class="shrink-0 text-muted text-sm">{{ $cert['year'] }}</span>
                        </div>
                        <p class="text-accent text-sm mb-3">{{ $cert['issuer'] }}</p>
                        @if (!empty($cert['description']))
                            <p class="text-muted text-sm leading-relaxed mb-5">{{ $cert['description'] }}</p>
                        @endif
                        <button type="button"
                            data-cert-view
                            data-cert-title="{{ $cert['title'] }}"
                            data-cert-issuer="{{ $cert['issuer'] }}"
                            data-cert-year="{{ $cert['year'] }}"
                            data-cert-image="{{ $cert['image'] ?? '' }}"
                            data-cert-pdf="{{ $cert['pdf'] ?? '' }}"
                            class="mt-auto self-start inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-accent hover:bg-accent-hover active:scale-[0.98] text-white text-sm font-semibold transition-all duration-300">
                            View Certificate <i class="fas fa-arrow-up-right-from-square text-xs"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- end certification cards grid --}}
    @else
        {{-- empty state --}}
        <div class="reveal glass rounded-2xl p-8 md:p-10 text-center" style="transition-delay: 280ms">
            <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-2xl">
                <i class="fas fa-certificate"></i>
            </div>
            <p class="text-muted text-sm leading-relaxed max-w-md mx-auto">
                Certifications will be added here as I continue my professional development.
            </p>
        </div>
        {{-- end empty state --}}
    @endif

    {{-- certificate viewer modal --}}
    <div id="certificate-modal" data-cert-modal class="fixed inset-0 z-[100] hidden">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" data-cert-backdrop></div>
        <div class="relative z-10 flex items-center justify-center min-h-screen p-4 md:p-6 pointer-events-none">
            <div class="pointer-events-auto relative flex flex-col glass rounded-2xl w-full max-w-4xl max-h-[90vh] overflow-hidden">
                <div class="flex items-center justify-between gap-4 px-6 py-4 border-b border-line/40 shrink-0">
                    <div>
                        <h3 id="cert-modal-title" class="text-lg font-bold text-heading">Certificate</h3>
                        <p id="cert-modal-sub" class="text-sm text-muted"></p>
                    </div>
                    <button type="button" data-cert-close aria-label="Close certificate viewer" class="w-9 h-9 shrink-0 inline-flex items-center justify-center rounded-full bg-accent/10 text-body hover:bg-accent/20 hover:text-heading transition-colors">
                        <i class="fas fa-xmark"></i>
                    </button>
                </div>
                <div class="overflow-y-auto p-5 md:p-8 bg-surface-b/60 flex items-center justify-center">
                    <div class="w-full max-w-3xl">
                        <div class="bg-white rounded-xl p-3 md:p-4 shadow-lg flex items-center justify-center">
                            <img id="cert-modal-image" src="" alt="Certificate preview" class="w-full h-auto object-contain max-h-[62vh] hidden">
                            <iframe id="cert-modal-pdf" src="" title="Certificate" class="w-full h-[65vh] rounded-lg hidden"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end certificate viewer modal --}}

</section>
{{-- ================= END OF EDUCATION SECTION ================= --}}

{{-- ================================================================ --}}
{{--  CONTACT --}}
{{-- ================================================================ --}}
<section id="contact" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-10 md:py-14 min-h-[calc(100vh-80px)] flex flex-col justify-center border-t border-line">

    {{-- section header --}}
    <div class="text-center md:text-left">
        <p class="text-accent font-semibold uppercase tracking-widest text-sm mb-2">Contact</p>
        <h1 class="text-xl md:text-2xl font-bold text-heading">Let's Work Together</h1>
        <div class="mt-4 w-24 h-1 bg-gradient-to-r from-accent to-accent-hover rounded-full"></div>
    </div>
    {{-- end section header --}}

    {{-- contact grid: info + form --}}
    <div class="grid md:grid-cols-2 gap-12">

        {{-- left column — contact info --}}
        <div>
            <p class="text-muted leading-relaxed mb-8 max-w-md">
                Have a project in mind, need IT assistance, or just want to say hi?
                Feel free to reach out — I'll get back to you as soon as possible.
            </p>

            <ul class="space-y-5">
                {{-- email --}}
                <li class="flex items-start gap-4">
                    <span class="w-11 h-11 flex items-center justify-center rounded-lg glass text-accent">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <div>
                        <p class="text-sm text-muted">Email</p>
                        <p class="text-body">you@example.com</p>
                    </div>
                </li>
                {{-- phone --}}
                <li class="flex items-start gap-4">
                    <span class="w-11 h-11 flex items-center justify-center rounded-lg glass text-accent">
                        <i class="fas fa-phone"></i>
                    </span>
                    <div>
                        <p class="text-sm text-muted">Phone</p>
                        <p class="text-body">+63 900 000 0000</p>
                    </div>
                </li>
                {{-- location --}}
                <li class="flex items-start gap-4">
                    <span class="w-11 h-11 flex items-center justify-center rounded-lg glass text-accent">
                        <i class="fas fa-location-dot"></i>
                    </span>
                    <div>
                        <p class="text-sm text-muted">Location</p>
                        <p class="text-body">City, Country</p>
                    </div>
                </li>
                {{-- availability --}}
                <li class="flex items-start gap-4">
                    <span class="w-11 h-11 flex items-center justify-center rounded-lg glass text-accent">
                        <i class="fas fa-clock"></i>
                    </span>
                    <div>
                        <p class="text-sm text-muted">Availability</p>
                        <p class="text-body">Mon — Fri, 8:00 AM to 5:00 PM</p>
                    </div>
                </li>
            </ul>
        </div>
        {{-- end left column — contact info --}}

        {{-- right column — form (vertically centered) --}}
        <div class="md:flex md:items-center">
            <form action="#" method="POST" class="space-y-5 w-full">
                @csrf

                {{-- name + email row --}}
                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="block text-sm text-muted mb-2">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name"
                            class="w-full px-4 py-3 rounded-lg bg-card/40 backdrop-blur-md border border-line/60 text-body placeholder-muted focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition">
                    </div>
                    <div>
                        <label for="email" class="block text-sm text-muted mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com"
                            class="w-full px-4 py-3 rounded-lg bg-card/40 backdrop-blur-md border border-line/60 text-body placeholder-muted focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition">
                    </div>
                </div>
                {{-- end name + email row --}}

                {{-- subject --}}
                <div>
                    <label for="subject" class="block text-sm text-muted mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="How can I help?"
                        class="w-full px-4 py-3 rounded-lg bg-card/40 backdrop-blur-md border border-line/60 text-body placeholder-muted focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition">
                </div>
                {{-- message --}}
                <div>
                    <label for="message" class="block text-sm text-muted mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Tell me about your project..."
                        class="w-full px-4 py-3 rounded-lg bg-card/40 backdrop-blur-md border border-line/60 text-body placeholder-muted focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition"></textarea>
                </div>
                {{-- submit button --}}
                <button type="submit"
                    class="w-full px-6 py-3 rounded-lg bg-accent text-white font-medium hover:bg-accent-hover transition">
                    Send Message
                </button>
            </form>
        </div>
        {{-- end right column — form --}}

    </div>
    {{-- end contact grid --}}

</section>
{{-- ================= END OF CONTACT SECTION ================= --}}

@endsection
