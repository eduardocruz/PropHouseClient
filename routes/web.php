<?php

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
    return view('prophouse');
});


Route::get('/communities', [\App\Http\Controllers\CommunityController::class, 'index']);
Route::get('/auctions', [\App\Http\Controllers\AuctionController::class, 'open']);
