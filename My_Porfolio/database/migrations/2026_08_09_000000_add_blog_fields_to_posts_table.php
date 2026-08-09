<?php // <<<<< BLOG FIELDS MIGRATION >>>>> purpose: adds YouTube, tags, images and reading-time columns to the posts table

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
        Schema::table('posts', function (Blueprint $table) { // <<<<< ALTER TABLE >>>>> purpose: add columns to the existing posts table
            $table->string('youtube_url')->nullable()->after('body'); // <<<<< YOUTUBE URL >>>>> purpose: optional YouTube link, placed after body
            $table->string('external_url')->nullable()->after('youtube_url'); // <<<<< EXTERNAL URL >>>>> purpose: optional related link
            $table->json('tags')->nullable()->after('external_url'); // <<<<< TAGS >>>>> purpose: JSON array of short tags
            $table->json('images')->nullable()->after('tags'); // <<<<< IMAGES >>>>> purpose: JSON array of screenshot paths
            $table->unsignedSmallInteger('reading_time')->nullable()->after('images'); // <<<<< READING TIME >>>>> purpose: estimated minutes (positive small int)
            $table->boolean('featured')->default(false)->after('reading_time'); // <<<<< FEATURED >>>>> purpose: reserved highlight flag
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // <<<<< DOWN >>>>> purpose: undo the change (php artisan migrate:rollback)
    {
        Schema::table('posts', function (Blueprint $table) { // <<<<< ALTER TABLE >>>>> purpose: drop the added columns
            $table->dropColumn(['youtube_url', 'external_url', 'tags', 'images', 'reading_time', 'featured']); // <<<<< DROP COLUMNS >>>>> purpose: remove all blog fields
        });
    }
};
