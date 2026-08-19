@extends('layouts.app')

@section('title', 'Technical Blog')

@section('content')

<div class="max-w-6xl mx-auto px-6 md:px-12 lg:px-20 py-14 md:py-16">

    <span id="blog-detail-page" class="hidden" aria-hidden="true"></span>

    {{-- page header --}}
    <div class="mb-10">
        <p class="text-accent font-semibold uppercase tracking-widest text-sm mb-2">Knowledge Base</p>
        <h1 class="text-2xl md:text-3xl font-bold text-heading">Technical Blog</h1>
        <div class="mt-4 w-24 h-1 bg-gradient-to-r from-accent to-accent-hover rounded-full"></div>
        <p class="text-muted leading-relaxed mt-6 max-w-xl">
            Tutorials, configurations, troubleshooting guides, and technical projects I've worked on.
        </p>
    </div>

    {{-- search and filters --}}
    <div class="mb-8 space-y-4">
        <div class="relative max-w-md">
            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-muted text-sm"></i>
            <input type="text" id="blog-search" placeholder="Search articles..."
                class="w-full pl-11 pr-4 py-3 rounded-xl bg-card border border-line text-heading placeholder-muted text-sm focus:outline-none focus:border-accent transition">
        </div>
        <div id="blog-filters" class="flex flex-wrap gap-2">
            <button type="button" data-filter="all" class="filter-pill active">All</button>
            <button type="button" data-filter="Linux" class="filter-pill">Linux</button>
            <button type="button" data-filter="Proxmox" class="filter-pill">Proxmox</button>
            <button type="button" data-filter="Networking" class="filter-pill">Networking</button>
            <button type="button" data-filter="Docker" class="filter-pill">Docker</button>
            <button type="button" data-filter="Virtualization" class="filter-pill">Virtualization</button>
            <button type="button" data-filter="Infrastructure" class="filter-pill">Infrastructure</button>
            <button type="button" data-filter="IT Support" class="filter-pill">IT Support</button>
        </div>
    </div>

    {{-- blog listing --}}
    <div id="blog-listing" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    </div>

    {{-- empty state --}}
    <div id="blog-empty" class="hidden glass rounded-2xl p-10 md:p-14 text-center">
        <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-accent/10 text-accent flex items-center justify-center text-2xl">
            <i class="fas fa-book-open"></i>
        </div>
        <p class="text-muted text-sm leading-relaxed max-w-md mx-auto">
            No articles found matching your search.
        </p>
    </div>

    {{-- detail view (hidden by default) --}}
    <div id="blog-detail" class="hidden">

        <button type="button" id="blog-back" class="inline-flex items-center gap-2 text-sm font-semibold text-accent hover:underline mb-8">
            <i class="fas fa-arrow-left text-xs"></i> Back to Articles
        </button>

        <article class="max-w-4xl">

            <header class="mb-8">
                <span id="detail-category" class="inline-flex px-2.5 py-1 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider mb-4"></span>
                <h1 id="detail-title" class="text-2xl md:text-4xl font-bold text-heading leading-tight mb-4"></h1>
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-muted">
                    <span class="inline-flex items-center gap-2">
                        <i class="fas fa-calendar-days text-accent"></i>
                        <span id="detail-date"></span>
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <i class="fas fa-clock text-accent"></i>
                        <span id="detail-reading-time"></span> min read
                    </span>
                    <span id="detail-video-badge" class="hidden inline-flex items-center gap-2">
                        <i class="fab fa-youtube text-[#FF0000]"></i>
                        Video included
                    </span>
                </div>
            </header>

            <div id="detail-video" class="mb-10 hidden">
                <div class="video-container">
                    <iframe id="detail-video-iframe" src="" title="" loading="lazy"
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <p id="detail-excerpt" class="text-lg text-body leading-relaxed mb-10"></p>

            <div id="detail-body" class="article-body mb-10"></div>

            <div id="detail-tags" class="flex flex-wrap gap-2.5 mb-10"></div>

            <div id="detail-view-article" class="mb-10 hidden">
                <a id="detail-article-link" href="#" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-accent text-white font-semibold hover:bg-accent-hover transition-all duration-300 hover:-translate-y-0.5">
                    View Full Article <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>

            <div class="border-t border-line/40 pt-8">
                <button type="button" class="blog-back-bottom inline-flex items-center gap-2 text-sm font-semibold text-accent hover:underline">
                    <i class="fas fa-arrow-left text-xs"></i> Back to Articles
                </button>
            </div>

        </article>

    </div>

</div>

<script>
(function () {

    var posts = [
        {
            id: 1,
            title: "Setting Up Proxmox VE on a Dedicated Server: A Step-by-Step Guide",
            slug: "setup-proxmox-ve",
            category: "Proxmox",
            date: "August 2026",
            readingTime: 8,
            youtubeId: "Iz76KqzloJY",
            excerpt: "A complete walkthrough for installing and configuring Proxmox VE on a bare-metal dedicated server, including initial network setup, storage configuration, and your first virtual machine.",
            body: `<h2>Why Proxmox VE?</h2>
<p>Proxmox VE is a powerful open-source server virtualization platform that combines KVM virtualization and LXC containers into a single management interface. It's an excellent choice for homelabs and production environments alike.</p>
<h2>Prerequisites</h2>
<ul>
<li>A dedicated server or mini PC with VT-x/VT-d support</li>
<li>At least 8GB RAM (16GB recommended)</li>
<li>A USB drive for the installation media</li>
<li>Ethernet cable for initial network configuration</li>
</ul>
<h2>Step 1: Download and Flash the ISO</h2>
<p>Download the latest Proxmox VE ISO from <a href="https://www.proxmox.com/en/downloads" target="_blank">proxmox.com</a> and flash it to a USB drive using Rufus or <code>dd</code>.</p>
<pre><code>sudo dd if=proxmox-ve_8.1-1.iso of=/dev/sdX bs=4M status=progress</code></pre>
<h2>Step 2: Install Proxmox VE</h2>
<p>Boot from the USB drive and follow the installer. Select your target disk, set your timezone, and configure the management network interface. The installer will guide you through setting a root password and management IP address.</p>
<h2>Step 3: Post-Install Network Configuration</h2>
<p>After installation, access the web interface at <code>https://your-ip:8006</code>. Navigate to <strong>System → Network</strong> to configure your bridge interfaces for VM networking.</p>
<h2>Step 4: Storage Configuration</h2>
<p>Proxmox supports local storage, ZFS, NFS, CIFS, and more. For production use, ZFS on mirrored SSDs provides excellent data integrity and performance.</p>
<h2>Step 5: Your First VM</h2>
<p>Navigate to your node → Create VM, select an ISO image, allocate resources, and boot. The entire process from bare metal to running VM takes about 30 minutes.</p>`,
            tags: ["Proxmox VE", "Virtualization", "Linux", "Server Setup"]
        },
        {
            id: 2,
            title: "Configuring Nginx as a Reverse Proxy for Multiple Web Applications",
            slug: "nginx-reverse-proxy",
            category: "Networking",
            date: "August 2026",
            readingTime: 10,
            youtubeId: "jY2HvesANJE",
            excerpt: "Learn how to configure Nginx as a reverse proxy to route traffic to multiple web applications on a single server, with SSL termination and security best practices.",
            body: `<h2>What is a Reverse Proxy?</h2>
<p>A reverse proxy sits between clients and your backend applications, forwarding requests to the appropriate service based on the URL or hostname. Nginx excels at this role due to its high performance and low resource consumption.</p>
<h2>Why Use Nginx as a Reverse Proxy?</h2>
<ul>
<li>Route multiple apps on different ports through ports 80/443</li>
<li>SSL termination at a single point</li>
<li>Load balancing across multiple backend instances</li>
<li>Caching static assets to reduce backend load</li>
</ul>
<h2>Basic Configuration</h2>
<pre><code>server {
    listen 80;
    server_name app.example.com;

    location / {
        proxy_pass http://127.0.0.1:3000;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}</code></pre>
<h2>Adding SSL with Certbot</h2>
<p>Install Certbot and obtain a free Let's Encrypt certificate:</p>
<pre><code>sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d app.example.com</code></pre>
<h2>Routing Multiple Applications</h2>
<p>Each <code>server</code> block can point to a different backend port. For path-based routing, use multiple <code>location</code> blocks within a single server.</p>
<h2>Security Headers</h2>
<p>Add security headers to protect against common web vulnerabilities:</p>
<pre><code>add_header X-Frame-Options "SAMEORIGIN" always;
add_header X-Content-Type-Options "nosniff" always;
add_header X-XSS-Protection "1; mode=block" always;</code></pre>`,
            tags: ["Nginx", "Reverse Proxy", "SSL", "Web Server"]
        },
        {
            id: 3,
            title: "Managing LXC Containers in Proxmox: Creation, Snapshots, and Backups",
            slug: "proxmox-lxc-containers",
            category: "Proxmox",
            date: "July 2026",
            readingTime: 7,
            youtubeId: "iIfRchzYSzM",
            excerpt: "A practical guide to creating and managing LXC containers in Proxmox VE, including snapshots, backups, and resource allocation best practices.",
            body: `<h2>LXC Containers vs Virtual Machines</h2>
<p>LXC containers share the host kernel, making them extremely lightweight compared to full virtual machines. They start in seconds and consume minimal resources — ideal for running services like Nginx, databases, or monitoring tools.</p>
<h2>Creating an LXC Container</h2>
<p>In the Proxmox web UI, navigate to your node → Create CT. Select a template (Ubuntu, Debian, etc.), set a password, configure networking, and define storage. The container is ready in under a minute.</p>
<h2>Resource Allocation</h2>
<ul>
<li><strong>CPU:</strong> Start with 1-2 cores; adjust based on workload</li>
<li><strong>Memory:</strong> 512MB is sufficient for most lightweight services</li>
<li><strong>Storage:</strong> Use thin-provisioned volumes for flexibility</li>
</ul>
<h2>Snapshots</h2>
<p>Before making changes, take a snapshot. If something breaks, you can roll back instantly:</p>
<pre><code>pct snapshot 100 pre-update-snapshot</code></pre>
<h2>Backup Strategy</h2>
<p>Configure automated backups via the Proxmox Datacenter → Backup menu. Use <code>vzdump</code> to create scheduled backups to local storage or NFS mounts.</p>
<pre><code>vzdump 100 --storage local --compress zstd</code></pre>`,
            tags: ["LXC", "Proxmox", "Containers", "Backups"]
        },
        {
            id: 4,
            title: "Docker Compose: Orchestrating Multi-Container Applications",
            slug: "docker-compose-orchestration",
            category: "Docker",
            date: "July 2026",
            readingTime: 9,
            youtubeId: "tW50igaFZTQ",
            excerpt: "Master Docker Compose to define, manage, and run multi-container applications with a single YAML file. Perfect for development environments and production deployments.",
            body: `<h2>What is Docker Compose?</h2>
<p>Docker Compose is a tool for defining and running multi-container Docker applications. With a single YAML file, you can configure all your services, networks, and volumes.</p>
<h2>Basic docker-compose.yml</h2>
<pre><code>version: '3.8'
services:
  web:
    build: .
    ports:
      - "8080:80"
    depends_on:
      - db
  db:
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: secret
    volumes:
      - db-data:/var/lib/mysql
volumes:
  db-data:</code></pre>
<h2>Common Commands</h2>
<pre><code>docker compose up -d        # Start all services
docker compose down          # Stop and remove
docker compose logs -f web   # Stream logs
docker compose ps            # List running services
docker compose exec web bash # Shell into a service</code></pre>
<h2>Networking</h2>
<p>Compose automatically creates a default network for your services. Containers can reach each other by service name — no manual IP configuration needed.</p>
<h2>Persistence with Volumes</h2>
<p>Named volumes persist data across container restarts. Bind mounts are useful for development where you want live code changes reflected inside the container.</p>`,
            tags: ["Docker", "Docker Compose", "Containers", "DevOps"]
        },
        {
            id: 5,
            title: "Linux Disk Partitioning and Mount Points: A Practical Guide",
            slug: "linux-disk-partitioning",
            category: "Linux",
            date: "June 2026",
            readingTime: 6,
            youtubeId: "GoZaMgEgrHw",
            excerpt: "Learn how to partition disks, create filesystems, and configure mount points in Linux using fdisk, parted, and /etc/fstab for persistent storage.",
            body: `<h2>When Do You Need This?</h2>
<p>Adding a new disk to a server, expanding storage, or setting up a dedicated data partition all require disk partitioning and mount point configuration.</p>
<h2>Identifying Disks</h2>
<pre><code>lsblk
sudo fdisk -l</code></pre>
<h2>Partitioning with fdisk</h2>
<pre><code>sudo fdisk /dev/sdb
# n — new partition
# p — primary
# 1 — partition number
# Accept defaults for size
# w — write changes</code></pre>
<h2>Creating a Filesystem</h2>
<pre><code>sudo mkfs.ext4 /dev/sdb1</code></pre>
<h2>Setting Up the Mount Point</h2>
<pre><code>sudo mkdir -p /mnt/data
sudo mount /dev/sdb1 /mnt/data</code></pre>
<h2>Making It Persistent with fstab</h2>
<p>Add an entry to <code>/etc/fstab</code> so the partition mounts automatically on boot:</p>
<pre><code>/dev/sdb1  /mnt/data  ext4  defaults  0  2</code></pre>
<p>Use <code>sudo mount -a</code> to test the fstab entry without rebooting.</p>`,
            tags: ["Linux", "Disk Management", "fstab", "System Admin"]
        },
        {
            id: 6,
            title: "Setting Up a VPN Tunnel with WireGuard on Linux",
            slug: "wireguard-vpn-setup",
            category: "Networking",
            date: "June 2026",
            readingTime: 7,
            youtubeId: "Ti8MYTKM1O8",
            excerpt: "Configure a secure WireGuard VPN tunnel on a Linux server for encrypted remote access to your home or office network.",
            body: `<h2>Why WireGuard?</h2>
<p>WireGuard is a modern, fast, and simple VPN protocol. It uses state-of-the-art cryptography, has a much smaller codebase than OpenVPN or IPSec, and performs significantly better.</p>
<h2>Installation</h2>
<pre><code>sudo apt install wireguard</code></pre>
<h2>Generating Keys</h2>
<pre><code>wg genkey | tee privatekey | wg pubkey > publickey</code></pre>
<h2>Server Configuration</h2>
<pre><code># /etc/wireguard/wg0.conf
[Interface]
PrivateKey = &lt;server-private-key&gt;
Address = 10.0.0.1/24
ListenPort = 51820
PostUp = iptables -A FORWARD -i wg0 -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE
PostDown = iptables -D FORWARD -i wg0 -j ACCEPT; iptables -t nat -D POSTROUTING -o eth0 -j MASQUERADE

[Peer]
PublicKey = &lt;client-public-key&gt;
AllowedIPs = 10.0.0.2/32</code></pre>
<h2>Client Configuration</h2>
<pre><code>[Interface]
PrivateKey = &lt;client-private-key&gt;
Address = 10.0.0.2/24
DNS = 1.1.1.1

[Peer]
PublicKey = &lt;server-public-key&gt;
Endpoint = your-server-ip:51820
AllowedIPs = 0.0.0.0/0
PersistentKeepalive = 25</code></pre>
<h2>Starting the Tunnel</h2>
<pre><code>sudo wg-quick up wg0
sudo systemctl enable wg-quick@wg0</code></pre>`,
            tags: ["WireGuard", "VPN", "Linux", "Networking"]
        },
        {
            id: 7,
            title: "Proxmox Backup Server: Automated VM and Container Backups",
            slug: "proxmox-backup-server",
            category: "Proxmox",
            date: "May 2026",
            readingTime: 8,
            youtubeId: "O7PYK1Nv8Bs",
            excerpt: "Set up Proxmox Backup Server for reliable, deduplicated backups of your virtual machines and containers with automated scheduling and retention policies.",
            body: `<h2>Why Dedicated Backup?</h2>
<p>While Proxmox VE includes local backup functionality, Proxmox Backup Server (PBS) provides deduplication, encryption, and incremental backups — dramatically reducing storage requirements.</p>
<h2>Installation</h2>
<p>Install PBS on a separate machine or as an LXC container within your Proxmox cluster. The web interface runs on port 8007.</p>
<h2>Adding a Storage Repository</h2>
<p>Navigate to Administration → Storage / Disks to add a local disk, then create a Datastore on it.</p>
<h2>Configuring Backups in Proxmox VE</h2>
<p>In Proxmox VE, go to Datacenter → Backup → Add. Select your PBS instance, choose a schedule (e.g., daily at 2 AM), set retention to keep 7 daily, 4 weekly, and 3 monthly backups.</p>
<h2>Verification</h2>
<p>Always verify backups periodically. PBS provides a prune-and-verify job that checks data integrity automatically.</p>
<pre><code>proxmox-backup-client verify datastore1</code></pre>
<h2>Restore</h2>
<p>Restoring a VM or container from PBS is straightforward — select the backup, choose the target storage, and click Restore.</p>`,
            tags: ["Proxmox", "Backup", "PBS", "Disaster Recovery"]
        },
        {
            id: 8,
            title: "Ubuntu Server Hardening: Essential Security Checklist",
            slug: "ubuntu-server-hardening",
            category: "Infrastructure",
            date: "May 2026",
            readingTime: 9,
            youtubeId: "2JlouLHdzOc",
            excerpt: "A comprehensive security checklist for Ubuntu servers covering SSH hardening, firewall rules, automatic updates, user management, and intrusion detection.",
            body: `<h2>Why Harden Your Server?</h2>
<p>Default server configurations are not designed for hostile environments. Even on a private network, following security best practices protects against lateral movement and accidental exposure.</p>
<h2>1. SSH Hardening</h2>
<p>Disable root login and password authentication in <code>/etc/ssh/sshd_config</code>:</p>
<pre><code>PermitRootLogin no
PasswordAuthentication no
Port 2222</code></pre>
<h2>2. Firewall with UFW</h2>
<pre><code>sudo ufw default deny incoming
sudo ufw default allow outgoing
sudo ufw allow 2222/tcp
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp
sudo ufw enable</code></pre>
<h2>3. Automatic Security Updates</h2>
<pre><code>sudo apt install unattended-upgrades
sudo dpkg-reconfigure -plow unattended-upgrades</code></pre>
<h2>4. User Management</h2>
<p>Create a sudo user, disable the default account, and enforce strong passwords with <code>passwdqc</code>.</p>
<h2>5. Fail2Ban</h2>
<pre><code>sudo apt install fail2ban
sudo systemctl enable fail2ban</code></pre>
<h2>6. Audit with Lynis</h2>
<pre><code>sudo apt install lynis
sudo lynis audit system</code></pre>
<p>Lynis provides a security score and actionable recommendations for your specific configuration.</p>`,
            tags: ["Ubuntu", "Security", "Hardening", "UFW", "SSH"]
        },
        {
            id: 9,
            title: "Deploying a Monitoring Stack with Prometheus and Grafana",
            slug: "prometheus-grafana-monitoring",
            category: "Infrastructure",
            date: "April 2026",
            readingTime: 10,
            youtubeId: "n-Aylc5OLNk",
            excerpt: "Build a complete monitoring solution with Prometheus for metrics collection and Grafana for visualization to keep track of your servers and services.",
            body: `<h2>Why Monitor?</h2>
<p>You can't fix what you can't see. A monitoring stack gives you real-time visibility into server health, application performance, and potential issues before they become outages.</p>
<h2>Docker Compose Setup</h2>
<pre><code>version: '3.8'
services:
  prometheus:
    image: prom/prometheus
    ports:
      - "9090:9090"
    volumes:
      - ./prometheus.yml:/etc/prometheus/prometheus.yml
  grafana:
    image: grafana/grafana
    ports:
      - "3000:3000"
    environment:
      - GF_SECURITY_ADMIN_PASSWORD=admin</code></pre>
<h2>Prometheus Configuration</h2>
<pre><code>scrape_configs:
  - job_name: 'node'
    static_configs:
      - targets: ['node-exporter:9100']</code></pre>
<h2>Node Exporter</h2>
<p>Install Node Exporter on each server you want to monitor. It exposes system metrics (CPU, memory, disk, network) on port 9100.</p>
<h2>Grafana Dashboards</h2>
<p>Import pre-built dashboards from grafana.com — dashboard ID 1860 (Node Exporter Full) is a great starting point for server monitoring.</p>
<h2>Alerting</h2>
<p>Configure Alertmanager to send notifications via email, Slack, or Telegram when metrics exceed defined thresholds.</p>`,
            tags: ["Prometheus", "Grafana", "Monitoring", "Docker"]
        },
        {
            id: 10,
            title: "Troubleshooting Common Windows Workstation Issues: A Support Guide",
            slug: "windows-troubleshooting-guide",
            category: "IT Support",
            date: "April 2026",
            readingTime: 7,
            userId: null,
            youtubeId: "TA0gZs0X_7o",
            excerpt: "Practical troubleshooting steps for the most common Windows workstation problems: network issues, slow performance, printer errors, and system crashes.",
            body: `<h2>Network Connectivity Issues</h2>
<p>When a user reports "no internet," start with the basics:</p>
<pre><code>ipconfig /release
ipconfig /renew
ipconfig /flushdns
netsh winsock reset</code></pre>
<p>If these don't resolve it, check the physical connection, switch ports, and DNS settings.</p>
<h2>Slow Performance</h2>
<ul>
<li>Check Task Manager for high CPU or memory usage</li>
<li>Run <code>sfc /scannow</code> to check for corrupted system files</li>
<li>Run <code>DISM /Online /Cleanup-Image /RestoreHealth</code></li>
<li>Check disk space — low space causes significant slowdowns</li>
<li>Review startup programs via Task Manager → Startup tab</li>
</ul>
<h2>Printer Issues</h2>
<p>Most printer problems are connectivity-related:</p>
<ul>
<li>Verify the printer is on the same network</li>
<li>Clear the print queue and restart the Print Spooler service</li>
<li>Reinstall the printer driver if needed</li>
</ul>
<h2>Blue Screen (BSOD)</h2>
<p>Check the Event Viewer → Windows Logs → System for bugcheck codes. Common causes include faulty RAM, driver conflicts, or overheating.</p>
<pre><code>Event Viewer → Windows Logs → System</code></pre>
<h2>Remote Support Tips</h2>
<p>Use Windows Remote Desktop or TeamViewer for remote troubleshooting. Always ask the user to describe what they were doing when the issue started — it often points directly to the cause.</p>`,
            tags: ["Windows", "IT Support", "Troubleshooting", "Help Desk"]
        }
    ];

    // ─── DOM refs ──────────────────────────────────────────────────
    var listingEl   = document.getElementById('blog-listing');
    var emptyEl     = document.getElementById('blog-empty');
    var detailEl    = document.getElementById('blog-detail');
    var searchInput = document.getElementById('blog-search');
    var filtersEl   = document.getElementById('blog-filters');

    var activeCategory = 'all';
    var searchQuery    = '';

    // ─── Render a single card ──────────────────────────────────────
    function renderCard(post) {
        return '<a href="/blog/' + post.slug + '" class="blog-card group text-left rounded-2xl overflow-hidden flex flex-col border border-line/40 bg-card hover:border-accent/40 hover:-translate-y-1 transition-all duration-300">' +
            '<div class="relative aspect-video overflow-hidden bg-card">' +
                (post.youtubeId
                    ? '<img src="https://img.youtube.com/vi/' + post.youtubeId + '/mqdefault.jpg" alt="' + post.title + '" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy"><div class="absolute inset-0 bg-black/15"></div><div class="absolute inset-0 flex items-center justify-center pointer-events-none"><span class="w-14 h-14 flex items-center justify-center rounded-full bg-black/55 text-white text-lg backdrop-blur-sm transition-transform duration-300 group-hover:scale-110"><i class="fas fa-play ml-0.5"></i></span></div>'
                    : '<div class="w-full h-full flex items-center justify-center text-accent text-4xl"><i class="fas fa-code"></i></div>'
                ) +
            '</div>' +
            '<div class="p-5 flex flex-col flex-1">' +
                '<div class="flex items-center gap-2 mb-2">' +
                    '<span class="inline-flex px-2 py-0.5 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider">' + post.category + '</span>' +
                    '<span class="text-muted text-xs">' + post.date + '</span>' +
                '</div>' +
                '<h3 class="text-base font-semibold text-heading leading-snug mb-2 line-clamp-2">' + post.title + '</h3>' +
                '<p class="text-muted text-sm leading-relaxed line-clamp-3 flex-1">' + post.excerpt + '</p>' +
                '<span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-accent group-hover:gap-3 transition-all duration-300">' +
                    'Read More <i class="fas fa-arrow-right text-xs"></i>' +
                '</span>' +
            '</div>' +
        '</a>';
    }

    // ─── Render the listing ────────────────────────────────────────
    function renderListing() {
        var filtered = posts.filter(function (p) {
            var matchCategory = activeCategory === 'all' || p.category === activeCategory;
            var matchSearch   = !searchQuery ||
                p.title.toLowerCase().indexOf(searchQuery) !== -1 ||
                p.excerpt.toLowerCase().indexOf(searchQuery) !== -1 ||
                p.category.toLowerCase().indexOf(searchQuery) !== -1 ||
                (p.tags && p.tags.join(' ').toLowerCase().indexOf(searchQuery) !== -1);
            return matchCategory && matchSearch;
        });

        if (filtered.length === 0) {
            listingEl.innerHTML = '';
            emptyEl.classList.remove('hidden');
        } else {
            emptyEl.classList.add('hidden');
            listingEl.innerHTML = filtered.map(renderCard).join('');
        }
    }

    // ─── Show detail view ──────────────────────────────────────────
    function showDetail(postId) {
        var post = posts.find(function (p) { return p.id === postId; });
        if (!post) return;

        document.getElementById('detail-category').textContent = post.category;
        document.getElementById('detail-title').textContent = post.title;
        document.getElementById('detail-date').textContent = post.date;
        document.getElementById('detail-reading-time').textContent = post.readingTime;
        document.getElementById('detail-excerpt').textContent = post.excerpt;
        document.getElementById('detail-body').innerHTML = post.body;

        var videoSection = document.getElementById('detail-video');
        var videoBadge   = document.getElementById('detail-video-badge');
        var videoIframe  = document.getElementById('detail-video-iframe');

        if (post.youtubeId) {
            videoIframe.src = 'https://www.youtube-nocookie.com/embed/' + post.youtubeId;
            videoIframe.title = post.title;
            videoSection.classList.remove('hidden');
            videoBadge.classList.remove('hidden');
        } else {
            videoIframe.src = '';
            videoSection.classList.add('hidden');
            videoBadge.classList.add('hidden');
        }

        var tagsEl = document.getElementById('detail-tags');
        if (post.tags && post.tags.length) {
            tagsEl.innerHTML = post.tags.map(function (t) {
                return '<span class="px-3 py-1 rounded-full bg-card border border-line text-body text-sm">' + t + '</span>';
            }).join('');
            tagsEl.classList.remove('hidden');
        } else {
            tagsEl.innerHTML = '';
            tagsEl.classList.add('hidden');
        }

        var viewArticleEl = document.getElementById('detail-view-article');
        var viewArticleLink = document.getElementById('detail-article-link');
        viewArticleLink.href = '/blog/' + post.slug;
        viewArticleEl.classList.remove('hidden');

        listingEl.classList.add('hidden');
        emptyEl.classList.add('hidden');
        detailEl.classList.remove('hidden');
        filtersEl.classList.add('hidden');
        searchInput.parentElement.classList.add('hidden');
        window.scrollTo({ top: 0, behavior: 'smooth' });
        history.pushState({ view: 'detail', postId: postId }, '', '/blog?post=' + post.slug);
    }

    // ─── Back to listing ───────────────────────────────────────────
    function showListing() {
        detailEl.classList.add('hidden');
        listingEl.classList.remove('hidden');
        filtersEl.classList.remove('hidden');
        searchInput.parentElement.classList.remove('hidden');
        videoIframeReset();
        history.pushState({ view: 'listing' }, '', '/blog');
    }

    function videoIframeReset() {
        var iframe = document.getElementById('detail-video-iframe');
        if (iframe) iframe.src = '';
    }

    // ─── Event: card click ─────────────────────────────────────────
    listingEl.addEventListener('click', function (e) {
        var card = e.target.closest('.blog-card');
        if (card) {
            // Allow navigation to the article page - no preventDefault
            // The link href="/blog/' + post.slug + '" will handle navigation
        }
    });

    // ─── Event: back button ────────────────────────────────────────
    document.getElementById('blog-back').addEventListener('click', showListing);
    document.addEventListener('click', function (e) {
        if (e.target.closest('.blog-back-bottom')) showListing();
    });

    // ─── Event: browser back/forward ───────────────────────────────
    window.addEventListener('popstate', function (e) {
        if (e.state && e.state.view === 'detail') {
            showDetail(e.state.postId);
        } else {
            detailEl.classList.add('hidden');
            listingEl.classList.remove('hidden');
            filtersEl.classList.remove('hidden');
            searchInput.parentElement.classList.remove('hidden');
            videoIframeReset();
        }
    });

    // ─── Event: search ─────────────────────────────────────────────
    searchInput.addEventListener('input', function () {
        searchQuery = this.value.trim().toLowerCase();
        renderListing();
    });

    // ─── Event: category filters ───────────────────────────────────
    filtersEl.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-filter]');
        if (!btn) return;

        filtersEl.querySelectorAll('.filter-pill').forEach(function (pill) {
            pill.classList.remove('active');
        });
        btn.classList.add('active');
        activeCategory = btn.dataset.filter;
        renderListing();
    });

    // ─── Handle direct URL access or default to listing ────────────
    (function () {
        var params = new URLSearchParams(window.location.search);
        var postSlug = params.get('post');
        if (postSlug) {
            var match = posts.find(function (p) { return p.slug === postSlug; });
            if (match) {
                showDetail(match.id);
                return;
            }
        }
        renderListing();
    })();

})();
</script>

@endsection
