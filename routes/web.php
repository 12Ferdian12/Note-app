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
    Route::get('/Create',[NoteController::class, 'create'])->name('create');
    Route::post('/Create',[NoteController::class, 'store'])->name('store');
    Route::delete('/{id}/Delete',[NoteController::class, 'destroy'])->name('delete');
    Route::get('/{id}/Edit',[NoteController::class, 'edit'])->name('edit');
    Route::post('{id}/Edit',[NoteController::class, 'update'])->name('update');   
});
Route::prefix('Category')->name('Category.')->group( function(){
    Route::get('/', [CategoryController::class, 'index']) -> name('index');
    Route::get('/Note', [NoteController::class, 'index'])->name('note');
    Route::get('/Create', [CategoryController::class, 'create']) -> name('create');
    Route::post('/Create', [CategoryController::class, 'store'])->name('store');
    Route::delete('/{id}/Delete',[CategoryController::class, 'destroy'])->name('delete');
    Route::get('/{id}/Edit',[CategoryController::class, 'edit'])->name('edit');   
    Route::post('/{id}/Edit',[CategoryController::class, 'update'])->name('update');   

});
