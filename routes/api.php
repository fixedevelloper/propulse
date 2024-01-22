<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/list_fixture',
    [ApiController::class, 'list_fixture'])
    ->name('list_fixture');
Route::get('/list_league',
    [ApiController::class, 'list_league'])
    ->name('list_league');
