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

Route::get('/', [\App\Http\Controllers\AuctionController::class, 'home']);


Route::get('/communities', [\App\Http\Controllers\CommunityController::class, 'index']);
Route::get('/auctions', [\App\Http\Controllers\AuctionController::class, 'open']);
Route::get('/upcoming-auctions', [\App\Http\Controllers\AuctionController::class, 'upcoming']);
Route::get('/auctions/{auction_id}', [\App\Http\Controllers\AuctionController::class, 'show']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
