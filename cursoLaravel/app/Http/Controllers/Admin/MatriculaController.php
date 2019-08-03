<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Matricula;

class MatriculaController extends Controller
{
    // index matricula
    public function index()
    {
        $registros = Matricula::all();
        return view('admin.matriculas.index',compact('registros'));
    }
    // adicionar matricula
    public function adicionar()
    {
        return view('admin.matriculas.adicionar');
    }
    // salvar matricula
    public function salvar(Request $req)
    {
        $dados = $req->all();
        //dd($dados);

        Matricula::create($dados);

        return redirect()->route('admin.matriculas');
    }
    // editar matricula
    public function editar($id)
    {
        $registro = Matricula::find($id);
        return view('admin.matriculas.editar',compact('registro'));
    }
    // salvar matricula
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        //dd($dados);

        Matricula::find($id)->update($dados);

        return redirect()->route('admin.matriculas');
    }
    // deletar matricula
    public function deletar($id) 
    {
        Matricula::find($id)->delete();
        return redirect()->route('admin.matriculas');
    }
}
