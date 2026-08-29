<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoControllerApi extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function store(Request $request)
    {
        $curso = Curso::create($request->all());

        return response()->json($curso, 201);
    }

    public function show(Curso $curso)
    {
        return response()->json($curso);
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());

        return response()->json($curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return response()->json([
            'message' => 'Curso excluído com sucesso.'
        ]);
    }
}
