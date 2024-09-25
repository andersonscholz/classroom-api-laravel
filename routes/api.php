<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmaController;

Route::prefix('turmas')->group(function () {
    Route::get('/', [TurmaController::class, 'index'])
        ->name('classroom.turmas');

    Route::get('/{id}', [TurmaController::class, 'show'])
        ->name('classroom.turmas.turma');

    Route::post('/criar', [TurmaController::class, 'store'])
        ->name('classroom.turmas.criar');

    Route::delete('/deletar/{id}', [TurmaController::class, 'destroy'])
        ->name('classroom.turmas.deletar');
});
