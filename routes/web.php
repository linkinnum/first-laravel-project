<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* $product = 'Computer';
    return view('welcome',compact('product')); */
    return 'Hello World from Route';
});

Route::get('contact-us', function () {
    /* $product = 'Laptop';
    return view ('contactus',compact('product')); */
    return view ('contactus');
});

Route::get('about-us', function () {
    /* $product = 'MACbook';
    return view ('aboutus',compact('product')); */
    return view ('aboutus');
});

Route::get('support-us', function () {
    /* $product = 'Computer';
    return view ('supportus',compact('product')); */
    return view ('supportus');
});

/* Route::get('products', function () {
    return view ('products.index');
}); */

/* Route::get('products', function () {
    $name='Product 1';
    $price=800;
    // return view ('products.index')->with('name',$name)->with('price',$price);
    // return view ('products.index',compact('name','price'));
    return view('products.index',[
        'name'=>$name,
        'price'=>500
    ]);
}); */

/* Route::get('products/{name}/{price}', function ($name,$price) {
    //$name='Product 1';
    //$price=800;
    // return view ('products.index')->with('name',$name)->with('price',$price);
    // return view ('products.index',compact('name','price'));
    return view('products.index',[
        'name'=>$name,
        'price'=>$price
    ]);
}); */

// Route::view('products','products.index');
// Route::view('products','products.index',['name'=>'Product 2','price'=>600]);
Route::view('products/{name}/{price}','products.index');

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

Route::fallback(function() {
    return 'Are you lost?';
});
