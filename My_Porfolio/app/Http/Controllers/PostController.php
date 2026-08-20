<?php // <<<<< POST CONTROLLER >>>>> purpose: handles requests for individual blog post pages

namespace App\Http\Controllers; // <<<<< NAMESPACE >>>>> purpose: places the controller under App\Http\Controllers

use Illuminate\View\View; // <<<<< IMPORT >>>>> purpose: return type for the view response

class PostController extends Controller // <<<<< POST CONTROLLER >>>>> purpose: serves the blog post detail page
{
    public function show($slug): View // <<<<< SHOW METHOD >>>>> purpose: render a blog post by slug
    {
        // Without a database, we redirect to the blog index
        // The static routes (/blog and /blog/{slug}) handle all post viewing
        return redirect()->route('blog.index');
    }
}