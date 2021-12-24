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
Route::fallback(function () {
   return "dd";
});
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', [App\Http\Controllers\CheckRolesController::class, 'index'])->middleware(['auth'])->name('dashboard');

// for Administrator

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'adminguest'], function () {
        Route::get('login', [App\Http\Controllers\Admin\LoginController::class,'LoginIndex'])->name('admin.authenticate');
        Route::post('/login/redirect', [App\Http\Controllers\Admin\LoginController::class, 'LoginPost'])->name('admin.login');
    });

    Route::group(['middleware' => 'adminauth'], function () {
        //Admin Logout
        Route::post('/logout/redirect', [App\Http\Controllers\Admin\LoginController::class, 'Logout'])->name('admin.logout');

        Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        
        
        Route::get('resources', [App\Http\Controllers\Admin\DashboardController::class, 'Resources'])->name("admin.resources");
        //Practitioner
        Route::get('practitioners-account', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerAccount'])->name('admin.practitioner');
        Route::post('practitioner/store', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerStore'])->name('practitioner.store');
        Route::post('practitioner/checkemail', [App\Http\Controllers\Admin\DashboardController::class, 'checkEmail'])->name('practitioner.checkEmail');
        Route::get('practitioner/{id}/edit', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerEdit'])->name('practitioner.edit');
        Route::post('practitioner/{id}/details/updated', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerUpdate'])->name('practitioner.update');
        Route::get('practitioner/delete', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerDelete'])->name('practitioner.delete');
        Route::get('practitioner/status', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerStatus'])->name('practitioner.status');
       
        // Service User
        Route::get('service-users', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUser'])->name("admin.serviceuser");
        Route::post('serviceuser/checkemail', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUsercheckEmail'])->name('serviceuser.checkEmail');
        Route::post('serviceuser/store', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUserStore'])->name('serviceuser.store');




    });
});

// for Practitioner
Route::group(['prefix' => 'practitioner'], function () {

    Route::group(['middleware' => 'practitionerguest'], function () {
        Route::get('login', [App\Http\Controllers\Practitioner\LoginController::class,'LoginIndex'])->name('practitioner.authenticate');
        Route::post('/login/redirect', [App\Http\Controllers\Practitioner\LoginController::class, 'LoginPost'])->name('practitioner.login');
        Route::get('/reset-password/{token}', [App\Http\Controllers\Practitioner\LoginController::class, 'practitionerResetPasswod'])->name('practitioner.password.reset');

        Route::post('/reset-password', [App\Http\Controllers\Practitioner\LoginController::class, 'practitionerResetPasswodstore'])->name('practitioner.password.update');
    });

    Route::group(['middleware' => 'practitionerauth'], function () {

        Route::post('/logout/redirect', [App\Http\Controllers\Practitioner\LoginController::class, 'Logout'])->name('practitioner.logout');

        Route::get('dashboard', [App\Http\Controllers\Practitioner\DashboardController::class, 'index'])->name('practitioner.dashboard');
    });
});


// for User
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/user/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
});

require __DIR__ . '/auth.php';
