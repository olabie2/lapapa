<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    }
); // End Localization Group

// You might ne