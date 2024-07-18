<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
Route::get('/', function () {
    return view('task.index');
});
*/

/*
Route::post('/', function ( ) {
    print_r($_POST);
});
*/

Route::get('/', [TaskController::class,'index']);
Route::post('/', [TaskController::class,'store']);
Route::delete('/{id}', [TaskController::class,'destroy'])->name('task.destroy');
