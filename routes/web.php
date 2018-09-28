<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::resource('category', 'CategoryController')->middleware('auth');

Route::resource('category/{category}/products', 'ProductsController', ['as' => 'category.products']);

Route::group(['middleware' => ['role:admin'], 'prefix'=>'admin', 'namespace'=>'Admin', 'as' => 'admin.'], function (){
    Route::get('/', 'DashboardController@index');
    Route::resource('category', 'CategoriesController');
    Route::resource('user', 'UsersController');
    Route::resource('post', 'PostsController');
    Route::resource('comment', 'CommentsController');
    Route::resource('product', 'ProductsController');
});