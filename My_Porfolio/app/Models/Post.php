<?php // <<<<< POST MODEL >>>>> purpose: data class for blog posts (no database connection)

namespace App;

// <<<<< NO NAMESPACE OVERRIDE >>>>> purpose: uses App namespace naturally

/**
 * Post data class.
 * 
 * This class replaces App\Models\Post (Eloquent) with a plain PHP class.
 * No database connection is required. All blog post data is provided
 * statically via the $staticPosts array in routes/web.php.
 */
class Post
{
    public $id;
    public $title;
    public $slug;
    public $category;
    public $date;
    public $readingTime;
    public $youtubeId;
    public $excerpt;
    public $tags;

    public function __construct($data = [])
    {
        $this->id = $data['id'] ?? 1;
        $this->title = $data['title'] ?? '';
        $this->slug = $data['slug'] ?? '';
        $this->category = $data['category'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->readingTime = $data['readingTime'] ?? 0;
        $this->youtubeId = $data['youtubeId'] ?? '';
        $this->excerpt = $data['excerpt'] ?? '';
        $this->tags = $data['tags'] ?? [];
    }
}