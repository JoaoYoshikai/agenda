<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\createTarefaModel;//Importar a classe que eu quero utilizar

class createTarefa extends Controller
{
    public function index(){
        //$dados = createTarefaModel::all();
        
        return view('paginas.addTarefas');
    }//fim do metodo


    public function store(Request $request)
    {
        $nomeTarefa = $request->input('nomeTarefa');
        $descTarefa = $request->input('descTarefa');
        $dataTarefa = $request->input('dataTarefa');
        
        $model = new createTarefaModel();
        $model->nomeTarefa = $nomeTarefa;
        $model->descTarefa = $descTarefa;
        $model->dataTarefa = $dataTarefa;
        $model->save();//Armazenar os dados no DB

        return redirect('/addtarefas');

    }//fim do método store

    public function consultar(){
        $dados = createTarefaModel::all();
        //dd($dados);
        return view('paginas.consultar', compact('dados'));
    }//fim do metodo

}//fim da classe