<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\KnowlidgeController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('actionLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('actionRegister');

Route::middleware(['auth'])->group(function () {


    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/admin/profile', [DashboardController::class, 'profile'])->name('admin.profile');


        Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala.index');
        Route::get('/gejala/create', [GejalaController::class, 'create'])->name('gejala.create');
        Route::post('/gejala/create', [GejalaController::class, 'store'])->name('gejala.store');
        Route::get('/gejala/edit/{id}', [GejalaController::class, 'edit'])->name('gejala.edit');
        Route::put('/gejala/edit/{id}', [GejalaController::class, 'update'])->name('gejala.update');
        Route::delete('/gejala/delete/{id}', [GejalaController::class, 'destroy'])->name('gejala.destroy');

        Route::get('/kerusakan', [KerusakanController::class, 'index'])->name('kerusakan.index');
        Route::get('/kerusakan/create', [KerusakanController::class, 'create'])->name('kerusakan.create');
        Route::post('/kerusakan/create', [KerusakanController::class, 'store'])->name('kerusakan.store');
        Route::get('/kerusakan/edit/{id}', [KerusakanController::class, 'edit'])->name('kerusakan.edit');
        Route::put('/kerusakan/edit/{id}', [KerusakanController::class, 'update'])->name('kerusakan.update');
        Route::delete('/kerusakan/delete/{id}', [KerusakanController::class, 'destroy'])->name('kerusakan.destroy');

        Route::get('/knowlidge', [KnowlidgeController::class, 'index'])->name('knowlidge.index');
        Route::get('/knowlidge/create', [KnowlidgeController::class, 'create'])->name('knowlidge.create');
        Route::post('/knowlidge/create', [KnowlidgeController::class, 'store'])->name('knowlidge.store');
        Route::get('/knowlidge/edit/{id}', [KnowlidgeController::class, 'edit'])->name('knowlidge.edit');
        Route::put('/knowlidge/edit/{id}', [KnowlidgeController::class, 'update'])->name('knowlidge.update');
        Route::delete('/knowlidge/delete/{id}', [KnowlidgeController::class, 'destroy'])->name('knowlidge.destroy');

        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

        Route::get('/edu', [EducationController::class, 'index'])->name('edu.index');
        Route::get('/edu/create', [EducationController::class, 'create'])->name('edu.create');
        Route::post('/edu/create', [EducationController::class, 'store'])->name('edu.store');
        Route::get('/edu/edit/{id}', [EducationController::class, 'edit'])->name('edu.edit');
        Route::put('/edu/update/{id}', [EducationController::class, 'update'])->name('edu.update');
        Route::delete('/edu/delete/{id}', [EducationController::class, 'destroy'])->name('edu.delete');
    });


    Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');
    Route::post('/konsultasi', [KonsultasiController::class, 'consult'])->name('konsultasi.consult');
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');

    Route::get('/about', [WelcomeController::class, 'about'])->name('about.index');
    Route::get('/diagnosa', [WelcomeController::class, 'diagnosa'])->name('diagnosa.index');
    Route::get('/edukasi', [WelcomeController::class, 'edukasi'])->name('edukasi.index');
    Route::get('/profile', [WelcomeController::class, 'profile'])->name('user.profile');
    Route::get('/profile/edit/{id}', [WelcomeController::class, 'edit_profile'])->name('edit.profile');
    Route::put('/profile/edit/{id}', [WelcomeController::class, 'update_profile'])->name('update.profileUser');
    Route::get('/profile/password', [WelcomeController::class, 'edit_password'])->name('edit.passwordUser');
    Route::put('/profile/password/{id}', [WelcomeController::class, 'update_password'])->name('update.passwordUser');
});
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
