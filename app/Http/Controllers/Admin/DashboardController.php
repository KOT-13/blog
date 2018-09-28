<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use App\Product;
use App\User;
use Illuminate\Http\Request;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Admin
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::count();
        $posts = Post::count();
        $categories = Category::count();
        $comments = Comment::count();
        $products = Product::count();

        return view('admin.index', compact('users','posts', 'categories', 'comments', 'products'));
    }
}
