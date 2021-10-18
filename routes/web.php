<?php

use App\Http\Controllers\AdminPanel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;


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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::resource('/patient', PatientController::class);
Route::resource('/appointment', AppointmentController::class);
Route::resource('/admin', AdminPanel::class);
Route::post('/appointment/{id}/MarkDone', [AppointmentController::class, 'MarkDone'])->name('MarkDone');
Route::get('/go/fetch_data', [App\Http\Controllers\HomeController::class,'fetch_data'])->name('Fetch_data');
Route::get('/appointments/trashlist', [App\Http\Controllers\AppointmentController::class,'trashlist'])->name('appointment.trashlist');
Route::get('/appointment/{id}/restore', [App\Http\Controllers\AppointmentController::class,'restore'])->name('appointment.Restore');
Route::get('/appointments/trashlistrefresh', [App\Http\Controllers\AppointmentController::class,'trashlistrefresh'])->name('appointment.trashlistrefresh');
Route::post('/appointment/trash', [App\Http\Controllers\AppointmentController::class,'trash'])->name('appointment.trash');
Route::view('/chat', 'chats.chat');
