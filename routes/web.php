<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

// Route para mostra a página create
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

//Route para mostra a pag do produto
Route::get('/events/{id}', [EventController::class, 'show']);

// Route para inserir produtos
Route::post('/events', [EventController::class, 'store']);

//Route para delete
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');

//Route para ver edit

Route::get('/events/edit/{id}',[EventController::class, 'edit'])->middleware('auth');

//Route para update

Route::put('/events/update/{id}',[EventController::class, 'update'])->middleware('auth');



Route::get('/produtos', [EventController::class, 'produtos']);

/* Parametro para busca de produto por $id */
Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produto',['id' => $id]);
});

//Route para dashboard
Route::get('/dashboard',[EventController::class, 'dashboard'])->middleware('auth');



