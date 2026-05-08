<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Hello World from Route';
});

Route::get('about', function () {
    return 'About Nam';
});

/* Route::get('product/details', function () {
    return 'Details';
});

Route::get('product/views', function () {
    return 'View';
}); */

Route::prefix('product')->group(function () {
    Route::get('details', function () {
        return 'Details Page';
    });

    Route::get('views', function () {
        return 'View Page';
    });    
});

Route::get('vendor/{id}/{name}', function ($id,$name) {
    return 'Hello Vendor => ' .$id . ' ' .$name;
});

Route::get('user/{name?}', function ($name='User 1') {
    return 'User: ' . $name;
});
