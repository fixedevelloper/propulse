<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
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
Route::match(['POST','GET'],'/login', [LoginController::class, 'login'])
    ->name('login');
Route::get('/destroy', [LoginController::class, 'destroy'])
    ->name('destroy');
Route::match(['POST','GET'],'/deposit', [LoginController::class, 'deposit'])
    ->name('deposit');
Route::get('/', [FrontController::class, 'home'])
    ->name('home');
Route::get('/live', [FrontController::class, 'live'])
    ->name('live');
Route::get('/standings', [FrontController::class, 'standings'])
    ->name('standings');
Route::get('/score-stat', [FrontController::class, 'score_statistic'])
    ->name('score_statistic');
Route::get('/sportbetting', [FrontController::class, 'sportbetting'])
    ->name('sportbetting');
Route::get('/evenements', [FrontController::class, 'evenements'])
    ->name('evenements');
Route::get('/casino', [FrontController::class, 'casino'])
    ->name('casino');
Route::get('/promotions', [FrontController::class, 'promotions'])
    ->name('promotions');
Route::get('/ontheday', [FrontController::class, 'ontheday'])
    ->name('ontheday');
Route::match(["POST","GET"],'/setting', [FrontController::class, 'setting'])
    ->name('setting');
Route::match(["POST","GET"],'/statistic', [FrontController::class, 'statistics'])
    ->name('statistic');
Route::get('/st_page', [FrontController::class, 'setting_page'])
    ->name('st_page');
Route::get('/about_us', [FrontController::class, 'about_us'])
    ->name('about_us');
Route::match(['POST','GET'],'/registration', [LoginController::class, 'register'])
    ->name('register');
Route::get('/contact_us', [FrontController::class, 'contact_us'])
    ->name('contact_us');
Route::get('/fgetleaque', [FrontController::class, 'getLeague'])
    ->name('getLeague');
Route::get('/fgetteam', [FrontController::class, 'getTeams'])
    ->name('getTeam');
Route::get('/dashboard', [FrontController::class, 'dashboard'])
    ->name('dashboard');
