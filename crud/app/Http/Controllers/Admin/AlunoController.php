<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index() {
        $linhas = Aluno::all();
        return view('admin.alunos.indexAlunos', compact('linhas'));
    }

    public function adicionar() {
        return view('admin.alunos.adicionarAlunos');
    }

    public function editar($id) {
        $linha = Aluno::find($id);
        return view('admin.alunos.editarAlunos', compact('linha'));
    }

    public function excluir($id) {
        Aluno::find($id)->delete();
        return redirect()->route('admin.alunos');
    }

    public function salvar(Request $req)
    {
        $req->validate([
            'nome' => 'required',
            'celular' => 'required',
            'id_curso' => 'required'
        ]);

        $dados = $req->only([
            'nome',
            'celular',
            'imagem',
            'id_curso'
        ]);

        if($req->hasFile('arquivo')){
            $imagem = $req->file('arquivo');
            $nome = time().'.'.$imagem->getClientOriginalExtension();
            $imagem->move('img/alunos', $nome);
            $dados['imagem'] = 'img/alunos/'.$nome;
        }

        Aluno::create($dados);

        return redirect()->route('admin.alunos');
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->only([
            'nome',
            'celular',
            'imagem',
            'id_curso'
        ]);

        if($req->hasFile('arquivo')){
            $imagem = $req->file('arquivo');
            $nome = time().'.'.$imagem->getClientOriginalExtension();
            $imagem->move('img/alunos', $nome);
            $dados['imagem'] = 'img/alunos/'.$nome;
        }

        Aluno::find($id)->update($dados);

        return redirect()->route('admin.alunos');
    }
}