<?php

use App\Http\Middleware\CheckWriter;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::get('/', 'FrontPageController@welcome');
Route::get('/article/{slug}', 'ArticleController@showarticle');

Route::middleware(ProtectAgainstSpam::class)->group(function() {
    Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard' ], function() {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::middleware(CheckWriter::class)->group(function() {
        Route::resource('article', ArticleController::class);
        Route::resource('headers', HeaderController::class);
    });
});
