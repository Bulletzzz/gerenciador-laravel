<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\ComentarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tarefas', TarefaController::class);
Route::post('/tarefas/{tarefa}/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');