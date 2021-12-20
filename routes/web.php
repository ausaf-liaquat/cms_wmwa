<?php

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\CheckRolesController::class, 'index'])->middleware(['auth'])->name('dashboard');

// for Administrator
Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/practitioners-account', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerAccount'])->name('admin.practitioner');
    Route::get('admin/service-users', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUser'])->name("admin.serviceuser");
    Route::get('admin/resources', [App\Http\Controllers\Admin\DashboardController::class, 'Resources'])->name("admin.resources");
});

// for Practitioner
Route::group(['middleware' => ['auth', 'role:practitioner']], function () {
    Route::get('/practitioner/dashboard', [App\Http\Controllers\Practitioner\DashboardController::class, 'index'])->name('practitioner.dashboard');
});

// for User
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/user/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
});

require __DIR__ . '/auth.php';
