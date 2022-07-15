<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirectoryPagesController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->user()->type == 1) {
       return redirect('/admin');
    }
    if (auth()->user()->type == 2) {
       return redirect('/teacher');
    }
    if (auth()->user()->type == 3) {
       return redirect('/student');
    }
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Directory
Route::get('/about-us', [DirectoryPagesController::class, 'about'])->name('about');
Route::get('/our-blog', [DirectoryPagesController::class, 'blog'])->name('blog');
Route::get('/all-teachers', [DirectoryPagesController::class, 'teachers'])->name('teachers');
Route::get('/contact-us', [DirectoryPagesController::class, 'contact'])->name('contact');

Route::get('/admin', [DirectoryPagesController::class, 'admin'])->middleware('auth')->name('admin');

// Auth Route
Route::post('/login', [AuthController::class, 'login']);