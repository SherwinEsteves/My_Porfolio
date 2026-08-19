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
{{--  TECHNICAL BLOG --}}
{{-- ================================================================ --}}
<section id="blog" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-14 md:py-16 min-h-[calc(100vh-80px)] flex flex-col justify-center border-t border-line">

@php
    $staticPosts = [
        ['id' => 1, 'title' => 'Setting Up Proxmox VE on a Dedicated Server', 'slug' => 'setup-proxmox-ve', 'category' => 'Proxmox', 'date' => 'August 2026', 'readingTime' => 8, 'excerpt' => 'A complete walkthrough for installing and configuring Proxmox VE on a bare-metal dedicated server, including initial network setup, storage configuration, and your first virtual machine.', 'youtubeId' => 'Iz76KqzloJY', 'tags' => ['Proxmox VE', 'Virtualization', 'Linux', 'Server Setup']],
        ['id' => 2, 'title' => 'Configuring Nginx as a Reverse Proxy', 'slug' => 'nginx-reverse-proxy', 'category' => 'Networking', 'date' => 'August 2026', 'readingTime' => 10, 'excerpt' => 'Learn how to configure Nginx as a reverse proxy to route traffic to multiple web applications on a single server, with SSL termination and security best practices.', 'youtubeId' => 'jY2HvesANJE', 'tags' => ['Nginx', 'Reverse Proxy', 'SSL', 'Web Server']],
        ['id' => 3, 'title' => 'Managing LXC Containers in Proxmox', 'slug' => 'proxmox-lxc-containers', 'category' => 'Proxmox', 'date' => 'July 2026', 'readingTime' => 7, 'excerpt' => 'A practical guide to creating and managing LXC containers in Proxmox VE, including snapshots, backups, and resource allocation best practices.', 'youtubeId' => 'iIfRchzYSzM', 'tags' => ['LXC', 'Proxmox', 'Containers', 'Backups']],
        ['id' => 4, 'title' => 'Docker Compose: Multi-Container Applications', 'slug' => 'docker-compose-orchestration', 'category' => 'Docker', 'date' => 'July 2026', 'readingTime' => 9, 'excerpt' => 'Master Docker Compose to define, manage, and run multi-container applications with a single YAML file. Perfect for development environments and production deployments.', 'youtubeId' => 'tW50igaFZTQ', 'tags' => ['Docker', 'Docker Compose', 'Containers', 'DevOps']],
        ['id' => 5, 'title' => 'Linux Disk Partitioning and Mount Points', 'slug' => 'linux-disk-partitioning', 'category' => 'Linux', 'date' => 'June 2026', 'readingTime' => 6, 'excerpt' => 'Learn how to partition disks, create filesystems, and configure mount points in Linux using fdisk, parted, and /etc/fstab for persistent storage.', 'youtubeId' => 'GoZaMgEgrHw', 'tags' => ['Linux', 'Disk Management', 'fstab', 'System Admin']],
        ['id' => 6, 'title' => 'Setting Up a VPN Tunnel with WireGuard', 'slug' => 'wireguard-vpn-setup', 'category' => 'Networking', 'date' => 'June 2026', 'readingTime' => 7, 'excerpt' => 'Configure a secure WireGuard VPN tunnel on a Linux server for encrypted remote access to your home or office network.', 'youtubeId' => 'Ti8MYTKM1O8', 'tags' => ['WireGuard', 'VPN', 'Linux', 'Networking']],
        ['id' => 7, 'title' => 'Proxmox Backup Server: Automated Backups', 'slug' => 'proxmox-backup-server', 'category' => 'Proxmox', 'date' => 'May 2026', 'readingTime' => 8, 'excerpt' => 'Set up Proxmox Backup Server for reliable, deduplicated backups of your virtual machines and containers with automated scheduling and retention policies.', 'youtubeId' => 'O7PYK1Nv8Bs', 'tags' => ['Proxmox', 'Backup', 'PBS', 'Disaster Recovery']],
        ['id' => 8, 'title' => 'Ubuntu Server Hardening: Security Checklist', 'slug' => 'ubuntu-server-hardening', 'category' => 'Infrastructure', 'date' => 'May 2026', 'readingTime' => 9, 'excerpt' => 'A comprehensive security checklist for Ubuntu servers covering SSH hardening, firewall rules, automatic updates, user management, and intrusion detection.', 'youtubeId' => '2JlouLHdzOc', 'tags' => ['Ubuntu', 'Security', 'Hardening', 'UFW', 'SSH']],
        ['id' => 9, 'title' => 'Monitoring Stack with Prometheus and Grafana', 'slug' => 'prometheus-grafana-monitoring', 'category' => 'Infrastructure', 'date' => 'April 2026', 'readingTime' => 10, 'excerpt' => 'Build a complete monitoring solution with Prometheus for metrics collection and Grafana for visualization to keep track of your servers and services.', 'youtubeId' => 'n-Aylc5OLNk', 'tags' => ['Prometheus', 'Grafana', 'Monitoring', 'Docker']],
        ['id' => 10, 'title' => 'Troubleshooting Windows Workstation Issues', 'slug' => 'windows-troubleshooting-guide', 'category' => 'IT Support', 'date' => 'April 2026', 'readingTime' => 7, 'excerpt' => 'Practical troubleshooting steps for the most common Windows workstation problems: network issues, slow performance, printer errors, and system crashes.', 'youtubeId' => 'TA0gZs0X_7o', 'tags' => ['Windows', 'IT Support', 'Troubleshooting', 'Help Desk']],
    ];
@endphp

{{-- section header --}}
<div class="reveal mb-12 text-center md:text-left">
    <p class="text-accent font-semibold uppercase tracking-widest text-sm mb-2">Knowledge Base</p>
    <h1 class="text-xl md:text-2xl font-bold text-heading">Technical Blog</h1>
    <div class="mt-4 w-24 h-1 bg-gradient-to-r from-accent to-accent-hover rounded-full"></div>
    <p class="text-muted leading-relaxed mt-6 max-w-xl" style="transition-delay: 60ms">
        Tutorials, configurations, troubleshooting guides, and technical projects I've worked on.
    </p>
</div>
{{-- end section header --}}

{{-- blog carousel --}}
<div class="relative reveal" style="transition-delay: 100ms">
    <button type="button" data-carousel-prev aria-label="Previous posts"
        class="hidden md:flex absolute -left-5 top-[38%] z-10 w-10 h-10 items-center justify-center rounded-full glass text-heading hover:text-accent transition-all duration-300 shadow-lg">
        <i class="fas fa-chevron-left text-sm"></i>
    </button>

    <div id="blog-carousel" class="no-scrollbar flex gap-5 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2">
        @foreach ($staticPosts as $post)
            <button type="button" data-home-post="{{ $post['id'] }}"
               class="blog-card group text-left rounded-2xl overflow-hidden flex flex-col border border-line/40 bg-card hover:border-accent/40 hover:-translate-y-1 transition-all duration-300 w-[280px] sm:w-[320px] shrink-0 snap-start cursor-pointer">
                <div class="relative aspect-video overflow-hidden bg-card">
                    <img src="https://img.youtube.com/vi/{{ $post['youtubeId'] }}/mqdefault.jpg" alt="{{ $post['title'] }}"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-black/15"></div>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <span class="w-14 h-14 flex items-center justify-center rounded-full bg-black/55 text-white text-lg backdrop-blur-sm transition-transform duration-300 group-hover:scale-110">
                            <i class="fas fa-play ml-0.5"></i>
                        </span>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-flex px-2 py-0.5 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider">{{ $post['category'] }}</span>
                        <span class="text-muted text-xs">{{ $post['date'] }}</span>
                    </div>
                    <h3 class="text-base font-semibold text-heading leading-snug mb-2 line-clamp-2">{{ $post['title'] }}</h3>
                    <p class="text-muted text-sm leading-relaxed line-clamp-3 flex-1">{{ $post['excerpt'] }}</p>
                    <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-accent group-hover:gap-3 transition-all duration-300">
                        Read More <i class="fas fa-arrow-right text-xs"></i>
                    </span>
                </div>
            </button>
        @endforeach
    </div>

    <button type="button" data-carousel-next aria-label="Next posts"
        class="hidden md:flex absolute -right-5 top-[38%] z-10 w-10 h-10 items-center justify-center rounded-full glass text-heading hover:text-accent transition-all duration-300 shadow-lg">
        <i class="fas fa-chevron-right text-sm"></i>
    </button>
</div>
{{-- end blog carousel --}}

<div class="mt-10 text-center md:text-left reveal" style="transition-delay: 160ms">
    <a href="/blog" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-accent text-white font-semibold hover:bg-accent-hover transition-all duration-300 hover:-translate-y-0.5 text-sm">
        View All Articles <i class="fas fa-arrow-right text-xs"></i>
    </a>
</div>

{{-- blog article modal --}}
<div id="home-blog-modal" class="fixed inset-0 z-[100] hidden">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" data-home-modal-backdrop></div>
    <div class="relative z-10 flex items-start justify-center min-h-screen p-4 md:p-8 pt-24 pointer-events-none overflow-y-auto">
        <div class="pointer-events-auto w-full max-w-3xl bg-card rounded-2xl border border-line/40 shadow-2xl mb-10">

            <div class="relative">
                <button type="button" data-home-modal-close class="absolute top-4 right-4 z-10 w-9 h-9 inline-flex items-center justify-center rounded-full bg-black/40 text-white hover:bg-black/60 backdrop-blur-sm transition-colors">
                    <i class="fas fa-xmark"></i>
                </button>
                <div id="home-modal-video" class="hidden">
                    <div class="video-container rounded-t-2xl rounded-b-none border-0 border-b">
                        <iframe id="home-modal-iframe" src="" title="" loading="lazy"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="p-6 md:p-8">
                <header class="mb-6">
                    <span id="home-modal-category" class="inline-flex px-2.5 py-1 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider mb-3"></span>
                    <h2 id="home-modal-title" class="text-xl md:text-2xl font-bold text-heading leading-tight mb-3"></h2>
                    <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-muted">
                        <span class="inline-flex items-center gap-1.5">
                            <i class="fas fa-calendar-days text-accent text-xs"></i>
                            <span id="home-modal-date"></span>
                        </span>
                        <span class="inline-flex items-center gap-1.5">
                            <i class="fas fa-clock text-accent text-xs"></i>
                            <span id="home-modal-reading-time"></span> min read
                        </span>
                    </div>
                </header>

                <p id="home-modal-excerpt" class="text-body leading-relaxed mb-6"></p>

                <div id="home-modal-body" class="article-body mb-6"></div>

                <div id="home-modal-tags" class="flex flex-wrap gap-2"></div>
            </div>

        </div>
    </div>
</div>

<script>
(function () {
    var homePosts = [
        { id: 1, title: "Setting Up Proxmox VE on a Dedicated Server", category: "Proxmox", date: "August 2026", readingTime: 8, youtubeId: "Iz76KqzloJY", excerpt: "A complete walkthrough for installing and configuring Proxmox VE on a bare-metal dedicated server, including initial network setup, storage configuration, and your first virtual machine.", tags: ["Proxmox VE", "Virtualization", "Linux", "Server Setup"],
          body: '<h2>Why Proxmox VE?</h2><p>Proxmox VE is a powerful open-source server virtualization platform that combines KVM virtualization and LXC containers into a single management interface. It is an excellent choice for homelabs and production environments alike.</p><h2>Prerequisites</h2><ul><li>A dedicated server or mini PC with VT-x/VT-d support</li><li>At least 8GB RAM (16GB recommended)</li><li>A USB drive for the installation media</li><li>Ethernet cable for initial network configuration</li></ul><h2>Step 1: Download and Flash the ISO</h2><p>Download the latest Proxmox VE ISO from <a href="https://www.proxmox.com/en/downloads" target="_blank">proxmox.com</a> and flash it to a USB drive using Rufus or <code>dd</code>.</p><pre><code>sudo dd if=proxmox-ve_8.1-1.iso of=/dev/sdX bs=4M status=progress</code></pre><h2>Step 2: Install Proxmox VE</h2><p>Boot from the USB drive and follow the installer. Select your target disk, set your timezone, and configure the management network interface.</p><h2>Step 3: Post-Install Network Configuration</h2><p>After installation, access the web interface at <code>https://your-ip:8006</code>. Navigate to <strong>System &rarr; Network</strong> to configure your bridge interfaces for VM networking.</p><h2>Step 4: Storage Configuration</h2><p>Proxmox supports local storage, ZFS, NFS, CIFS, and more. For production use, ZFS on mirrored SSDs provides excellent data integrity and performance.</p><h2>Step 5: Your First VM</h2><p>Navigate to your node &rarr; Create VM, select an ISO image, allocate resources, and boot. The entire process from bare metal to running VM takes about 30 minutes.</p>' },
        { id: 2, title: "Configuring Nginx as a Reverse Proxy", category: "Networking", date: "August 2026", readingTime: 10, youtubeId: "jY2HvesANJE", excerpt: "Learn how to configure Nginx as a reverse proxy to route traffic to multiple web applications on a single server, with SSL termination and security best practices.", tags: ["Nginx", "Reverse Proxy", "SSL", "Web Server"],
          body: '<h2>What is a Reverse Proxy?</h2><p>A reverse proxy sits between clients and your backend applications, forwarding requests to the appropriate service based on the URL or hostname. Nginx excels at this role due to its high performance and low resource consumption.</p><h2>Basic Configuration</h2><pre><code>server {\n    listen 80;\n    server_name app.example.com;\n    location / {\n        proxy_pass http://127.0.0.1:3000;\n        proxy_set_header Host $host;\n        proxy_set_header X-Real-IP $remote_addr;\n    }\n}</code></pre><h2>Adding SSL with Certbot</h2><pre><code>sudo apt install certbot python3-certbot-nginx\nsudo certbot --nginx -d app.example.com</code></pre><h2>Security Headers</h2><pre><code>add_header X-Frame-Options "SAMEORIGIN" always;\nadd_header X-Content-Type-Options "nosniff" always;</code></pre>' },
        { id: 3, title: "Managing LXC Containers in Proxmox", category: "Proxmox", date: "July 2026", readingTime: 7, youtubeId: "iIfRchzYSzM", excerpt: "A practical guide to creating and managing LXC containers in Proxmox VE, including snapshots, backups, and resource allocation best practices.", tags: ["LXC", "Proxmox", "Containers", "Backups"],
          body: '<h2>LXC Containers vs Virtual Machines</h2><p>LXC containers share the host kernel, making them extremely lightweight compared to full virtual machines. They start in seconds and consume minimal resources.</p><h2>Resource Allocation</h2><ul><li><strong>CPU:</strong> Start with 1-2 cores; adjust based on workload</li><li><strong>Memory:</strong> 512MB is sufficient for most lightweight services</li><li><strong>Storage:</strong> Use thin-provisioned volumes for flexibility</li></ul><h2>Snapshots</h2><pre><code>pct snapshot 100 pre-update-snapshot</code></pre><h2>Backup Strategy</h2><pre><code>vzdump 100 --storage local --compress zstd</code></pre>' },
        { id: 4, title: "Docker Compose: Multi-Container Applications", category: "Docker", date: "July 2026", readingTime: 9, youtubeId: "tW50igaFZTQ", excerpt: "Master Docker Compose to define, manage, and run multi-container applications with a single YAML file.", tags: ["Docker", "Docker Compose", "Containers", "DevOps"],
          body: '<h2>What is Docker Compose?</h2><p>Docker Compose is a tool for defining and running multi-container Docker applications. With a single YAML file, you can configure all your services, networks, and volumes.</p><h2>Basic docker-compose.yml</h2><pre><code>version: \'3.8\'\nservices:\n  web:\n    build: .\n    ports:\n      - "8080:80"\n    depends_on:\n      - db\n  db:\n    image: mysql:8.0\n    environment:\n      MYSQL_ROOT_PASSWORD: secret</code></pre><h2>Common Commands</h2><pre><code>docker compose up -d\ndocker compose down\ndocker compose logs -f web\ndocker compose ps</code></pre>' },
        { id: 5, title: "Linux Disk Partitioning and Mount Points", category: "Linux", date: "June 2026", readingTime: 6, youtubeId: "GoZaMgEgrHw", excerpt: "Learn how to partition disks, create filesystems, and configure mount points in Linux using fdisk, parted, and /etc/fstab.", tags: ["Linux", "Disk Management", "fstab", "System Admin"],
          body: '<h2>Identifying Disks</h2><pre><code>lsblk\nsudo fdisk -l</code></pre><h2>Partitioning with fdisk</h2><pre><code>sudo fdisk /dev/sdb\n# n - new partition\n# p - primary\n# w - write changes</code></pre><h2>Creating a Filesystem</h2><pre><code>sudo mkfs.ext4 /dev/sdb1</code></pre><h2>Making It Persistent with fstab</h2><pre><code>/dev/sdb1  /mnt/data  ext4  defaults  0  2</code></pre>' },
        { id: 6, title: "Setting Up a VPN Tunnel with WireGuard", category: "Networking", date: "June 2026", readingTime: 7, youtubeId: "Ti8MYTKM1O8", excerpt: "Configure a secure WireGuard VPN tunnel on a Linux server for encrypted remote access.", tags: ["WireGuard", "VPN", "Linux", "Networking"],
          body: '<h2>Why WireGuard?</h2><p>WireGuard is a modern, fast, and simple VPN protocol with state-of-the-art cryptography and a much smaller codebase than OpenVPN.</p><h2>Installation</h2><pre><code>sudo apt install wireguard</code></pre><h2>Generating Keys</h2><pre><code>wg genkey | tee privatekey | wg pubkey > publickey</code></pre><h2>Server Configuration</h2><pre><code>[Interface]\nPrivateKey = &lt;server-private-key&gt;\nAddress = 10.0.0.1/24\nListenPort = 51820</code></pre><h2>Starting the Tunnel</h2><pre><code>sudo wg-quick up wg0\nsudo systemctl enable wg-quick@wg0</code></pre>' },
        { id: 7, title: "Proxmox Backup Server: Automated Backups", category: "Proxmox", date: "May 2026", readingTime: 8, youtubeId: "O7PYK1Nv8Bs", excerpt: "Set up Proxmox Backup Server for reliable, deduplicated backups of your virtual machines and containers.", tags: ["Proxmox", "Backup", "PBS", "Disaster Recovery"],
          body: '<h2>Why Dedicated Backup?</h2><p>Proxmox Backup Server (PBS) provides deduplication, encryption, and incremental backups &mdash; dramatically reducing storage requirements.</p><h2>Configuring Backups</h2><p>In Proxmox VE, go to Datacenter &rarr; Backup &rarr; Add. Select your PBS instance, choose a schedule, set retention to keep 7 daily, 4 weekly, and 3 monthly backups.</p><h2>Verification</h2><pre><code>proxmox-backup-client verify datastore1</code></pre>' },
        { id: 8, title: "Ubuntu Server Hardening: Security Checklist", category: "Infrastructure", date: "May 2026", readingTime: 9, youtubeId: "2JlouLHdzOc", excerpt: "A comprehensive security checklist for Ubuntu servers covering SSH hardening, firewall rules, automatic updates, and intrusion detection.", tags: ["Ubuntu", "Security", "Hardening", "UFW", "SSH"],
          body: '<h2>1. SSH Hardening</h2><pre><code>PermitRootLogin no\nPasswordAuthentication no\nPort 2222</code></pre><h2>2. Firewall with UFW</h2><pre><code>sudo ufw default deny incoming\nsudo ufw default allow outgoing\nsudo ufw allow 2222/tcp\nsudo ufw enable</code></pre><h2>3. Automatic Security Updates</h2><pre><code>sudo apt install unattended-upgrades\nsudo dpkg-reconfigure -plow unattended-upgrades</code></pre><h2>4. Fail2Ban</h2><pre><code>sudo apt install fail2ban\nsudo systemctl enable fail2ban</code></pre>' },
        { id: 9, title: "Monitoring Stack with Prometheus and Grafana", category: "Infrastructure", date: "April 2026", readingTime: 10, youtubeId: "n-Aylc5OLNk", excerpt: "Build a complete monitoring solution with Prometheus for metrics collection and Grafana for visualization.", tags: ["Prometheus", "Grafana", "Monitoring", "Docker"],
          body: '<h2>Docker Compose Setup</h2><pre><code>version: \'3.8\'\nservices:\n  prometheus:\n    image: prom/prometheus\n    ports:\n      - "9090:9090"\n  grafana:\n    image: grafana/grafana\n    ports:\n      - "3000:3000"</code></pre><h2>Prometheus Configuration</h2><pre><code>scrape_configs:\n  - job_name: \'node\'\n    static_configs:\n      - targets: [\'node-exporter:9100\']</code></pre><h2>Grafana Dashboards</h2><p>Import pre-built dashboards from grafana.com &mdash; dashboard ID 1860 is a great starting point for server monitoring.</p>' },
        { id: 10, title: "Troubleshooting Windows Workstation Issues", category: "IT Support", date: "April 2026", readingTime: 7, youtubeId: "TA0gZs0X_7o", excerpt: "Practical troubleshooting steps for the most common Windows workstation problems: network issues, slow performance, printer errors, and system crashes.", tags: ["Windows", "IT Support", "Troubleshooting", "Help Desk"],
          body: '<h2>Network Connectivity Issues</h2><pre><code>ipconfig /release\nipconfig /renew\nipconfig /flushdns\nnetsh winsock reset</code></pre><h2>Slow Performance</h2><ul><li>Check Task Manager for high CPU or memory usage</li><li>Run <code>sfc /scannow</code> to check for corrupted system files</li><li>Check disk space</li></ul><h2>Blue Screen (BSOD)</h2><p>Check the Event Viewer &rarr; Windows Logs &rarr; System for bugcheck codes. Common causes include faulty RAM, driver conflicts, or overheating.</p>' }
    ];

    var modal     = document.getElementById('home-blog-modal');
    var backdrop  = modal.querySelector('[data-home-modal-backdrop]');
    var closeBtn  = modal.querySelector('[data-home-modal-close]');
    var videoSec  = document.getElementById('home-modal-video');
    var iframe    = document.getElementById('home-modal-iframe');
    var catEl     = document.getElementById('home-modal-category');
    var titleEl   = document.getElementById('home-modal-title');
    var dateEl    = document.getElementById('home-modal-date');
    var rtEl      = document.getElementById('home-modal-reading-time');
    var excerptEl = document.getElementById('home-modal-excerpt');
    var bodyEl    = document.getElementById('home-modal-body');
    var tagsEl    = document.getElementById('home-modal-tags');

    function openHomeBlogModal(postId) {
        var post = homePosts.find(function (p) { return p.id === postId; });
        if (!post) return;

        catEl.textContent     = post.category;
        titleEl.textContent   = post.title;
        dateEl.textContent    = post.date;
        rtEl.textContent      = post.readingTime;
        excerptEl.textContent = post.excerpt;
        bodyEl.innerHTML      = post.body;

        if (post.youtubeId) {
            iframe.src = 'https://www.youtube-nocookie.com/embed/' + post.youtubeId;
            iframe.title = post.title;
            videoSec.classList.remove('hidden');
        } else {
            iframe.src = '';
            videoSec.classList.add('hidden');
        }

        if (post.tags && post.tags.length) {
            tagsEl.innerHTML = post.tags.map(function (t) {
                return '<span class="px-3 py-1 rounded-full bg-card border border-line text-body text-sm">' + t + '</span>';
            }).join('');
            tagsEl.classList.remove('hidden');
        } else {
            tagsEl.innerHTML = '';
            tagsEl.classList.add('hidden');
        }

        modal.classList.remove('hidden');
        document.documentElement.style.overflow = 'hidden';
        document.body.style.overflow = 'hidden';
    }

    function closeHomeBlogModal() {
        modal.classList.add('hidden');
        iframe.src = '';
        document.documentElement.style.overflow = '';
        document.body.style.overflow = '';
    }

    document.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-home-post]');
        if (btn) {
            e.preventDefault();
            openHomeBlogModal(parseInt(btn.dataset.homePost));
        }
    });

    closeBtn.addEventListener('click', closeHomeBlogModal);
    backdrop.addEventListener('click', closeHomeBlogModal);
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeHomeBlogModal();
    });
})();
</script>

</section>
{{-- ================= END OF TECHNICAL BLOG SECTION ================= --}}

{{-- ================================================================ --}}
{{--  SKILLS --}}
{{-- ================================================================ --}}
<section id="skills" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-14 md:py-16 min-h-[calc(100vh-80px)] flex flex-col justify-center border-t border-line">

    {{-- section header --}}
    <div class="reveal mb-12 text-center md:text-left">
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
<section id="experience" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-14 md:py-16 min-h-[calc(100vh-80px)] flex flex-col border-t border-line">

    {{-- section header --}}
    <div class="reveal mb-12 text-center md:text-left">
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
<section id="education" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-14 md:py-16 min-h-[calc(100vh-80px)] flex flex-col justify-center border-t border-line">

    {{-- section header --}}
    <div class="reveal mb-10 text-center md:text-left">
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
<section id="contact" class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-14 md:py-16 min-h-[calc(100vh-80px)] flex flex-col justify-center border-t border-line">

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
