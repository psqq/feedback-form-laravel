<?php

use App\Http\Controllers\FeedbackController;
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

Route::get('/feedback-form', [FeedbackController::class, 'form'])->name('feedback-form')->middleware('auth');
Route::post('/feedbacks', [FeedbackController::class, 'store'])->name('feedbacks.store')->middleware('auth');
Route::get('/feedbacks', [FeedbackController::class, 'list'])->name('feedbacks')->middleware('auth');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
