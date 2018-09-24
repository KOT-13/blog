<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePostRequest;
use App\Post;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class PostsController
 * @package App\Http\Controllers\Admin
 */
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.post.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        Post::create($request->toArray());
        return redirect(route('admin.post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $users = User::all();
        return view('admin.post.edit', compact('post', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StorePostRequest $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(StorePostRequest $request, Post $post): RedirectResponse
    {
        $userData = array_filter($request->all());
        $post->fill($userData);
        $post->save();

        return redirect(route('admin.post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return back();
    }
}
