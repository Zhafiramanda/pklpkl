<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

// Route::resource('posts', PostController::class)->middleware('auth');

//Home
Route::get('/landing', [HomeController::class, 'index'])->name('landing-page');
Route::post('/landing', [HomeController::class, 'AdditionalQuestion'])->name('submit.additional.question');


//Admin
Route::get('/manajemenakun', [AdminController::class, 'ListAlumni'])->name('list-alumni');
Route::get('/dashboardadmin', [AdminController::class, 'Dashboard'])->name('dashboard');
Route::get('/listpertanyaan', [AdminController::class, 'ListPertanyaan'])->name('admin.list-questions');
Route::post('/answer-faq/{id}', [AdminController::class, 'answerFaq'])->name('admin.answer.faq');
Route::get('/approve{id}', [AdminController::class, 'approve'])->name('admin.approve.faq');
Route::get('/reject{id}', [AdminController::class, 'reject'])->name('admin.reject.faq');


//Alumni
Route::get('/dashboardalumni', [AlumniController::class, 'Dashboard'])->name('alumni.dashboard');
Route::get('/dashboardalumni', [AlumniController::class, 'testi'])->name('alumni.dashboard');

/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
