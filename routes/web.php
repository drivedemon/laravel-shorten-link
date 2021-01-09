<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortenLinkController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [ShortenLinkController::class, 'index']);
Route::post('generate-shorten-link', [ShortenLinkController::class, 'store'])->name('generate.shorten.link');
Route::get('bluebik/{code}', [ShortenLinkController::class, 'shortenLink'])->name('shorten.link');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
