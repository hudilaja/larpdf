<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pdf', [PDFController::class, 'generatePDF'])->name('pdf');
Route::get('/word', [WordController::class, 'index'])->name('word');