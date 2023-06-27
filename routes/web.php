<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QrCodeController;

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

Route::get('/', [GeneralController::class, 'welcome'])
    ->name('welcome');

    Route::get('/insert', [GeneralController::class, 'insert'])
    ->name('insert');





Route::prefix('user')->group(function () {

    Route::get('/join-with-affiliate-link/{id}', [UserController::class, 'joinWithAffiliateLink'])
        ->name('user_join_with_affiliate_link');

    Route::get('/verified-email', [UserController::class, 'emailVerification'])
        ->name('user_emailVerification');

    Route::get('/login', [UserController::class, 'loginView'])
        ->name('login');


    Route::get('/join', [UserController::class, 'joinView'])
        ->name('joinView');

    Route::get('/logout', [UserController::class, 'logout'])
        ->name('user_logout');





    Route::middleware('auth')->group(function () {

        Route::get('/', [UserController::class, 'dashboard'])
            ->name('user_dashboard');

        Route::get('/my-affiliates', [UserController::class, 'viewAffiliate'])
            ->name('user_affiliates');  


            Route::get('/qrcode', [QrCodeController::class, 'index']);
    });

});