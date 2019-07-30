<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aluno;

class AlunoController extends Controller
{
    // index aluno
    public function index()
    {
        $registros = Aluno::all();
        return view('admin.alunos.index',compact('registros'));
    }
    // adicionar aluno
    public function adicionar()
    {
        return view('admin.alunos.adicionar');
    }
    // salvar aluno
    public function salvar(Request $req)
    {
        $dados = $req->all();
        //dd($dados);


        if ($req->hasfile('foto')) {
            $foto = $req->file('foto');
            $num = rand(1111,9999);
            $dir = "img/alunos";
            $ex = $foto->guessClientExtension();
            $nomeFoto = "foto_".$num.".".$ex;
            $foto->move($dir,$nomeFoto);
            $dados['foto'] = $dir."/".$nomeFoto;
        }

        Aluno::create($dados);

        return redirect()->route('admin.alunos');
    }
    // editar aluno
    public function editar($id)
    {
        $registro = Aluno::find($id);
        return view('admin.alunos.editar',compact('registro'));
    }
    // salvar aluno
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        //dd($dados);

        if ($req->hasfile('foto')) {
            $foto = $req->file('foto');
            $num = rand(1111,9999);
            $dir = "img/alunos";
            $ex = $foto->guessClientExtension();
            $nomeFoto = "foto_".$num.".".$ex;
            $foto->move($dir,$nomeFoto);
            $dados['foto'] = $dir."/".$nomeFoto;
        }

        Aluno::find($id)->update($dados);

        return redirect()->route('admin.alunos');
    }
    // deletar aluno
    public function deletar($id) 
    {
        Aluno::find($id)->delete();
        return redirect()->route('admin.alunos');
    }
}
