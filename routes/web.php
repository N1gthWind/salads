<?php

use App\Http\Controllers\SaladController;
use App\Http\Controllers\SitemapXmlController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [SaladController::class, 'index']);

Route::get('/logout', function () {
    abort(404);
});

Route::get('/sitemap.xml', [SitemapXmlController::class,'index']);

Auth::routes(['verify' => true]);
Route::resource('/products', SaladController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
