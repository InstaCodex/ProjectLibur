<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/data/artikel', [PostController::class, 'index'])->name('data.artikel');
    Route::get('/dashboard/data/detail/{post:slug}', [PostController::class, 'show'])->name('data.artikel');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');
Route::get('/posts', function () {
    $posts = Post::latest()->filter(request(['search', 'category', 'penulis']))->paginate(6)->withQueryString();
    return view('posts', ['title' => 'Blog', 'posts' => $posts, 'h2' => 'Artikel Terbaru ']);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single', 'post' => $post, 'h2' => 'Artikel Terbaru ']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

require __DIR__ . '/auth.php';
