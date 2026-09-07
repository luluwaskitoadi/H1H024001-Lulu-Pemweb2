<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'nama' => 'Lulu Waskito Adi',
        'nim'  => 'H1H024001',
    ]);
});
