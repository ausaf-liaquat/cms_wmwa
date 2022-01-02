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
    return view('errors.404');
});
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', [App\Http\Controllers\CheckRolesController::class, 'index'])->middleware(['auth'])->name('dashboard');

// for Administrator

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'adminguest'], function () {
        Route::get('login', [App\Http\Controllers\Admin\LoginController::class, 'LoginIndex'])->name('admin.authenticate');
        Route::post('/login/redirect', [App\Http\Controllers\Admin\LoginController::class, 'LoginPost'])->name('admin.login');
    });

    Route::group(['middleware' => 'adminauth'], function () {
        //Admin Logout
        Route::post('/logout/redirect', [App\Http\Controllers\Admin\LoginController::class, 'Logout'])->name('admin.logout');

        Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

        
        //Practitioner
        Route::get('practitioners-account', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerAccount'])->name('admin.practitioner');
        Route::post('practitioner/store', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerStore'])->name('practitioner.store');
        Route::post('practitioner/checkemail', [App\Http\Controllers\Admin\DashboardController::class, 'checkEmail'])->name('practitioner.checkEmail');
        Route::get('practitioner/{id}/edit', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerEdit'])->name('practitioner.edit');
        Route::post('practitioner/{id}/details/updated', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerUpdate'])->name('practitioner.update');
        Route::get('practitioner/delete', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerDelete'])->name('practitioner.delete');
        Route::get('practitioner/status', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerStatus'])->name('practitioner.status');
        Route::get('practitioner/{id}/view-accounts', [App\Http\Controllers\Admin\DashboardController::class, 'PractitionerViewAccounts'])->name('practitioner.viewaccounts');

        // Service User
        Route::get('service-users', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUser'])->name("admin.serviceuser");
        Route::post('serviceuser/checkemail', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUsercheckEmail'])->name('serviceuser.checkEmail');
        Route::post('serviceuser/store', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUserStore'])->name('serviceuser.store');
        Route::get('serviceuser/{id}/edit', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUserEdit'])->name('serviceuser.edit');
        Route::post('serviceuser/{id}/details/updated', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUserUpdate'])->name('serviceuser.update');
        Route::get('serviceuser/delete', [App\Http\Controllers\Admin\DashboardController::class, 'ServiceUserDelete'])->name('serviceuser.delete');
        // send work
        Route::post('send/workbook', [App\Http\Controllers\Admin\DashboardController::class, 'SendWorkbook'])->name('serviceuser.workbook');


        // Resource
        Route::get('resources', [App\Http\Controllers\Admin\ResourceController::class, 'Resources'])->name("admin.resources");
        Route::post('resources/store', [App\Http\Controllers\Admin\ResourceController::class, 'ResourceStore'])->name("resource.store");
        Route::get('resource/{id}/edit', [App\Http\Controllers\Admin\ResourceController::class, 'ResourceEdit'])->name('resource.edit');
        Route::post('resources/update', [App\Http\Controllers\Admin\ResourceController::class, 'ResourceUpdate'])->name("resource.update");
        Route::get('resources/delete', [App\Http\Controllers\Admin\ResourceController::class, 'ResourceDelete'])->name('resource.delete');
        Route::get('resources/{id}/download', [App\Http\Controllers\Admin\ResourceController::class, 'ResourceDownload'])->name('resource.download');
    
        // Workbook
        Route::get('view/workbook/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'ViewWorkbook'])->name('view.workbook');
    });
});

// for Practitioner
Route::group(['prefix' => 'practitioner'], function () {

    Route::group(['middleware' => 'practitionerguest'], function () {
        Route::get('login', [App\Http\Controllers\Practitioner\LoginController::class, 'LoginIndex'])->name('practitioner.authenticate');
        Route::post('/login/redirect', [App\Http\Controllers\Practitioner\LoginController::class, 'LoginPost'])->name('practitioner.login');
        Route::get('/reset-password/{token}', [App\Http\Controllers\Practitioner\LoginController::class, 'practitionerResetPasswod'])->name('practitioner.password.reset');
        Route::post('/reset-password', [App\Http\Controllers\Practitioner\LoginController::class, 'practitionerResetPasswodstore'])->name('practitioner.password.update');
    });

    Route::group(['middleware' => 'practitionerauth'], function () {

        Route::post('/logout/redirect', [App\Http\Controllers\Practitioner\LoginController::class, 'Logout'])->name('practitioner.logout');

        Route::get('dashboard', [App\Http\Controllers\Practitioner\DashboardController::class, 'index'])->name('practitioner.dashboard');
        Route::get('account/details', [App\Http\Controllers\Practitioner\DashboardController::class, 'AccountDetails'])->name('practitioner.accountdetails');
        Route::post('account/edit', [App\Http\Controllers\Practitioner\DashboardController::class, 'AccountEdit'])->name('practitioner.accountedit');

        // Service user
        Route::get('service-users', [App\Http\Controllers\Practitioner\DashboardController::class, 'ServiceUser'])->name("practitioner.serviceuser");
        Route::post('serviceuser/checkemail', [App\Http\Controllers\Practitioner\DashboardController::class, 'ServiceUsercheckEmail'])->name('practitioner.serviceuser.checkEmail');
        Route::post('serviceuser/store', [App\Http\Controllers\Practitioner\DashboardController::class, 'ServiceUserStore'])->name('practitioner.serviceuser.store');
        Route::get('profile/serviceuser/{id}/edit', [App\Http\Controllers\Practitioner\DashboardController::class, 'ServiceUserEdit'])->name('practitioner.serviceuser.edit');
        Route::post('serviceuser/{id}/details/updated', [App\Http\Controllers\Practitioner\DashboardController::class, 'ServiceUserUpdate'])->name('practitioner.serviceuser.update');
        Route::get('serviceuser/delete', [App\Http\Controllers\Practitioner\DashboardController::class, 'ServiceUserDelete'])->name('practitioner.serviceuser.delete');

        // Resources
        Route::get('resources', [App\Http\Controllers\Practitioner\DashboardController::class, 'Resource'])->name("practitioner.resource");
        Route::get('resources/{id}/download/', [App\Http\Controllers\Practitioner\DashboardController::class, 'practitionerResourceDownload'])->name('practitionerresource.download');
   
        Route::get('workbook/guidance', [App\Http\Controllers\Practitioner\DashboardController::class, 'WorkbookGuidance'])->name("practitioner.workbookguidance");
   
    });
});

// for User
Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');

        Route::get('account/details', [App\Http\Controllers\User\DashboardController::class, 'AccountDetails'])->name('serviceuser.accountdetails');
        Route::post('profile/edit/', [App\Http\Controllers\User\DashboardController::class, 'ProfileEdit'])->name('serviceuser.profileedit');
        Route::post('dup/serviceuser/checkemail', [App\Http\Controllers\User\DashboardController::class, 'dupcheckEmail'])->name('dupserviceuser.checkEmail');

        Route::get('serviceuser/{id}/edit', [App\Http\Controllers\User\DashboardController::class, 'ServiceUserEdit'])->name('user.edit');

        Route::get('my/workbook', [App\Http\Controllers\User\DashboardController::class, 'Myworkbook'])->name('serviceuser.myworkbook');
        Route::get('open/workbook/{id}', [App\Http\Controllers\Workbook\WorkbookController::class, 'openWorkbook'])->name('serviceuser.workbookopen');
        Route::post('store/workbook', [App\Http\Controllers\Workbook\WorkbookController::class, 'storeWorkbook'])->name('workbookopen.store');
        
        
        // Resources
     Route::get('resources', [App\Http\Controllers\User\DashboardController::class, 'Resource'])->name("user.resource");
     Route::get('resources/{id}/download', [App\Http\Controllers\User\DashboardController::class, 'ResourceDownload'])->name('serviceuserresource.download');
    });
});
require __DIR__ . '/auth.php';
