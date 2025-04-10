<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Auth\LoginController;
// Group routes to apply localization middleware and prefix
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        // Home page (now using the component layout)
        Route::get('/', function () {
            return view('home');
        });
        Route::get('pricing', function () {
            return view('pricing');
        }); 
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
        Route::post('login', [LoginController::class, 'login'])->name('login');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');


        Route::get('profile',function(){
            return 'this is my profile';
        })->name('profile');

        Route::get('dashboard',function(){
            return 'this is the dashboard.';
        })->name('dashboard');
    }
); 