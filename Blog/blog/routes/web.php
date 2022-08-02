<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'guest']);

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->middleware(['auth'])->name('posts.create');
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.delete');
//Route::get('guest', [PostController::class, 'guest'])->name('posts.guest');
//Route::get('guest', [PostController::class, 'guest'])->middleware('AuthenticateUser');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
