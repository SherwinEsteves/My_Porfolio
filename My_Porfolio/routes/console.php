<?php // <<<<< CONSOLE ROUTES >>>>> purpose: define Artisan CLI commands (this file contains Laravel's sample command)

use Illuminate\Foundation\Inspiring; // <<<<< IMPORT >>>>> purpose: provides the sample inspiring quotes
use Illuminate\Support\Facades\Artisan; // <<<<< IMPORT >>>>> purpose: facade for registering Artisan commands

Artisan::command('inspire', function () { // <<<<< INSPIRE COMMAND >>>>> purpose: "php artisan inspire" prints a motivational quote
    $this->comment(Inspiring::quote()); // <<<<< OUTPUT >>>>> purpose: print a random quote to the terminal
})->purpose('Display an inspiring quote'); // <<<<< DESCRIPTION >>>>> purpose: text shown in "php artisan list"
