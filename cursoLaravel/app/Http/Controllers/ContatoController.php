<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function index()
    {
        return "Esse é o index do ContratoController";
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
