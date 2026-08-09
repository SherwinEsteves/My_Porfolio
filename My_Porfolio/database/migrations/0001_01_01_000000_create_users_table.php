<?php // <<<<< USERS TABLE MIGRATION >>>>> purpose: Laravel's default auth tables (users, password resets, sessions)

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
        Schema::create('users', function (Blueprint $table) { // <<<<< USERS TABLE >>>>> purpose: stores registered users
            $table->id(); // <<<<< ID >>>>> purpose: auto-increment primary key
            $table->string('name'); // <<<<< NAME >>>>> purpose: display name
            $table->string('email')->unique(); // <<<<< EMAIL >>>>> purpose: login email, must be unique
            $table->timestamp('email_verified_at')->nullable(); // <<<<< EMAIL VERIFIED >>>>> purpose: when the email was verified (nullable)
            $table->string('password'); // <<<<< PASSWORD >>>>> purpose: hashed password
            $table->rememberToken(); // <<<<< REMEMBER TOKEN >>>>> purpose: token for "remember me" logins
            $table->timestamps(); // <<<<< TIMESTAMPS >>>>> purpose: created_at and updated_at
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) { // <<<<< RESET TOKENS >>>>> purpose: stores password reset tokens
            $table->string('email')->primary(); // <<<<< EMAIL >>>>> purpose: primary key = user email
            $table->string('token'); // <<<<< TOKEN >>>>> purpose: the reset token itself
            $table->timestamp('created_at')->nullable(); // <<<<< CREATED AT >>>>> purpose: when the token was issued
        });

        Schema::create('sessions', function (Blueprint $table) { // <<<<< SESSIONS TABLE >>>>> purpose: stores user login sessions
            $table->string('id')->primary(); // <<<<< SESSION ID >>>>> purpose: unique session identifier
            $table->foreignId('user_id')->nullable()->index(); // <<<<< USER ID >>>>> purpose: FK to users (nullable), indexed
            $table->string('ip_address', 45)->nullable(); // <<<<< IP >>>>> purpose: IP used for the session
            $table->text('user_agent')->nullable(); // <<<<< USER AGENT >>>>> purpose: browser/device string
            $table->longText('payload'); // <<<<< PAYLOAD >>>>> purpose: serialized session data
            $table->integer('last_activity')->index(); // <<<<< LAST ACTIVITY >>>>> purpose: unix timestamp, indexed for cleanup
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // <<<<< DOWN >>>>> purpose: undo the schema changes
    {
        Schema::dropIfExists('users'); // <<<<< DROP >>>>> purpose: remove the users table
        Schema::dropIfExists('password_reset_tokens'); // <<<<< DROP >>>>> purpose: remove the reset tokens table
        Schema::dropIfExists('sessions'); // <<<<< DROP >>>>> purpose: remove the sessions table
    }
};
