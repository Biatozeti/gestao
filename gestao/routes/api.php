<?php

use App\Http\Controllers\GestaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('titulo',
[GestaoController::class, 'titulo']);

Route::post('descricao',
[GestaoController::class, 'descricao']);

Route::post('data_inicio',
[GestaoController::class, 'data_inicio']);

Route::delete('deleteServico/{id}',
[ServicoController::class, 'deleteservico']);

Route::put('update',
[ServicoController::class, 'update']);
});
