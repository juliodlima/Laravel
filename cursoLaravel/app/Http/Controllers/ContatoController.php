<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Julio","tel"=>"99999999"],
            (object)["nome"=>"Carol","tel"=>"88888888"]
            
        ];
        return view('contato.index',compact('contatos'));
    }
    public function criar(Request $req)
    {
        //dd($req['nome']);
        dd($req->all());
        return "Esse é o Criar do ContratoController";
    }
    public function editar()
    {
        return "Esse é o Editar do ContratoController";
    }
}
