<?php // <<<<< CATEGORY MODEL >>>>> purpose: the Eloquent model that represents a blog post category (e.g. "Tutorial", "Infrastructure")

namespace App\Models; // <<<<< NAMESPACE >>>>> purpose: puts this class in the App\Models namespace so Laravel can autoload it

use Illuminate\Database\Eloquent\Model; // <<<<< IMPORT >>>>> purpose: base Eloquent model class all models extend
use Illuminate\Database\Eloquent\Relations\HasMany; // <<<<< IMPORT >>>>> purpose: return type for the one-to-many relation below

class Category extends Model // <<<<< CATEGORY MODEL >>>>> purpose: maps to the "categories" database table
{
    protected $fillable = [ // <<<<< FILLABLE >>>>> purpose: which columns may be mass-assigned (safety: everything else is blocked)
        'name', // <<<<< NAME >>>>> purpose: the display name of the category, e.g. "Tutorial"
        'slug', // <<<<< SLUG >>>>> purpose: url-friendly version of the name, e.g. "tutorial"
    ];

    public function posts(): HasMany // <<<<< POSTS RELATION >>>>> purpose: one category can have many blog posts
    {
        return $this->hasMany(Post::class); // <<<<< HAS MANY >>>>> purpose: loads all posts whose category_id points at this category
    }
}
