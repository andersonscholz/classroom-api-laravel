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

    public function update(Request $request, $id)
    {
        $turma = Turma::findOrFail($id);

        $request->validate([
            'nome' => 'required|string|max:100',
            'curso' => 'required|string|max:100',
        ]);

        $turma->update($request->all());
        return response('Turma ' . $turma['nome'] . ' atualizada com sucesso');
    }

    public function destroy($id)
    {
        $turma = Turma::findOrFail($id);
        $turma->delete();
        return response('Turma deletada: '. $turma['nome']);    
    }
}
