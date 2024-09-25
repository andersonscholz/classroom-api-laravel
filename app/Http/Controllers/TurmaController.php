<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function index()
    {
        return Turma::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'curso' => 'required|string|max:100',
        ]);

        Turma::create($request->all());
        return response('Turma '. $request['nome'] . ' criada com sucesso');
    }

    public function show($id)
    {
        return Turma::findOrFail($id);
    }

    public function destroy($id)
    {
        $turma = Turma::findOrFail($id);
        $turma->delete();
        return response('Turma deletada: '. $turma['nome']);
    }
}
