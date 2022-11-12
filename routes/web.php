<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\KehamilanController;
use App\Http\Controllers\NotificationController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('file/{slug}',[FileController::class,'show'])->name('file.show');
Route::resource('/kehamilan',KehamilanController::class);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('notification/test',[NotificationController::class,'test'])->name('notification.test');
    Route::post('notification/test',[NotificationController::class,'send'])->name('notification.send');
});
require __DIR__.'/auth.php';
