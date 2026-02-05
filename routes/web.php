<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => $posts, 'h2'=> 'Artikel Terbaru ']);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single', 'post' => $post, 'h2'=> 'Artikel Terbaru ']);
});
Route::get('/penulis/{user:username}', function (User $user){
    return view('posts', ['title' => 'Blog', 'posts' => $user->posts, 'h2'=> 'Artikel Terbaru Dari ' . $user->name]);
});
Route::get('/kategori/{category:slug}', function (Category $category){
    return view('posts', ['title' => 'Blog', 'posts' => $category->posts, 'h2'=> 'Kategori Dari ' . $category->name]);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
