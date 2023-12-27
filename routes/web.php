<?php

use App\Http\Controllers\ForramsController;
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
    return view('fosrams/index');
});

Route::get('/dashboard',[ForramsController::class,'dashboard'])->name('dashboard');

// branch master
Route::get('fosrams/branchMaster',[ForramsController::class,'branchMaster'])->name('branchMaster');
Route::get('fosrams/branchForm',[ForramsController::class,'branchForm'])->name('branchForm');
Route::get('fosrams/branchEdit',[ForramsController::class,'branchEdit'])->name('branchEdit');
Route::get('fosrams/branchView',[ForramsController::class,'branchView'])->name('branchView');