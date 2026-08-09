<?php // <<<<< CATEGORIES TABLE MIGRATION >>>>> purpose: creates the "categories" table used by blog posts

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
        Schema::create('categories', function (Blueprint $table) { // <<<<< CREATE TABLE >>>>> purpose: build the categories table
            $table->id(); // <<<<< ID >>>>> purpose: auto-increment primary key
            $table->string('name'); // <<<<< NAME >>>>> purpose: display name, e.g. "Tutorial"
            $table->string('slug')->unique(); // <<<<< SLUG >>>>> purpose: unique url-friendly identifier
            $table->timestamps(); // <<<<< TIMESTAMPS >>>>> purpose: created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // <<<<< DOWN >>>>> purpose: undo the change (php artisan migrate:rollback)
    {
        Schema::dropIfExists('categories'); // <<<<< DROP TABLE >>>>> purpose: remove the categories table
    }
};
