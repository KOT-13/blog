<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Post;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class CommentsController
 * @package App\Http\Controllers\Admin
 */
class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $posts = Post::all();
        return view('admin.comment.create', compact('users', 'posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCommentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        Comment::create($request->toArray());
        return redirect(route('admin.comment.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('admin.comment.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $users = User::all();
        $posts = Post::all();
        return view('admin.comment.edit', compact('comment', 'users', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreCommentRequest $request
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function update(StoreCommentRequest $request, Comment $comment): RedirectResponse
    {
        $userData = array_filter($request->all());
        $comment->fill($userData);
        $comment->save();

        return redirect(route('admin.comment.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Comment $comment):RedirectResponse
    {
        $comment->delete();
        return back();
    }
}
