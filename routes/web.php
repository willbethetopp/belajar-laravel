<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhamad Taufik Satya",
        "email" => "taufik.satya09@gmail.com",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/authors/{author:name}', [User::class, function(User $author) {
    return view('posts', [
        'title' => 'User Post',
        'posts' => $author->posts
    ]);
}]);