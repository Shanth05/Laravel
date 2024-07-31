<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/{p?}', function ($p='home') {
    return view("pages/".$p);
});

/*Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/post', function () {
    return view('pages.post');
});


Route::get('/photos', function () {
    return view('pages.photos');
});
*/

