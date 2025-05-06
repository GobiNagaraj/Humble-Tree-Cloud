<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;

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

// Frontend Routes
// Route::view('/frontend', 'frontend.home');
Route::view('/web', 'frontend.home');

// Backend Routes
Route::view('/backend', 'backend.home');
Route::view('/backend/register', 'backend.auth.register')->middleware('guest')->name('/backend/register');
Route::view('/backend/login', 'backend.auth.login')->middleware('guest')->name('/backend/login');

// Authentication and Authorization
Route::post('/backend/auth/store', [RegisterController::class, 'store']);
Route::post('/backend/auth/authenticate', [LoginController::class, 'authenticate']);

// Admin Panel Redirection
Route::view('/backend/dashboard', 'backend.home')->middleware('auth');

Route::get('/backend/event/type', [EventController::class, 'list']);
Route::view('/backend/event/create', 'backend.events.create');
Route::post('/backend/event/store', [EventController::class, 'store']);
Route::get('/backend/event/{id}/delete', [EventController::class, 'destroy']);

// Admin Panel Logout
Route::get('/backend/logout', [LoginController::class, 'logout']);
