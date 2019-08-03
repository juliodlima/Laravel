<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Home
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

// Login
Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

// Teste
Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);
Route::post('/contato', ['uses'=>'ContatoController@criar']);
Route::put('/contato', ['uses'=>'ContatoController@editar']);


Route::group(['middleware'=>'auth'], function () {

    // Cursos
    Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
    Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);
    // Alunos
    Route::get('/admin/alunos',['as'=>'admin.alunos','uses'=>'Admin\AlunoController@index']);
    Route::get('/admin/alunos/adicionar',['as'=>'admin.alunos.adicionar','uses'=>'Admin\AlunoController@adicionar']);
    Route::post('/admin/alunos/salvar',['as'=>'admin.alunos.salvar','uses'=>'Admin\AlunoController@salvar']);
    Route::get('/admin/alunos/editar/{id}',['as'=>'admin.alunos.editar','uses'=>'Admin\AlunoController@editar']);
    Route::put('/admin/alunos/atualizar/{id}',['as'=>'admin.alunos.atualizar','uses'=>'Admin\AlunoController@atualizar']);
    Route::get('/admin/alunos/deletar/{id}',['as'=>'admin.alunos.deletar','uses'=>'Admin\AlunoController@deletar']);
    // Matriculas
    Route::get('/admin/matriculas',['as'=>'admin.matriculas','uses'=>'Admin\MatriculaController@index']);
    Route::get('/admin/matriculas/adicionar',['as'=>'admin.matriculas.adicionar','uses'=>'Admin\MatriculaController@adicionar']);
    Route::post('/admin/matriculas/salvar',['as'=>'admin.matriculas.salvar','uses'=>'Admin\MatriculaController@salvar']);
    Route::get('/admin/matriculas/editar/{id}',['as'=>'admin.matriculas.editar','uses'=>'Admin\MatriculaController@editar']);
    Route::put('/admin/matriculas/atualizar/{id}',['as'=>'admin.matriculas.atualizar','uses'=>'Admin\MatriculaController@atualizar']);
    Route::get('/admin/matriculas/deletar/{id}',['as'=>'admin.matriculas.deletar','uses'=>'Admin\MatriculaController@deletar']);

});

