<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryPagesController;

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
    return view('index');
})->name('front.home');

Route::get('/why-kafou', function () {
    return view('why-kafou');
});

Route::get('/welcome-kafou', function () {
    return view('welcome-kafou');
});

Route::get('/mission-vision', function () {
    return view('mission-vision');
});

// Authentication routes
Auth::routes();

// Admin routes
Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Route::resource('users', UserController::class);

    Route::get('all-pages', [CategoryPagesController::class, 'getAllCategoryPages'])->name('all.pages');
    Route::get('all-keys-page/{page_id}', [CategoryPagesController::class, 'getAllKeysForPage'])->name('contents.pages');
    Route::get('key-edit/{key_id}', [CategoryPagesController::class, 'editKey'])->name('edit.key');
    Route::put('key-update/{key_id}', [CategoryPagesController::class, 'updateKey'])->name('update.key');
    // Route::get('all-content', [CategoryPagesController::class, 'viewAllContent'])->name('all.content');
});

Route::get('/home', function () {
    return redirect('/admin/dashboard');
})->middleware('admin');

Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
