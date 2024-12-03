<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->middleware(['auth', 'verified'])->name('dashboard');

// Route-rute untuk ArticleController
// Menampilkan daftar artikel
Route::get('/article', [ArticleController::class, 'index'])->name('IndexArticle');

// Menampilkan form untuk membuat artikel baru
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

// Menyimpan artikel baru
Route::post('/article', [ArticleController::class, 'store'])->name('article.store');

// Menampilkan artikel berdasarkan ID
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('ArticleDetail');

// Menampilkan form untuk mengedit artikel
Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])->name('ArticleEdit');

// Mengupdate artikel berdasarkan ID
Route::put('/article/{id}', [ArticleController::class, 'update'])->name('article.update');

// Menghapus artikel berdasarkan ID
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
// Categories
Route::get('/category/{slug}', [ArticleController::class, 'showByCategory'])->name('articles.byCategory');


//Routers Project
Route::get('/project', [ProjectController::class, 'index'])->name('project');

//routes Contact
// Route untuk menampilkan halaman kontak (formulir kontak)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('sendMessage');

Route::get('/my-endpoint', [MyController::class, 'index']);

// Route untuk mengirim formulir kontak (menangani data formulir)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
//routes login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard', ['title' => 'Dashboard']);
// })->middleware(['auth', 'verified'])->name('dashboard');

// // Route-rute untuk ArticleController
// // Menampilkan daftar artikel
// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

// // Menampilkan artikel berdasarkan ID
// Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

// // Menggunakan middleware isAdmin untuk akses hanya untuk admin
// Route::middleware('isAdmin')->group(function () {
//     // Menampilkan form untuk membuat artikel baru
//     Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

//     // Menyimpan artikel baru
//     Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

//     // Menampilkan form untuk mengedit artikel
//     Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

//     // Mengupdate artikel berdasarkan ID
//     Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

//     // Menghapus artikel berdasarkan ID
//     Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
//     ->name('logout');