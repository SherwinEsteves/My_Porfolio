<?php // <<<<< CACHE TABLE MIGRATION >>>>> purpose: Laravel's default database cache tables

use Illuminate\Database\Migrations\Migration; // <<<<< IMPORT >>>>> purpose: base migration class
use Illuminate\Database\Schema\Blueprint; // <<<<< IMPORT >>>>> purpose: fluent schema builder
use Illuminate\Support\Facades\Schema; // <<<<< IMPORT >>>>> purpose: facade that runs schema operations

return new class extends Migration // <<<<< ANONYMOUS MIGRATION >>>>> purpose: Laravel tracks migrations by file name
{
    /**
     * Run the migrations.
     */
    public function up(): void // <<<<< UP >>>>> purpose: apply the schema changes
    {
        Schema::create('cache', function (Blueprint $table) { // <<<<< CACHE TABLE >>>>> purpose: stores cached key/value pairs
            $table->string('key')->primary(); // <<<<< KEY >>>>> purpose: unique cache key
            $table->mediumText('value'); // <<<<< VALUE >>>>> purpose: serialized cached data
            $table->bigInteger('expiration')->index(); // <<<<< EXPIRATION >>>>> purpose: expiry timestamp, indexed
        });

        Schema::create('cache_locks', function (Blueprint $table) { // <<<<< LOCKS TABLE >>>>> purpose: atomic cache lock coordination
            $table->string('key')->primary(); // <<<<< KEY >>>>> purpose: unique lock key
            $table->string('owner'); // <<<<< OWNER >>>>> purpose: process that holds the lock
            $table->bigInteger('expiration')->index(); // <<<<< EXPIRATION >>>>> purpose: lock expiry timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // <<<<< DOWN >>>>> purpose: undo the schema changes
    {
        Schema::dropIfExists('cache'); // <<<<< DROP >>>>> purpose: remove the cache table
        Schema::dropIfExists('cache_locks'); // <<<<< DROP >>>>> purpose: remove the locks table
    }
};
