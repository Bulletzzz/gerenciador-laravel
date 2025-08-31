<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Tarefa;

class ComentarioController extends Controller
{
    public function store(Request $request, $tarefa_id)
    {
        $request->validate([
            'conteudo' => 'required|string',
        ]);

        Comentario::create([
            'tarefa_id' => $tarefa_id,
            'conteudo' => $request->conteudo,
        ]);

        return redirect()->back()->with('success', 'Comentário adicionado!');
    }
}