<?php // <<<<< USER MODEL >>>>> purpose: the Eloquent model for application users (used by Laravel authentication)

namespace App\Models; // <<<<< NAMESPACE >>>>> purpose: places the class in App\Models for autoloading

use Database\Factories\UserFactory; // <<<<< IMPORT >>>>> purpose: the factory that generates fake users for testing/seeding
use Illuminate\Database\Eloquent\Attributes\Fillable; // <<<<< IMPORT >>>>> purpose: PHP attribute that declares mass-assignable columns
use Illuminate\Database\Eloquent\Attributes\Hidden; // <<<<< IMPORT >>>>> purpose: PHP attribute that hides columns from JSON/serialization
use Illuminate\Database\Eloquent\Factories\HasFactory; // <<<<< IMPORT >>>>> purpose: trait that links the model to its factory
use Illuminate\Foundation\Auth\User as Authenticatable; // <<<<< IMPORT >>>>> purpose: base auth-capable user class (password, login, sessions)
use Illuminate\Notifications\Notifiable; // <<<<< IMPORT >>>>> purpose: gives the user the ability to send notifications

#[Fillable(['name', 'email', 'password'])] // <<<<< FILLABLE >>>>> purpose: these three columns may be mass-assigned
#[Hidden(['password', 'remember_token'])] // <<<<< HIDDEN >>>>> purpose: never expose password/token when the user is serialized to JSON
class User extends Authenticatable // <<<<< USER MODEL >>>>> purpose: maps to the "users" database table
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable; // <<<<< TRAITS >>>>> purpose: enables factory creation and notifications

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array // <<<<< CASTS >>>>> purpose: convert raw column values into PHP types automatically
    {
        return [
            'email_verified_at' => 'datetime', // <<<<< CAST >>>>> purpose: treat this column as a Carbon date object
            'password' => 'hashed', // <<<<< CAST >>>>> purpose: automatically hash the password whenever it is set
        ];
    }
}
