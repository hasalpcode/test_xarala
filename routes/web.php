<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
    
// });
Route::get('/',[ContactController::class,'index'])->name('accueil');
Route::get('/accueil',[ContactController::class,'index'])->name('accueil');
Route::post('/add',[ContactController::class,'addContact'])->name('add');
Route::get('/newContact', [ContactController::class,'newContact'])->name('newContact');
Route::get('/supprimer/{id}',[ContactController::class,'supprimer'])->name('supprimer');
Route::post('/add',[ContactController::class,'addContact'])->name('add');
Route::get('/modifier/{id}',[ContactController::class,'updateformulaire'] )->name('modiformulaire');
Route::put('/update/{id}',[ContactController::class,'update'])->name('modifier');
Route::get('/detail/{id}',[ContactController::class,'detailcontact'])->name('detail');