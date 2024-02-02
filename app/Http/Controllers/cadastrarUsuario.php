<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
    public function index(){
        //$dados = cadastrarUsuarioModel::all();
        return view('paginas.cadastrar');
    }//fim do metodo


    public function store(Request $request)
    {
        $nomeUsuario = $request->input('nome');
        $senhaUsuario = $request->input('senha');

        $model = new cadastrarUsuarioModel();
        $model->nome = $nomeUsuario;
        $model->senha = $senhaUsuario;
        $model->save();//Armazenar os dados no DB

        return redirect('/cadastrar');

    }//fim do método store

    public function consultar(){
        $dados = cadastrarUsuarioModel::all();
        
        return view('paginas.consultarUsuario', compact('dados'));
    }//fim do metodo

    

}//fim da classe