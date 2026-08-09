<?php // <<<<< POST MODEL >>>>> purpose: the Eloquent model for blog posts, including YouTube helpers used by the views

namespace App\Models; // <<<<< NAMESPACE >>>>> purpose: places the class in App\Models for autoloading

use Illuminate\Database\Eloquent\Builder; // <<<<< IMPORT >>>>> purpose: type hint for the published() query scope
use Illuminate\Database\Eloquent\Model; // <<<<< IMPORT >>>>> purpose: base Eloquent model class
use Illuminate\Database\Eloquent\Relations\BelongsTo; // <<<<< IMPORT >>>>> purpose: return type for the category relation

class Post extends Model // <<<<< POST MODEL >>>>> purpose: maps to the "posts" database table
{
    protected $fillable = [ // <<<<< FILLABLE >>>>> purpose: columns allowed for mass assignment
        'category_id', // <<<<< CATEGORY_ID >>>>> purpose: foreign key pointing to the post's category
        'title', // <<<<< TITLE >>>>> purpose: post headline shown on cards and the article page
        'slug', // <<<<< SLUG >>>>> purpose: unique url-friendly identifier, e.g. "technical-tutorial"
        'excerpt', // <<<<< EXCERPT >>>>> purpose: short summary shown on the blog card
        'body', // <<<<< BODY >>>>> purpose: the full article HTML content
        'cover_image', // <<<<< COVER_IMAGE >>>>> purpose: path to a local cover image (optional)
        'youtube_url', // <<<<< YOUTUBE_URL >>>>> purpose: any common YouTube URL; the ID is extracted by an accessor
        'external_url', // <<<<< EXTERNAL_URL >>>>> purpose: link to a related external resource
        'tags', // <<<<< TAGS >>>>> purpose: array of short tags displayed on the article page
        'images', // <<<<< IMAGES >>>>> purpose: array of screenshot paths shown as a gallery
        'reading_time', // <<<<< READING_TIME >>>>> purpose: estimated minutes to read (optional)
        'featured', // <<<<< FEATURED >>>>> purpose: reserved flag for future highlighting
        'published_at', // <<<<< PUBLISHED_AT >>>>> purpose: publish date; only past dates are shown publicly
    ];

    protected $casts = [ // <<<<< CASTS >>>>> purpose: convert stored values into PHP types
        'tags' => 'array', // <<<<< TAGS >>>>> purpose: decode JSON column into a PHP array
        'images' => 'array', // <<<<< IMAGES >>>>> purpose: decode JSON column into a PHP array
        'featured' => 'boolean', // <<<<< FEATURED >>>>> purpose: treat as true/false
        'published_at' => 'datetime', // <<<<< PUBLISHED_AT >>>>> purpose: treat as a Carbon date object
    ];

    public function category(): BelongsTo // <<<<< CATEGORY RELATION >>>>> purpose: each post belongs to one category
    {
        return $this->belongsTo(Category::class); // <<<<< BELONGS TO >>>>> purpose: loads the category matching category_id
    }

    public function scopePublished(Builder $query): Builder // <<<<< PUBLISHED SCOPE >>>>> purpose: filter query to only visible posts
    {
        // <<<<< VISIBILITY RULE >>>>> purpose: post must have a publish date and that date must be in the past
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function getYouTubeIdAttribute(): ?string // <<<<< YOUTUBE_ID ACCESSOR >>>>> purpose: extract the video ID from the URL
    {
        if (empty($this->youtube_url)) { // <<<<< EMPTY CHECK >>>>> purpose: no URL means no video
            return null;
        }

        // <<<<< REGEX >>>>> purpose: match the ID from watch?, embed/, shorts/, live/, or youtu.be links
        if (preg_match('~(?:youtube\.com/(?:watch\?v=|embed/|shorts/|live/)|youtu\.be/)([A-Za-z0-9_-]{6,15})~', $this->youtube_url, $matches)) {
            return $matches[1]; // <<<<< MATCH >>>>> purpose: return the captured video ID
        }

        return null; // <<<<< NO MATCH >>>>> purpose: unrecognized URL format
    }

    public function getYouTubeThumbnailAttribute(): ?string // <<<<< THUMBNAIL ACCESSOR >>>>> purpose: URL/path of the video thumbnail image
    {
        if (!$this->youtube_id) { // <<<<< EMPTY CHECK >>>>> purpose: no video ID, no thumbnail
            return null;
        }

        $local = "images/blog/{$this->youtube_id}.jpg"; // <<<<< LOCAL PATH >>>>> purpose: prefer a thumbnail stored in this app

        return file_exists(public_path($local)) // <<<<< LOCAL FILE EXISTS >>>>> purpose: if we downloaded it, serve it from the app
            ? $local // <<<<< LOCAL >>>>> purpose: guaranteed-to-load local image
            : "https://i.ytimg.com/vi/{$this->youtube_id}/hqdefault.jpg"; // <<<<< REMOTE FALLBACK >>>>> purpose: otherwise fetch from YouTube
    }

    public function getCoverAttribute(): ?string // <<<<< COVER ACCESSOR >>>>> purpose: fallback cover for the article page
    {
        // <<<<< COVER RULE >>>>> purpose: use the explicit cover image, otherwise fall back to the video thumbnail
        return $this->cover_image ?: $this->youtube_thumbnail;
    }

    public function getPublishedLabelAttribute(): ?string // <<<<< PUBLISHED LABEL >>>>> purpose: short date label like "Aug 2026"
    {
        return $this->published_at?->format('M Y'); // <<<<< FORMAT >>>>> purpose: month + year for compact display
    }

    public function getTagsListAttribute(): array // <<<<< TAGS LIST ACCESSOR >>>>> purpose: safe access to the tags array
    {
        return $this->tags ?? []; // <<<<< SAFE ARRAY >>>>> purpose: return empty array if tags are null
    }
}
