<?php // <<<<< WEB ROUTES >>>>> purpose: define every HTTP route of the portfolio app

use App\Http\Controllers\ContactController; // <<<<< IMPORT >>>>> purpose: controller used by the contact form submission
use App\Http\Controllers\PostController; // <<<<< IMPORT >>>>> purpose: controller used by the blog detail route
use App\Models\Post; // <<<<< IMPORT >>>>> purpose: query published posts for the home page
use Illuminate\Support\Facades\Route; // <<<<< IMPORT >>>>> purpose: Laravel's route registration facade

Route::get('/', function () { // <<<<< HOME ROUTE >>>>> purpose: the main portfolio landing page at "/"
    return view('home', [ // <<<<< RENDER HOME >>>>> purpose: render the single-page portfolio
        'posts' => Post::published() // <<<<< PUBLISHED ONLY >>>>> purpose: only show posts whose date is in the past
            ->with('category') // <<<<< EAGER LOAD >>>>> purpose: load category in one query so cards can show it
            ->latest('published_at') // <<<<< NEWEST FIRST >>>>> purpose: sort posts by publish date, newest on top
            ->get(), // <<<<< EXECUTE QUERY >>>>> purpose: fetch the posts collection
    ]);
})->name('home'); // <<<<< ROUTE NAME >>>>> purpose: allows linking with route('home')

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send'); // <<<<< CONTACT FORM >>>>> purpose: posts the contact form and emails the owner

/*
|--------------------------------------------------------------------------
| STATIC BLOG ROUTES
|--------------------------------------------------------------------------
| These routes serve static blog posts defined inline below. The /blog/{slug}
| route must come BEFORE the Post model route to ensure static posts are matched
| first.
|--------------------------------------------------------------------------
*/

// Static blog posts data - defined inline for the /blog/{slug} route
$staticPosts = [
    1 => [
        'id' => 1,
        'title' => 'Setting Up Proxmox VE on a Dedicated Server: A Step-by-Step Guide',
        'slug' => 'setup-proxmox-ve',
        'category' => 'Proxmox',
        'date' => 'August 2026',
        'readingTime' => 8,
        'youtubeId' => 'Iz76KqzloJY',
        'excerpt' => 'A complete walkthrough for installing and configuring Proxmox VE on a bare-metal dedicated server, including initial network setup, storage configuration, and your first virtual machine.',
        'tags' => ['Proxmox VE', 'Virtualization', 'Linux', 'Server Setup'],
    ],
    2 => [
        'id' => 2,
        'title' => 'Configuring Nginx as a Reverse Proxy for Multiple Web Applications',
        'slug' => 'nginx-reverse-proxy',
        'category' => 'Networking',
        'date' => 'August 2026',
        'readingTime' => 10,
        'youtubeId' => 'jY2HvesANJE',
        'excerpt' => 'Learn how to configure Nginx as a reverse proxy to route traffic to multiple web applications on a single server, with SSL termination and security best practices.',
        'tags' => ['Nginx', 'Reverse Proxy', 'SSL', 'Web Server'],
    ],
    3 => [
        'id' => 3,
        'title' => 'Managing LXC Containers in Proxmox: Creation, Snapshots, and Backups',
        'slug' => 'proxmox-lxc-containers',
        'category' => 'Proxmox',
        'date' => 'July 2026',
        'readingTime' => 7,
        'youtubeId' => 'iIfRchzYSzM',
        'excerpt' => 'A practical guide to creating and managing LXC containers in Proxmox VE, including snapshots, backups, and resource allocation best practices.',
        'tags' => ['LXC', 'Proxmox', 'Containers', 'Backups'],
    ],
    4 => [
        'id' => 4,
        'title' => 'Docker Compose: Orchestrating Multi-Container Applications',
        'slug' => 'docker-compose-orchestration',
        'category' => 'Docker',
        'date' => 'July 2026',
        'readingTime' => 9,
        'youtubeId' => 'tW50igaFZTQ',
        'excerpt' => 'Master Docker Compose to define, manage, and run multi-container applications with a single YAML file. Perfect for development environments and production deployments.',
        'tags' => ['Docker', 'Docker Compose', 'Containers', 'DevOps'],
    ],
    5 => [
        'id' => 5,
        'title' => 'Linux Disk Partitioning and Mount Points: A Practical Guide',
        'slug' => 'linux-disk-partitioning',
        'category' => 'Linux',
        'date' => 'June 2026',
        'readingTime' => 6,
        'youtubeId' => 'GoZaMgEgrHw',
        'excerpt' => 'Learn how to partition disks, create filesystems, and configure mount points in Linux using fdisk, parted, and /etc/fstab for persistent storage.',
        'tags' => ['Linux', 'Disk Management', 'fstab', 'System Admin'],
    ],
    6 => [
        'id' => 6,
        'title' => 'Setting Up a VPN Tunnel with WireGuard on Linux',
        'slug' => 'wireguard-vpn-setup',
        'category' => 'Networking',
        'date' => 'June 2026',
        'readingTime' => 7,
        'youtubeId' => 'Ti8MYTKM1O8',
        'excerpt' => 'Configure a secure WireGuard VPN tunnel on a Linux server for encrypted remote access to your home or office network.',
        'tags' => ['WireGuard', 'VPN', 'Linux', 'Networking'],
    ],
    7 => [
        'id' => 7,
        'title' => 'Proxmox Backup Server: Automated VM and Container Backups',
        'slug' => 'proxmox-backup-server',
        'category' => 'Proxmox',
        'date' => 'May 2026',
        'readingTime' => 8,
        'youtubeId' => 'O7PYK1Nv8Bs',
        'excerpt' => 'Set up Proxmox Backup Server for reliable, deduplicated backups of your virtual machines and containers with automated scheduling and retention policies.',
        'tags' => ['Proxmox', 'Backup', 'PBS', 'Disaster Recovery'],
    ],
    8 => [
        'id' => 8,
        'title' => 'Ubuntu Server Hardening: Essential Security Checklist',
        'slug' => 'ubuntu-server-hardening',
        'category' => 'Infrastructure',
        'date' => 'May 2026',
        'readingTime' => 9,
        'youtubeId' => '2JlouLHdzOc',
        'excerpt' => 'A comprehensive security checklist for Ubuntu servers covering SSH hardening, firewall rules, automatic updates, user management, and intrusion detection.',
        'tags' => ['Ubuntu', 'Security', 'Hardening', 'UFW', 'SSH'],
    ],
    9 => [
        'id' => 9,
        'title' => 'Deploying a Monitoring Stack with Prometheus and Grafana',
        'slug' => 'prometheus-grafana-monitoring',
        'category' => 'Infrastructure',
        'date' => 'April 2026',
        'readingTime' => 10,
        'youtubeId' => 'n-Aylc5OLNk',
        'excerpt' => 'Build a complete monitoring solution with Prometheus for metrics collection and Grafana for visualization to keep track of your servers and services.',
        'tags' => ['Prometheus', 'Grafana', 'Monitoring', 'Docker'],
    ],
    10 => [
        'id' => 10,
        'title' => 'Troubleshooting Common Windows Workstation Issues: A Support Guide',
        'slug' => 'windows-troubleshooting-guide',
        'category' => 'IT Support',
        'date' => 'April 2026',
        'readingTime' => 7,
        'youtubeId' => 'TA0gZs0X_7o',
        'excerpt' => 'Practical troubleshooting steps for the most common Windows workstation problems: network issues, slow performance, printer errors, and system crashes.',
        'tags' => ['Windows', 'IT Support', 'Troubleshooting', 'Help Desk'],
    ],
];

// Static blog article route - must come BEFORE the Post model route
Route::get('/blog/{slug}', function ($slug) use ($staticPosts) {
    $post = collect($staticPosts)->firstWhere('slug', $slug);
    abort_unless($post, 404);
    return view('blog.article', ['post' => $post]);
})->name('blog.article');

// Blog index route
Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

// Blog detail route using DB model (for any existing database posts)
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('blog.show');