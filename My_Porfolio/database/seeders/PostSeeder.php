<?php // <<<<< POST SEEDER >>>>> purpose: inserts or updates example blog posts and their categories

namespace Database\Seeders; // <<<<< NAMESPACE >>>>> purpose: places the seeder under Database\Seeders

use App\Models\Category; // <<<<< IMPORT >>>>> purpose: Category model for creating categories on the fly
use App\Models\Post; // <<<<< IMPORT >>>>> purpose: Post model for inserting/updating posts
use Illuminate\Database\Seeder; // <<<<< IMPORT >>>>> purpose: base seeder class
use Illuminate\Support\Str; // <<<<< IMPORT >>>>> purpose: Str::slug() to build category slugs

/**
 * Technical Blog post seeder.
 *
 * Each post in the $posts list below is an EXAMPLE. Replace the titles,
 * descriptions, dates, and URLs with your real content, then re-run:
 *
 *   php artisan db:seed --class=PostSeeder
 *
 * (Existing posts are updated by slug, new ones are inserted.)
 *
 * Fields:
 *   category        string (name) — created automatically if it does not exist
 *   title           string
 *   slug            string (unique, url-friendly: "ubiquiti-access-point-setup")
 *   excerpt         string — short intro shown on the blog card
 *   body            string — full article HTML (h2/h3/p/ul/pre/code/img are styled)
 *   cover_image     string — path under /public, e.g. "images/blog/foo.jpg"
 *   youtube_url     string|null — any common YouTube URL; the ID is extracted automatically
 *   external_url    string|null — related resource link shown on the detail page
 *   tags            array — short tags shown on the detail page
 *   images          array — screenshot paths shown as a gallery on the detail page
 *   reading_time    int|null — minutes
 *   featured        bool — not currently styled differently; reserved
 *   published_at    string — ISO date; only posts with a past date are shown
 */
class PostSeeder extends Seeder // <<<<< POST SEEDER >>>>> purpose: seeds the blog content
{
    public function run(): void // <<<<< RUN >>>>> purpose: called when php artisan db:seed --class=PostSeeder runs
    {
        $posts = [ // <<<<< POSTS ARRAY >>>>> purpose: list of example posts to insert/update

            // <<<<< POST 1 >>>>> purpose: example tutorial with a YouTube video
            [
                'category'     => 'Tutorial', // <<<<< CATEGORY >>>>> purpose: category name (auto-created)
                'title'        => 'Technical Tutorial', // <<<<< TITLE >>>>> purpose: post headline
                'slug'         => 'technical-tutorial', // <<<<< SLUG >>>>> purpose: url identifier (unique)
                'excerpt'      => 'Technical configuration and troubleshooting guide.', // <<<<< EXCERPT >>>>> purpose: card summary
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>', // <<<<< BODY >>>>> purpose: article HTML
                'youtube_url'  => 'https://www.youtube.com/watch?v=HUXUnMbeOyo', // <<<<< YOUTUBE >>>>> purpose: linked video
                'external_url' => null, // <<<<< EXTERNAL >>>>> purpose: no related link
                'tags'         => ['Tutorial', 'Configuration', 'Troubleshooting'], // <<<<< TAGS >>>>> purpose: shown on the article page
                'images'       => [], // <<<<< IMAGES >>>>> purpose: no screenshots yet
                'reading_time' => null, // <<<<< READING TIME >>>>> purpose: not set
                'featured'     => false, // <<<<< FEATURED >>>>> purpose: not highlighted
                'published_at' => '2026-08-05 10:00:00', // <<<<< PUBLISH DATE >>>>> purpose: when the post goes live
            ],

            // <<<<< POST 2 >>>>> purpose: example infrastructure post with a YouTube video
            [
                'category'     => 'Infrastructure',
                'title'        => 'Infrastructure Configuration',
                'slug'         => 'infrastructure-configuration',
                'excerpt'      => 'Configuration and setup walkthrough.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=spoZ2zKnK88',
                'external_url' => null,
                'tags'         => ['Infrastructure', 'Servers', 'Setup'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-08-06 10:00:00',
            ],

            // <<<<< POST 3 >>>>> purpose: example tutorial with a YouTube video
            [
                'category'     => 'Tutorial',
                'title'        => 'Technical Guide',
                'slug'         => 'technical-guide',
                'excerpt'      => 'Step-by-step technical demonstration.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=spoZ2zKnK88',
                'external_url' => null,
                'tags'         => ['Tutorial', 'Guide'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-08-07 10:00:00',
            ],

            // <<<<< POST 4 >>>>> purpose: example tutorial about networking
            [
                'category'     => 'Tutorial',
                'title'        => 'Network Configuration Guide',
                'slug'         => 'network-configuration-guide',
                'excerpt'      => 'Network configuration and setup walkthrough.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=HUXUnMbeOyo',
                'external_url' => null,
                'tags'         => ['Tutorial', 'Network', 'Configuration'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-08-04 10:00:00',
            ],

            // <<<<< POST 5 >>>>> purpose: example infrastructure setup walkthrough
            [
                'category'     => 'Infrastructure',
                'title'        => 'Server Setup Walkthrough',
                'slug'         => 'server-setup-walkthrough',
                'excerpt'      => 'Server provisioning and setup demonstration.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=spoZ2zKnK88',
                'external_url' => null,
                'tags'         => ['Infrastructure', 'Servers', 'Setup'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-08-03 10:00:00',
            ],

            // <<<<< POST 6 >>>>> purpose: example tutorial about routing
            [
                'category'     => 'Tutorial',
                'title'        => 'Routing Basics',
                'slug'         => 'routing-basics',
                'excerpt'      => 'Introduction to routing concepts and configuration.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=HUXUnMbeOyo',
                'external_url' => null,
                'tags'         => ['Tutorial', 'Routing', 'Network'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-08-02 10:00:00',
            ],

            // <<<<< POST 7 >>>>> purpose: example infrastructure post about firewalls
            [
                'category'     => 'Infrastructure',
                'title'        => 'Firewall Configuration',
                'slug'         => 'firewall-configuration',
                'excerpt'      => 'Firewall rules and security configuration guide.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=spoZ2zKnK88',
                'external_url' => null,
                'tags'         => ['Infrastructure', 'Firewall', 'Security'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-08-01 10:00:00',
            ],

            // <<<<< POST 8 >>>>> purpose: example tutorial about switching
            [
                'category'     => 'Tutorial',
                'title'        => 'Switching Fundamentals',
                'slug'         => 'switching-fundamentals',
                'excerpt'      => 'Layer 2 switching concepts and VLAN configuration.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=HUXUnMbeOyo',
                'external_url' => null,
                'tags'         => ['Tutorial', 'Switching', 'VLAN'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-07-31 10:00:00',
            ],

            // <<<<< POST 9 >>>>> purpose: example infrastructure post about monitoring
            [
                'category'     => 'Infrastructure',
                'title'        => 'Monitoring Setup',
                'slug'         => 'monitoring-setup',
                'excerpt'      => 'Infrastructure monitoring and alerting setup.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=spoZ2zKnK88',
                'external_url' => null,
                'tags'         => ['Infrastructure', 'Monitoring', 'Setup'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-07-30 10:00:00',
            ],

            // <<<<< POST 10 >>>>> purpose: example tutorial about DNS
            [
                'category'     => 'Tutorial',
                'title'        => 'DNS Configuration',
                'slug'         => 'dns-configuration',
                'excerpt'      => 'Domain Name System configuration walkthrough.',
                'body'         => '<p>Full technical documentation, configuration steps, and screenshots will be added here.</p>',
                'youtube_url'  => 'https://www.youtube.com/watch?v=HUXUnMbeOyo',
                'external_url' => null,
                'tags'         => ['Tutorial', 'DNS', 'Configuration'],
                'images'       => [],
                'reading_time' => null,
                'featured'     => false,
                'published_at' => '2026-07-29 10:00:00',
            ],
        ];

        foreach ($posts as $item) { // <<<<< LOOP >>>>> purpose: process every post definition above

            // <<<<< CATEGORY LOOKUP >>>>> purpose: find or create the category by its slug
            $category = isset($item['category'])
                ? Category::firstOrCreate( // <<<<< FIRST OR CREATE >>>>> purpose: reuse existing or make a new one
                    ['slug' => Str::slug($item['category'])], // <<<<< MATCH BY SLUG >>>>> purpose: slug is the unique key
                    ['name' => $item['category']], // <<<<< VALUES >>>>> purpose: name used when creating
                )
                : null; // <<<<< NO CATEGORY >>>>> purpose: posts without a category key get null

            Post::updateOrCreate( // <<<<< UPDATE OR CREATE >>>>> purpose: update existing post by slug, otherwise insert it
                ['slug' => $item['slug']], // <<<<< MATCH BY SLUG >>>>> purpose: the unique key used to find the post
                [ // <<<<< FIELDS >>>>> purpose: values written (or updated) on the post
                    'category_id'  => $category?->id, // <<<<< CATEGORY ID >>>>> purpose: link post to its category
                    'title'        => $item['title'], // <<<<< TITLE >>>>> purpose: headline
                    'excerpt'      => $item['excerpt'] ?? null, // <<<<< EXCERPT >>>>> purpose: card summary (nullable)
                    'body'         => $item['body'], // <<<<< BODY >>>>> purpose: article HTML
                    'cover_image'  => $item['cover_image'] ?? null, // <<<<< COVER >>>>> purpose: optional local cover image
                    'youtube_url'  => $item['youtube_url'] ?? null, // <<<<< YOUTUBE >>>>> purpose: optional video link
                    'external_url' => $item['external_url'] ?? null, // <<<<< EXTERNAL >>>>> purpose: optional related link
                    'tags'         => $item['tags'] ?? [], // <<<<< TAGS >>>>> purpose: stored as JSON array
                    'images'       => $item['images'] ?? [], // <<<<< IMAGES >>>>> purpose: stored as JSON array
                    'reading_time' => $item['reading_time'] ?? null, // <<<<< READING TIME >>>>> purpose: optional minutes
                    'featured'     => $item['featured'] ?? false, // <<<<< FEATURED >>>>> purpose: reserved flag
                    'published_at' => $item['published_at'] ?? now(), // <<<<< PUBLISHED AT >>>>> purpose: default to now if missing
                ],
            );
        }
    }
}
