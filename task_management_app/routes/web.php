<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('layouts.app');
});*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('profile/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
//Route::post('profile/update/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');





Route::get('task/state/{id}', [App\Http\Controllers\TaskController::class, 'priorityHandler'])->name('task.state');
Route::get('task/send-mail', [App\Http\Controllers\TaskController::class, 'sendEmail'])->name('task.email');
Route::resource('task', TaskController::class);





