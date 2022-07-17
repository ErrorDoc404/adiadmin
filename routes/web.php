<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlackBeltController;
use App\Http\Controllers\UserSettingController;

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
    $bytes = disk_free_space("/");
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    $storage = sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class];
    return view('dashboard', compact('storage'));
})->middleware(['auth'])->name('dashboard');

Route::get('/blackbelt', [BlackBeltController::class, 'index'])->middleware(['auth'])->name('blackbelt');
Route::get('/blackbelt/create', [BlackBeltController::class, 'create'])->middleware(['auth'])->name('blackbelt.create');
Route::post('/blackbelt', [BlackBeltController::class, 'store'])->middleware(['auth'])->name('blackbelt.store');
Route::get('/blackbelt/{id}', [BlackBeltController::class, 'show'])->middleware(['auth'])->name('blackbelt.view');
Route::get('/blackbelt/{id}/edit', [BlackBeltController::class, 'edit'])->middleware(['auth'])->name('blackbelt.edit');

Route::get('/profile', [UserSettingController::class, 'index'])->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
