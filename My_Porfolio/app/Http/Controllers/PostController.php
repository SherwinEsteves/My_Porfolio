<?php // <<<<< POST CONTROLLER >>>>> purpose: handles requests for individual blog post pages

namespace App\Http\Controllers; // <<<<< NAMESPACE >>>>> purpose: places the controller under App\Http\Controllers

use App\Models\Post; // <<<<< IMPORT >>>>> purpose: the Post model for loading a post from the URL
use Illuminate\View\View; // <<<<< IMPORT >>>>> purpose: return type for the view response

class PostController extends Controller // <<<<< POST CONTROLLER >>>>> purpose: serves the blog post detail page
{
    public function show(Post $post): View // <<<<< SHOW METHOD >>>>> purpose: route-model binding resolves the post by slug
    {
        // <<<<< VISIBILITY GUARD >>>>> purpose: block access to unpublished/future posts with a 404
        abort_unless($post->published_at && $post->published_at->isPast(), 404);

        return view('blog.show', [ // <<<<< RENDER VIEW >>>>> purpose: return the blog detail page
            'post' => $post->load('category'), // <<<<< EAGER LOAD >>>>> purpose: load the category so the view can show it
        ]);
    }
}
