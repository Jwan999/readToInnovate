<?php

use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [ApplicantController::class, 'index']);
//Route::get('/signup', [ApplicantController::class, 'showSignupPage']);
//Route::post('/signup', [ApplicantController::class, 'store']);


Auth::routes(['register' => false]);

Route::get('/dashboard/applicants', [ApplicantController::class, 'showDashboard'])->middleware('auth');
Route::get('/dashboard/applicants/api', [ApplicantController::class, 'applicantsApi'])->middleware('auth');
Route::get('/dashboard/applicants/api/{id}', [ApplicantController::class, 'getApplicant'])->middleware('auth');
Route::post('/dashboard/applicants/api/{id}', [ApplicantController::class, 'rateApplicant'])->middleware('auth');
Route::delete('/dashboard/applicant/api/{id}', [ApplicantController::class, 'destroy'])->middleware('auth');


Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
