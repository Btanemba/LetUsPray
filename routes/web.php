<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

route::post('/contact', [ContactController::class, 'send'])->name('contact.send'); 
