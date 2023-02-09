<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ServiceController;
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

// Route::get('/{lang?}', function () {
//     return view('home');
// });
// Route::get('/{lang?}', [App\Http\Controllers\ServiceController::class, 'getServices'])->name('home');
Route::get('/{lang?}', [ServiceController::class , 'getServices'])->name('home');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin' , 'middleware' => 'admin'], function(){
        Route::get('/', [AdminController::class , 'getIndex'])->name('admin.home');
        Route::prefix('services')->group(function(){
            Route::get('/', [ServiceController::class , 'getAdminServices'])->name('admin.service.all');
            Route::get('new', [ServiceController::class , 'getCreateService'])->name('admin.service.getCreate');
            Route::post('new', [ServiceController::class , 'postCreateService'])->name('admin.service.postCreate');
            Route::get('edit/{id}', [ServiceController::class , 'getEditService'])->name('admin.service.getEdit');
            Route::post('edit/{id}', [ServiceController::class , 'postEditService'])->name('admin.service.postEdit');
            Route::get('delete/{id}', [ServiceController::class , 'deleteService'])->name('admin.service.delete');
        });
        Route::prefix('languages')->group(function(){
            Route::get('/', [LanguagesController::class , 'getAdminLanguages'])->name('admin.languages.all');
            Route::get('new', [LanguagesController::class , 'getCreateLanguage'])->name('admin.languages.getCreate');
            Route::post('new', [LanguagesController::class , 'postCreateLanguage'])->name('admin.languages.postCreate');
            Route::get('edit/{id}', [LanguagesController::class , 'getEditLanguage'])->name('admin.languages.getEdit');
            Route::post('edit/{id}', [LanguagesController::class , 'postEditLanguage'])->name('admin.languages.postEdit');
            Route::get('delete/{id}', [LanguagesController::class , 'deleteLanguage'])->name('admin.languages.delete');
        });
    });
});
