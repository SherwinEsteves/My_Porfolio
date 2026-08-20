<?php // <<<<< CATEGORY MODEL >>>>> purpose: data class for blog post categories (no database connection)

namespace App;

/**
 * Category data class.
 * 
 * This class replaces App\Models\Category (Eloquent) with a plain PHP class.
 * No database connection is required. Category names are defined inline
 * in the static blog post data in routes/web.php.
 */
class Category
{
    public $id;
    public $name;
    public $slug;

    public function __construct($data = [])
    {
        $this->id = $data['id'] ?? 1;
        $this->name = $data['name'] ?? '';
        $this->slug = $data['slug'] ?? '';
    }
}