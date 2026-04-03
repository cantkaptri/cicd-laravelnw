<?php

use App\Services\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hitung', function (Calculator $calc) {
    $hasil = $calc->add(10, 5);

    return response()->json([
        'operasi' => '10 + 5',
        'hasil'   => $hasil,
    ]);
});