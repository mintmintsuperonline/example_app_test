<?php

use App\Http\Controllers\AppliesFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('index',[AppliesFormController::class,'index'])->name('index');
Route::post('store',[AppliesFormController::class,'store'])->name('store');
Route::get('create',[AppliesFormController::class,'create'])->name('create');
Route::get('/get-branch/{id}',[AppliesFormController::class,'getBranchId']);