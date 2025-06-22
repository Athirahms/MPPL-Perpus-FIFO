<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PinjamApiController;
use App\Http\Controllers\Api\BukuApiController;
use App\Http\Middleware\BukuAuth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Grup route dengan middleware auth:api (perlu token)
Route::middleware('auth:api')->group(function () {
    
    // Grup route untuk peminjaman buku
    Route::prefix('pinjam')->group(function () {
        Route::get('/', [PinjamApiController::class, 'index']); // GET semua peminjaman (FIFO)
    });

    // Grup route untuk manajemen buku
    Route::prefix('buku')->group(function () {
        Route::get('/', [BukuApiController::class, 'index']); // GET semua buku (FIFO)
    });
});