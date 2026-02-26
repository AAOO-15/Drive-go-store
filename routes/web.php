<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('halamanutama');
})->name('home');

Route::get('/login', function (){
    return view('login');
})->name('login');
