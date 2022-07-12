<?php

use Illuminate\Support\Facades\Route;
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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/about-us', [DirectoryPagesController::class, 'about'])->name('about');
Route::get('/our-blog', [DirectoryPagesController::class, 'blog'])->name('blog');
Route::get('/all-teachers', [DirectoryPagesController::class, 'teachers'])->name('teachers');
Route::get('/contact-us', [DirectoryPagesController::class, 'contact'])->name('contact');

Route::get('/admin', [DirectoryPagesController::class, 'admin']);
Route::get('/admin-dashboard', [DirectoryPagesController::class, 'admindashboard'])->name('admindashboard');
// Route::get('/admin', function(){
//     return view('admin.login');
// });
