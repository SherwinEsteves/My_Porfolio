<?php // <<<<< WEB ROUTES >>>>> purpose: define every HTTP route of the portfolio app

use App\Http\Controllers\ContactController; // <<<<< IMPORT >>>>> purpose: controller used by the contact form submission
use App\Http\Controllers\PostController; // <<<<< IMPORT >>>>> purpose: controller used by the blog detail route
use App\Models\Post; // <<<<< IMPORT >>>>> purpose: query published posts for the home page
use Illuminate\Support\Facades\Route; // <<<<< IMPORT >>>>> purpose: Laravel's route registration facade

Route::get('/', function () { // <<<<< HOME ROUTE >>>>> purpose: the main portfolio landing page at "/"
    return view('home', [ // <<<<< RENDER HOME >>>>> purpose: render the single-page portfolio
        'posts' => Post::published() // <<<<< PUBLISHED ONLY >>>>> purpose: only show posts whose date is in the past
            ->with('category') // <<<<< EAGER LOAD >>>>> purpose: load category in one query so cards can show it
            ->latest('published_at') // <<<<< NEWEST FIRST >>>>> purpose: sort posts by publish date, newest on top
            ->get(), // <<<<< EXECUTE QUERY >>>>> purpose: fetch the posts collection
    ]);
})->name('home'); // <<<<< ROUTE NAME >>>>> purpose: allows linking with route('home')

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send'); // <<<<< CONTACT FORM >>>>> purpose: posts the contact form and emails the owner

Route::get('/blog', function () { // <<<<< STATIC BLOG LISTING >>>>> purpose: hardcoded 10-post technical blog page
    return view('blog.index');
})->name('blog.index'); // <<<<< ROUTE NAME >>>>> purpose: allows linking with route('blog.index')

Route::get('/blog/{slug}', function ($slug) {
    $post = \App\Helpers\StaticPosts::findBySlug($slug);
    abort_unless($post, 404);
    return view('blog.article', ['post' => $post]);
})->name('blog.article');

Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('blog.show'); // <<<<< BLOG DETAIL >>>>> purpose: one post per slug, named blog.show
