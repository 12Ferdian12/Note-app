<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoteController;
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
    return redirect()->route('Category.index');
});

// Route::get('/Note', function () {
//     return view('Note/create');
// });
Route::prefix('Note')->name('Note.')->group( function(){
    Route::get('/', [NoteController::class, 'index'])->name('index');
    Route::get('/Create',[NoteController::class, 'create'])->name('create');
    Route::post('/Create',[NoteController::class, 'store'])->name('store');

});
Route::prefix('Category')->name('Category.')->group( function(){
    Route::get('/', [CategoryController::class, 'index']) -> name('index');
    Route::get('/Create', [CategoryController::class, 'create']) -> name('create');
    Route::post('/Create', [CategoryController::class, 'store'])->name('store');
    Route::delete('/{id}/Delete',[CategoryController::class, 'destroy'])->name('delete');   
});
