<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryPagesController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\SectionController;

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
    return view('front.index');
})->name('front.home');

Route::get('/why-kafou', function () {
    return view('front.why-kafou');
})->name('front.why_kafou');

Route::get('/welcome-kafou', function () {
    return view('front.welcome-kafou');
})->name('front.welcome_kafou');

Route::get('/mission-vision', function () {
    return view('front.mission-vision');
})->name('front.mission_vision');

Route::get('/divisions', function () {
    return view('front.divisions');
});

Route::name('division.')->group(function () {
    Route::get('/anesthesia', function () {
        return view('front.divisions.anesthesia');
    })->name('anesthesia');

    Route::get('/surgery', function () {
        return view('front.divisions.surgery');
    })->name('surgery');

    Route::get('/lab-solutions', function () {
        return view('front.divisions.lab_solutions');
    })->name('lab_solutions');

    Route::get('/respiratory', function () {
        return view('front.divisions.respiratory');
    })->name('respiratory');

    Route::get('/sleep-disorders', function () {
        return view('front.divisions.sleep_disorders');
    })->name('sleep_disorders');

    Route::get('/nursing-icu', function () {
        return view('front.divisions.nursing_icu');
    })->name('nursing_icu');
});

Route::get('/ethics-compliance', function () {
    return view('front.ethics_compliance');
})->name('ethics_compliance');

Route::get('/contact-us', function () {
    return view('front.contact_us');
})->name('front.contact_us');

Route::get('/direct-apply', function () {
    return view('front.direct_apply');
})->name('front.direct_apply');

Route::get('/our-partners', function () {
    return view('front.our_partners');
})->name('front.our_partners');

Route::get('/our-clients', function () {
    return view('front.our_clients');
})->name('front.our_clients');

// Authentication routes
Auth::routes();

// Admin routes
Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Route::resource('users', UserController::class);

    Route::resource('sections', SectionController::class);
    Route::get('get-sections-by-page/{page_id}', [SectionController::class, 'getAllSectionsByPageId'])->name('get.sections.by.page');

    Route::get('all-pages', [CategoryPagesController::class, 'getAllCategoryPages'])->name('all.pages');
    Route::get('all-keys-page/{page_id}', [CategoryPagesController::class, 'getAllKeysForPage'])->name('contents.pages');
    Route::get('key-edit/{key_id}', [CategoryPagesController::class, 'editKey'])->name('edit.key');
    Route::put('key-update/{key_id}', [CategoryPagesController::class, 'updateKey'])->name('update.key');

    // Route::get('all-content', [CategoryPagesController::class, 'viewAllContent'])->name('all.content');

    Route::post('/ckeditor/upload', [CkeditorController::class, 'uploadImage'])->name('ckeditor.upload');
});

Route::get('/home', function () {
    return redirect('/admin/dashboard');
})->middleware('admin');

Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
