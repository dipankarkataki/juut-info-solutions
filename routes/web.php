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
});

