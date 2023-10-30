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
    return view('dashboard.dashboard');
});

Route::get('terms-and-conditions', function(){
    return view('terms-and-conditions.terms-and-conditions');
})->name('terms.and.conditions');


Route::group(['prefix'=> 'services'], function () {
    Route::get('website-development', function(){ 
        return view('services.website-development');
    })->name('service.website-development');

    Route::get('mobile-app-development', function(){ 
        return view('services.mobile-app-development');
    })->name('service.mobile-app-development');

    Route::get('software-development', function(){ 
        return view('services.software-development');
    })->name('service.software-development');
});

