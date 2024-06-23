<?php
use App\Http\Controllers\ControllerMail;
use App\Http\Controllers\NuovoController;
use Illuminate\Support\Facades\Route;


Route::get('welcome',[NuovoController::class, 'welcome'] )->name('welcome');

Route::get('/home', [NuovoController::class, 'homepage'])->name('home');

Route::get('/chiSono',[NuovoController::class, 'ChiSono'] )->name('ChiSono');

Route::get('/servizi', [NuovoController::class, 'servizi'])->name('servizi');

Route::get('/details/{service}', [NuovoController::class, 'dettagli'])->name('dettagli'); 

Route::post('Mail', [ControllerMail::class, 'ShowMail'])->name('Mail');

Route::get('contact', [NuovoController::class, 'contatti'])->name('contatti'); 


