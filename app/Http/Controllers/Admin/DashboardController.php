<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $posts = Post::count();
        $categories = Category::count();
        $comments = Comment::count();

        return view('admin.index', compact('users','posts', 'categories', 'comments'));
    }
}
