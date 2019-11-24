<?php

use Illuminate\Support\Facades\Route;

// - website
Route::group([
    'middleware' => [ 'web' ],
    'namespace' => 'Iag\Agws\Http\Controllers',
    'as' => 'website.',
], function () {
});
