<?php

namespace App\Helpers;

class StaticPosts
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Setting Up Proxmox VE on a Dedicated Server: A Step-by-Step Guide',
                'slug' => 'setup-proxmox-ve',
                'category' => 'Proxmox',
                'date' => 'August 2026',
                'readingTime' => 8,
                'youtubeId' => 'Iz76KqzloJY',
                'excerpt' => 'A complete walkthrough for installing and configuring Proxmox VE on a bare-metal dedicated server, including initial network setup, storage configuration, and your first virtual machine.',
                'tags' => ['Proxmox VE', 'Virtualization', 'Linux', 'Server Setup'],
                'body' => '<h2>Why Proxmox VE?</h2>
<p>Proxmox VE is a powerful open-source server virtualization platform that combines KVM virtualization and LXC containers into a single management interface. It\'s an excellent choice for homelabs and production environments alike.</p>
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
<p>After installation, access the web interface at <code>https://your-ip:8006</code>. Navigate to <strong>System &rarr; Network</strong> to configure your bridge interfaces for VM networking.</p>
<h2>Step 4: Storage Configuration</h2>
<p>Proxmox supports local storage, ZFS, NFS, CIFS, and more. For production use, ZFS on mirrored SSDs provides excellent data integrity and performance.</p>
<h2>Step 5: Your First VM</h2>
<p>Navigate to your node &rarr; Create VM, select an ISO image, allocate resources, and boot. The entire process from bare metal to running VM takes about 30 minutes.</p>',
            ],
            [
                'id' => 2,
                'title' => 'Configuring Nginx as a Reverse Proxy for Multiple Web Applications',
                'slug' => 'nginx-reverse-proxy',
                'category' => 'Networking',
                'date' => 'August 2026',
                'readingTime' => 10,
                'youtubeId' => 'jY2HvesANJE',
                'excerpt' => 'Learn how to configure Nginx as a reverse proxy to route traffic to multiple web applications on a single server, with SSL termination and security best practices.',
                'tags' => ['Nginx', 'Reverse Proxy', 'SSL', 'Web Server'],
                'body' => '<h2>What is a Reverse Proxy?</h2>
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
<p>Install Certbot and obtain a free Let\'s Encrypt certificate:</p>
<pre><code>sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d app.example.com</code></pre>
<h2>Routing Multiple Applications</h2>
<p>Each <code>server</code> block can point to a different backend port. For path-based routing, use multiple <code>location</code> blocks within a single server.</p>
<h2>Security Headers</h2>
<p>Add security headers to protect against common web vulnerabilities:</p>
<pre><code>add_header X-Frame-Options "SAMEORIGIN" always;
add_header X-Content-Type-Options "nosniff" always;
add_header X-XSS-Protection "1; mode=block" always;</code></pre>',
            ],
            [
                'id' => 3,
                'title' => 'Managing LXC Containers in Proxmox: Creation, Snapshots, and Backups',
                'slug' => 'proxmox-lxc-containers',
                'category' => 'Proxmox',
                'date' => 'July 2026',
                'readingTime' => 7,
                'youtubeId' => 'iIfRchzYSzM',
                'excerpt' => 'A practical guide to creating and managing LXC containers in Proxmox VE, including snapshots, backups, and resource allocation best practices.',
                'tags' => ['LXC', 'Proxmox', 'Containers', 'Backups'],
                'body' => '<h2>LXC Containers vs Virtual Machines</h2>
<p>LXC containers share the host kernel, making them extremely lightweight compared to full virtual machines. They start in seconds and consume minimal resources &mdash; ideal for running services like Nginx, databases, or monitoring tools.</p>
<h2>Creating an LXC Container</h2>
<p>In the Proxmox web UI, navigate to your node &rarr; Create CT. Select a template (Ubuntu, Debian, etc.), set a password, configure networking, and define storage. The container is ready in under a minute.</p>
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
<p>Configure automated backups via the Proxmox Datacenter &rarr; Backup menu. Use <code>vzdump</code> to create scheduled backups to local storage or NFS mounts.</p>
<pre><code>vzdump 100 --storage local --compress zstd</code></pre>',
            ],
            [
                'id' => 4,
                'title' => 'Docker Compose: Orchestrating Multi-Container Applications',
                'slug' => 'docker-compose-orchestration',
                'category' => 'Docker',
                'date' => 'July 2026',
                'readingTime' => 9,
                'youtubeId' => 'tW50igaFZTQ',
                'excerpt' => 'Master Docker Compose to define, manage, and run multi-container applications with a single YAML file. Perfect for development environments and production deployments.',
                'tags' => ['Docker', 'Docker Compose', 'Containers', 'DevOps'],
                'body' => '<h2>What is Docker Compose?</h2>
<p>Docker Compose is a tool for defining and running multi-container Docker applications. With a single YAML file, you can configure all your services, networks, and volumes.</p>
<h2>Basic docker-compose.yml</h2>
<pre><code>version: \'3.8\'
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
<p>Compose automatically creates a default network for your services. Containers can reach each other by service name &mdash; no manual IP configuration needed.</p>
<h2>Persistence with Volumes</h2>
<p>Named volumes persist data across container restarts. Bind mounts are useful for development where you want live code changes reflected inside the container.</p>',
            ],
            [
                'id' => 5,
                'title' => 'Linux Disk Partitioning and Mount Points: A Practical Guide',
                'slug' => 'linux-disk-partitioning',
                'category' => 'Linux',
                'date' => 'June 2026',
                'readingTime' => 6,
                'youtubeId' => 'GoZaMgEgrHw',
                'excerpt' => 'Learn how to partition disks, create filesystems, and configure mount points in Linux using fdisk, parted, and /etc/fstab for persistent storage.',
                'tags' => ['Linux', 'Disk Management', 'fstab', 'System Admin'],
                'body' => '<h2>When Do You Need This?</h2>
<p>Adding a new disk to a server, expanding storage, or setting up a dedicated data partition all require disk partitioning and mount point configuration.</p>
<h2>Identifying Disks</h2>
<pre><code>lsblk
sudo fdisk -l</code></pre>
<h2>Partitioning with fdisk</h2>
<pre><code>sudo fdisk /dev/sdb
# n &mdash; new partition
# p &mdash; primary
# 1 &mdash; partition number
# Accept defaults for size
# w &mdash; write changes</code></pre>
<h2>Creating a Filesystem</h2>
<pre><code>sudo mkfs.ext4 /dev/sdb1</code></pre>
<h2>Setting Up the Mount Point</h2>
<pre><code>sudo mkdir -p /mnt/data
sudo mount /dev/sdb1 /mnt/data</code></pre>
<h2>Making It Persistent with fstab</h2>
<p>Add an entry to <code>/etc/fstab</code> so the partition mounts automatically on boot:</p>
<pre><code>/dev/sdb1  /mnt/data  ext4  defaults  0  2</code></pre>
<p>Use <code>sudo mount -a</code> to test the fstab entry without rebooting.</p>',
            ],
            [
                'id' => 6,
                'title' => 'Setting Up a VPN Tunnel with WireGuard on Linux',
                'slug' => 'wireguard-vpn-setup',
                'category' => 'Networking',
                'date' => 'June 2026',
                'readingTime' => 7,
                'youtubeId' => 'Ti8MYTKM1O8',
                'excerpt' => 'Configure a secure WireGuard VPN tunnel on a Linux server for encrypted remote access to your home or office network.',
                'tags' => ['WireGuard', 'VPN', 'Linux', 'Networking'],
                'body' => '<h2>Why WireGuard?</h2>
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
sudo systemctl enable wg-quick@wg0</code></pre>',
            ],
            [
                'id' => 7,
                'title' => 'Proxmox Backup Server: Automated VM and Container Backups',
                'slug' => 'proxmox-backup-server',
                'category' => 'Proxmox',
                'date' => 'May 2026',
                'readingTime' => 8,
                'youtubeId' => 'O7PYK1Nv8Bs',
                'excerpt' => 'Set up Proxmox Backup Server for reliable, deduplicated backups of your virtual machines and containers with automated scheduling and retention policies.',
                'tags' => ['Proxmox', 'Backup', 'PBS', 'Disaster Recovery'],
                'body' => '<h2>Why Dedicated Backup?</h2>
<p>While Proxmox VE includes local backup functionality, Proxmox Backup Server (PBS) provides deduplication, encryption, and incremental backups &mdash; dramatically reducing storage requirements.</p>
<h2>Installation</h2>
<p>Install PBS on a separate machine or as an LXC container within your Proxmox cluster. The web interface runs on port 8007.</p>
<h2>Adding a Storage Repository</h2>
<p>Navigate to Administration &rarr; Storage / Disks to add a local disk, then create a Datastore on it.</p>
<h2>Configuring Backups in Proxmox VE</h2>
<p>In Proxmox VE, go to Datacenter &rarr; Backup &rarr; Add. Select your PBS instance, choose a schedule (e.g., daily at 2 AM), set retention to keep 7 daily, 4 weekly, and 3 monthly backups.</p>
<h2>Verification</h2>
<p>Always verify backups periodically. PBS provides a prune-and-verify job that checks data integrity automatically.</p>
<pre><code>proxmox-backup-client verify datastore1</code></pre>
<h2>Restore</h2>
<p>Restoring a VM or container from PBS is straightforward &mdash; select the backup, choose the target storage, and click Restore.</p>',
            ],
            [
                'id' => 8,
                'title' => 'Ubuntu Server Hardening: Essential Security Checklist',
                'slug' => 'ubuntu-server-hardening',
                'category' => 'Infrastructure',
                'date' => 'May 2026',
                'readingTime' => 9,
                'youtubeId' => '2JlouLHdzOc',
                'excerpt' => 'A comprehensive security checklist for Ubuntu servers covering SSH hardening, firewall rules, automatic updates, user management, and intrusion detection.',
                'tags' => ['Ubuntu', 'Security', 'Hardening', 'UFW', 'SSH'],
                'body' => '<h2>Why Harden Your Server?</h2>
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
<p>Lynis provides a security score and actionable recommendations for your specific configuration.</p>',
            ],
            [
                'id' => 9,
                'title' => 'Deploying a Monitoring Stack with Prometheus and Grafana',
                'slug' => 'prometheus-grafana-monitoring',
                'category' => 'Infrastructure',
                'date' => 'April 2026',
                'readingTime' => 10,
                'youtubeId' => 'n-Aylc5OLNk',
                'excerpt' => 'Build a complete monitoring solution with Prometheus for metrics collection and Grafana for visualization to keep track of your servers and services.',
                'tags' => ['Prometheus', 'Grafana', 'Monitoring', 'Docker'],
                'body' => '<h2>Why Monitor?</h2>
<p>You can\'t fix what you can\'t see. A monitoring stack gives you real-time visibility into server health, application performance, and potential issues before they become outages.</p>
<h2>Docker Compose Setup</h2>
<pre><code>version: \'3.8\'
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
  - job_name: \'node\'
    static_configs:
      - targets: [\'node-exporter:9100\']</code></pre>
<h2>Node Exporter</h2>
<p>Install Node Exporter on each server you want to monitor. It exposes system metrics (CPU, memory, disk, network) on port 9100.</p>
<h2>Grafana Dashboards</h2>
<p>Import pre-built dashboards from grafana.com &mdash; dashboard ID 1860 (Node Exporter Full) is a great starting point for server monitoring.</p>
<h2>Alerting</h2>
<p>Configure Alertmanager to send notifications via email, Slack, or Telegram when metrics exceed defined thresholds.</p>',
            ],
            [
                'id' => 10,
                'title' => 'Troubleshooting Common Windows Workstation Issues: A Support Guide',
                'slug' => 'windows-troubleshooting-guide',
                'category' => 'IT Support',
                'date' => 'April 2026',
                'readingTime' => 7,
                'youtubeId' => 'TA0gZs0X_7o',
                'excerpt' => 'Practical troubleshooting steps for the most common Windows workstation problems: network issues, slow performance, printer errors, and system crashes.',
                'tags' => ['Windows', 'IT Support', 'Troubleshooting', 'Help Desk'],
                'body' => '<h2>Network Connectivity Issues</h2>
<p>When a user reports "no internet," start with the basics:</p>
<pre><code>ipconfig /release
ipconfig /renew
ipconfig /flushdns
netsh winsock reset</code></pre>
<p>If these don\'t resolve it, check the physical connection, switch ports, and DNS settings.</p>
<h2>Slow Performance</h2>
<ul>
<li>Check Task Manager for high CPU or memory usage</li>
<li>Run <code>sfc /scannow</code> to check for corrupted system files</li>
<li>Run <code>DISM /Online /Cleanup-Image /RestoreHealth</code></li>
<li>Check disk space &mdash; low space causes significant slowdowns</li>
<li>Review startup programs via Task Manager &rarr; Startup tab</li>
</ul>
<h2>Printer Issues</h2>
<p>Most printer problems are connectivity-related:</p>
<ul>
<li>Verify the printer is on the same network</li>
<li>Clear the print queue and restart the Print Spooler service</li>
<li>Reinstall the printer driver if needed</li>
</ul>
<h2>Blue Screen (BSOD)</h2>
<p>Check the Event Viewer &rarr; Windows Logs &rarr; System for bugcheck codes. Common causes include faulty RAM, driver conflicts, or overheating.</p>
<pre><code>Event Viewer &rarr; Windows Logs &rarr; System</code></pre>
<h2>Remote Support Tips</h2>
<p>Use Windows Remote Desktop or TeamViewer for remote troubleshooting. Always ask the user to describe what they were doing when the issue started &mdash; it often points directly to the cause.</p>',
            ],
        ];
    }

    public static function findBySlug(string $slug): ?array
    {
        foreach (static::all() as $post) {
            if ($post['slug'] === $slug) {
                return $post;
            }
        }

        return null;
    }
}
