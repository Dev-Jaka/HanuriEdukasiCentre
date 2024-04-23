<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

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

Auth::routes();
Route::middleware(['auth', 'user-access:siswa'])->group(function () {

    Route::get('/dashboard/siswa', [SiswaController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.home');
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [HomeController::class, 'profile'])->name('profile');
        Route::post('update', [HomeController::class, 'updateprofile'])->name('profile.update');
    });
    Route::controller(AkunController::class)
        ->prefix('akun')
        ->as('akun.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('showdata', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'tambahAkun')->name('add');
            Route::match(['get', 'post'], '{id}/ubah', 'ubahAkun')->name('edit');
            Route::delete('{id}/hapus', 'hapusAkun')->name('delete');
        });

    Route::controller(SiswaController::class)
        ->prefix('siswa')
        ->as('siswa.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('showdata', 'dataTable')->name('dataTable');
            Route::match(['get', 'post'], 'tambah', 'add')->name('add');
            Route::match(['get', 'post'], '{id}/ubah', 'ubahAkun')->name('edit');
            Route::delete('{id}/hapus', 'hapusAkun')->name('delete');
        });
});

Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

// Route::group(['prefix' => 'dashboard/admin'], function () {
//     Route::get('/', [HomeController::class, 'index'])->name('home');

//     Route::group(['prefix' => 'profile'], function () {
//         Route::get('/', [HomeController::class, 'profile'])->name('profile');
//         Route::post('update', [HomeController::class, 'updateprofile'])->name('profile.update');
//     });

//
// });
