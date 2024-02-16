<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
    return view('public.index');
});

//login and logout
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', function () {
    return view('login-page.register');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    // dhasboard
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    // roles super admin
    Route::group(['middleware' => ['role:super admin']], function () {
        Route::get('/dashboard/manajement-admin', function () {
            return view('dashboard.super-admin.manajement-admin.index');
        });

        Route::get('/dashboard/settings-situs', function () {
            return view('dashboard.super-admin.settings-situs.index');
        });

        Route::get('/dashboard/manajement-database-backup', function () {
            return view('dashboard.super-admin.manajement-database.backup');
        });

        Route::get('/dashboard/role-user', function () {
            return view('dashboard.super-admin.role-user.index');
        });
    });

    // roles admin
    Route::group(['middleware' => ['role:admin|super admin']], function () {
        Route::get('/dashboard/manajement-content', function () {
            return view('dashboard.admin.manajement-content.index');
        });
    });
});


// route 404 not found
Route::fallback(function () {
    return view('public.components.404-not-found');
});


// Route::get('assign-role-to-user', function () {
//     $user = User::findOrFail(1);
//     $role = Role::findOrFail(1);
//     $user->assignRole($role);
// });
