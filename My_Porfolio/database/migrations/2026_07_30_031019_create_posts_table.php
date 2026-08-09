<?php // <<<<< POSTS TABLE MIGRATION >>>>> purpose: creates the base "posts" table for blog articles

use Illuminate\Database\Migrations\Migration; // <<<<< IMPORT >>>>> purpose: base migration class
use Illuminate\Database\Schema\Blueprint; // <<<<< IMPORT >>>>> purpose: fluent schema builder for defining columns
use Illuminate\Support\Facades\Schema; // <<<<< IMPORT >>>>> purpose: facade that runs the schema operations

return new class extends Migration // <<<<< ANONYMOUS MIGRATION >>>>> purpose: Laravel tracks migrations by file name
{
    /**
     * Run the migrations.
     */
    public function up(): void // <<<<< UP >>>>> purpose: apply the schema change (php artisan migrate)
    {
        Schema::create('posts', function (Blueprint $table) { // <<<<< CREATE TABLE >>>>> purpose: build the posts table
            $table->id(); // <<<<< ID >>>>> purpose: auto-increment primary key
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete(); // <<<<< CATEGORY ID >>>>> purpose: FK to categories; null if category is deleted
            $table->string('title'); // <<<<< TITLE >>>>> purpose: post headline
            $table->string('slug')->unique(); // <<<<< SLUG >>>>> purpose: unique url-friendly identifier
            $table->string('excerpt')->nullable(); // <<<<< EXCERPT >>>>> purpose: short card summary (optional)
            $table->longText('body'); // <<<<< BODY >>>>> purpose: full article HTML
            $table->string('cover_image')->nullable(); // <<<<< COVER IMAGE >>>>> purpose: optional local cover image path
            $table->timestamp('published_at')->nullable(); // <<<<< PUBLISHED AT >>>>> purpose: publish date (nullable)
            $table->timestamps(); // <<<<< TIMESTAMPS >>>>> purpose: created_at and updated_at columns
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void // <<<<< DOWN >>>>> purpose: undo the change (php artisan migrate:rollback)
    {
        Schema::dropIfExists('posts'); // <<<<< DROP TABLE >>>>> purpose: remove the posts table
    }
};
