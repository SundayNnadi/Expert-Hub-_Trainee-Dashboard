<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/login', 'AuthController@login')->name('login');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::post('/upload', [UploadController::class, 'upload'])->name('upload.upload');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
    Route::get('/posts', [BlogPostController::class, 'index'])->name('posts.index');
    Route::post('/posts', [BlogPostController::class, 'store'])->name('posts.store');
    // Route::resource('posts', BlogPostController::class);
    // Route::get('/blog-posts', [BlogPostController::class, 'index'])->name('blog-posts.index');
});

require __DIR__.'/auth.php';
