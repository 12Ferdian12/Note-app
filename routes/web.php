<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/Note', function () {
    return view('Note/create');
});
Route::prefix('Note')->name('Note.')->group( function(){
    Route::get('/Note', function () {return view('Note/create');})-> name('create') ;
});
