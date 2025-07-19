<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function() {
    return "Article route";
});

Route::get('/articles/detail/{id}', function($id) {
    return "Article detail route - $id";
});
