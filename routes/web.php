<?php

use App\Http\Controllers\mahasiswaController;
use App\Models\mahasiswa;
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

Route::resource('mahasiswa',mahasiswaController::class);
Route::get('/',[mahasiswaController::class,'index'])->name('index');
Route::get('/create',[mahasiswaController::class,'create'])->name('create');
Route::post('/store',[mahasiswaController::class,'store'])->name('store');
Route::get('/edit/{npm}',[mahasiswaController::class,'edit'])->name('edit');
Route::post('/update/{npm}',[mahasiswaController::class,'update'])->name('update');
Route::get('/delete/{npm}',[mahasiswaController::class,'delete'])->name('delete');