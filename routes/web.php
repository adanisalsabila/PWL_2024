<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/number1', function () {
    return 'This is route for number 1'; 
});

Route::get('/world', function () {
    return 'World';
   });

Route::get('/user/{name}', function ($name) {
    return 'Adani Salsabila'.$name;
    });
    
   

?>


