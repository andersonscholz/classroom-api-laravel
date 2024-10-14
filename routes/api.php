<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmaController;

Route::prefix('turmas')->group(function () {
    Route::get('/', [TurmaController::class, 'index'])
        ->name('classroom.turmas');

    Route::post('/criar', [TurmaController::class, 'store'])
        ->name('classroom.turmas.criar');

    Route::put('/atualizar/{id}', [TurmaController::class, 'update'])
        ->name('classroom.turmas.atualizar');

    Route::delete('/deletar/{id}', [TurmaController::class, 'destroy'])
        ->name('classroom.turmas.deletar');
});
