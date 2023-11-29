<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'home'])
    ->name('home');
Route::get('/live', [FrontController::class, 'live'])
    ->name('live');
Route::get('/standings', [FrontController::class, 'standings'])
    ->name('standings');
Route::get('/sportbetting', [FrontController::class, 'sportbetting'])
    ->name('sportbetting');
Route::get('/casino', [FrontController::class, 'casino'])
    ->name('casino');
Route::get('/promotions', [FrontController::class, 'promotions'])
    ->name('promotions');

Route::get('/about_us', [FrontController::class, 'about_us'])
    ->name('about_us');
Route::get('/registration', [FrontController::class, 'register'])
    ->name('register');
Route::get('/contact_us', [FrontController::class, 'contact_us'])
    ->name('contact_us');
