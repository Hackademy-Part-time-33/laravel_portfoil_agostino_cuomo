<?php

use Illuminate\Support\Facades\Route;


Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function(){
    return view('homepage');
})->name('home');

Route::get('/chiSono', function(){
    return view('ChiSono');
})->name('ChiSono');

Route::get('/servizi', function(){

    $servizi = [
        ['name' => 'Siti Web', 'uri' => 'siti-web'],
        ['name' => 'Negozi Digitali', 'uri' => 'ecommerce'],
        ['name' => 'Gestionali in Cloud', 'uri' => 'gestionali-cloud'],
        ['name' => 'Marketing Digitale', 'uri' => 'marketing-digitale'],
    ];
    return view('ServiziOfferti', ['array'=>$servizi] );
})->name('servizi');


