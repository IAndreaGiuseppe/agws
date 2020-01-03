<?php

use Illuminate\Support\Facades\Route;

// - website
Route::group([
    'middleware' => ['web'],
    'namespace' => 'Iag\Agws\Http\Controllers',
    'as' => 'website.',
], function () {
    Route::get('/', 'WebsiteController@homepage')->name('homepage');
    Route::get('/services', 'WebsiteController@services')->name('services');
});
