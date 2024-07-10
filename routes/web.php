<?php

use App\Http\Controllers\TravelerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('traveler/listar',[TravelerController::class,'index'])->name('traveler.index');
Route::get('traveler/create',[TravelerController::class,'create']);
Route::post('traveler/store', [TravelerController::class,'store'])->name('traveler.store');
Route::get('traveler/{traveler}',[TravelerController::class,'show'])->name('traveler.show');
Route::put('traveler/{update}',[TravelerController::class,'update'])->name('traveler.update');
Route::delete('traveler/{destroy}',[TravelerController::class,'destroy'])->name('traveler.destroy');
Route::get('traveler/{traveler}/editar',[TravelerController::class,'edit'])->name('traveler.edit');
