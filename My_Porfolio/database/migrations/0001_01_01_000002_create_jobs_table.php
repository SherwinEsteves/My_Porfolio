<?php // <<<<< JOBS TABLE MIGRATION >>>>> purpose: Laravel's default queued-jobs tables

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
        Schema::create('jobs', function (Blueprint $table) { // <<<<< JOBS TABLE >>>>> purpose: pending queued jobs
            $table->id(); // <<<<< ID >>>>> purpose: auto-increment primary key
            $table->string('queue')->index(); // <<<<< QUEUE >>>>> purpose: queue name, indexed
            $table->longText('payload'); // <<<<< PAYLOAD >>>>> purpose: serialized job data
            $table->unsignedSmallInteger('attempts'); // <<<<< ATTEMPTS >>>>> purpose: how many times it was tried
            $table->unsignedInteger('reserved_at')->nullable(); // <<<<< RESERVED >>>>> purpose: when a worker claimed it
            $table->unsignedInteger('available_at'); // <<<<< AVAILABLE >>>>> purpose: earliest run time
            $table->unsignedInteger('created_at'); // <<<<< CREATED >>>>> purpose: unix timestamp of creation
        });

        Schema::create('job_batches', function (Blueprint $table) { // <<<<< BATCHES TABLE >>>>> purpose: tracks batch processing progress
            $table->string('id')->primary(); // <<<<< ID >>>>> purpose: unique batch id
            $table->string('name'); // <<<<< NAME >>>>> purpose: batch display name
            $table->integer('total_jobs'); // <<<<< TOTAL >>>>> purpose: total jobs in the batch
            $table->integer('pending_jobs'); // <<<<< PENDING >>>>> purpose: jobs still waiting
            $table->integer('failed_jobs'); // <<<<< FAILED >>>>> purpose: jobs that failed
            $table->longText('failed_job_ids'); // <<<<< FAILED IDS >>>>> purpose: list of failed job ids
            $table->mediumText('options')->nullable(); // <<<<< OPTIONS >>>>> purpose: batch metadata
            $table->integer('cancelled_at')->nullable(); // <<<<< CANCELLED >>>>> purpose: when the batch was cancelled
            $table->integer('created_at'); // <<<<< CREATED >>>>> purpose: unix timestamp of creation
            $table->integer('finished_at')->nullable(); // <<<<< FINISHED >>>>> purpose: when the batch completed
        });

        Schema::create('failed_jobs', function (Blueprint $table) { // <<<<< FAILED JOBS >>>>> purpose: stores jobs that failed permanently
            $table->id(); // <<<<< ID >>>>> purpose: auto-increment primary key
            $table->string('uuid')->unique(); // <<<<< UUID >>>>> purpose: unique job identifier
            $table->string('connection'); // <<<<< CONNECTION >>>>> purpose: queue connection used
            $table->string('queue'); // <<<<< QUEUE >>>>> purpose: queue name
            $table->longText('payload'); // <<<<< PAYLOAD >>>>> purpose: serialized job data
            $table->longText('exception'); // <<<<< EXCEPTION >>>>> purpose: the error message
            $table->timestamp('failed_at')->useCurrent(); // <<<<< FAILED AT >>>>> purpose: when the job failed

            $table->index(['connection', 'queue', 'failed_at']); // <<<<< INDEX >>>>> purpose: speeds up failure lookups
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // <<<<< DOWN >>>>> purpose: undo the schema changes
    {
        Schema::dropIfExists('jobs'); // <<<<< DROP >>>>> purpose: remove the jobs table
        Schema::dropIfExists('job_batches'); // <<<<< DROP >>>>> purpose: remove the batches table
        Schema::dropIfExists('failed_jobs'); // <<<<< DROP >>>>> purpose: remove the failed jobs table
    }
};
