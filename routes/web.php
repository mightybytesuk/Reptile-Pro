<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CareSheetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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

route::get('/', [IndexController::class, 'welcome']);

//Care Sheet Routes
Route::get('/care-sheets', [CareSheetController::class, 'list'])->name('care-sheets');
Route::get('/create/care-sheets', [CareSheetController::class, 'create'])->name('create-caresheet');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [AnimalController::class, 'create'])->middleware('auth')->name('create');
Route::post('/create', [AnimalController::class, 'store'])->middleware('auth')->name('create');

Route::get('/manage-listings', [AnimalController::class, 'viewAll'])->middleware('auth')->name('manage');
