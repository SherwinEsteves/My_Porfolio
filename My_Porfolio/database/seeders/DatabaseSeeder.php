<?php // <<<<< DATABASE SEEDER >>>>> purpose: root seeder that runs all other seeders (php artisan db:seed)

namespace Database\Seeders; // <<<<< NAMESPACE >>>>> purpose: places the seeder under Database\Seeders

use App\Models\User; // <<<<< IMPORT >>>>> purpose: User model for creating the sample user
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // <<<<< IMPORT >>>>> purpose: prevents model events from firing while seeding
use Illuminate\Database\Seeder; // <<<<< IMPORT >>>>> purpose: base seeder class

class DatabaseSeeder extends Seeder // <<<<< DATABASE SEEDER >>>>> purpose: entry point for seeding the whole database
{
    use WithoutModelEvents; // <<<<< TRAIT >>>>> purpose: skip model events for faster, quieter seeding

    /**
     * Seed the application's database.
     */
    public function run(): void // <<<<< RUN >>>>> purpose: called automatically when seeding starts
    {
        // User::factory(10)->create(); // <<<<< DISABLED >>>>> purpose: sample: create 10 random users (currently off)

        User::factory()->create([ // <<<<< SAMPLE USER >>>>> purpose: create one known test user
            'name' => 'Test User', // <<<<< NAME >>>>> purpose: the login/display name
            'email' => 'test@example.com', // <<<<< EMAIL >>>>> purpose: the login email
        ]);
    }
}
