<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    // index curso
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index',compact('registros'));
    }
    // adicionar curso
    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }
    // salvar curso
    public function salvar(Request $req)
    {
        $dados = $req->all();
        //dd($dados);

        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

        if ($req->hasfile('imagem')) {
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::create($dados);

        return redirect()->route('admin.cursos');
    }
    // editar curso
    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar',compact('registro'));
    }
    // salvar curso
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        //dd($dados);

        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

        if ($req->hasfile('imagem')) {
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }
    // deletar curso
    public function deletar($id) 
    {
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
}
