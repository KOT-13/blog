<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class CommentsController extends Controller
{
    /**
     * @param StoreCommentRequest $request
     * @param Post $post
     * @return void
     */
    public function store(StoreCommentRequest $request, Post $post)
    {
        $post->addComment(request('body'));

        return back();
    }
}
