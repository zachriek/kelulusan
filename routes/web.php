<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UpdatePasswordController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'cek'])->name('home.cek');
Route::post('/print', [HomeController::class, 'print'])->name('home.print');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('/users', UserController::class);
        Route::resource('/students', StudentController::class);
        Route::post('/students/import', [StudentController::class, 'import'])->name('students.import');
        Route::post('/students/export', [StudentController::class, 'export'])->name('students.export');
        Route::post('/students/print', [StudentController::class, 'print'])->name('students.print');

        Route::get('/my-profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/my-profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/my-profile/edit', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/my-profile/password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
        Route::patch('/my-profile/password/edit', [UpdatePasswordController::class, 'update'])->name('password.update');

        Route::get('/settings', [SettingController::class, 'edit'])->name('settings.edit');
        Route::patch('/settings/{setting}', [SettingController::class, 'update'])->name('settings.update');
    });
});
