<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Contato;

class ContatosController extends Controller
{
    public function index(Request $req){        
        $contatos = Contato::all();
        $mensagemSucesso = $req->session()->get('mensagem.sucesso');
        return view('contatos.index')
        ->with('contatos', $contatos)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function capturaParametro(Request $req){
        echo $req->query('nome');
        echo $req->query('sobreNome');

    }

    public function create(){
        return view('contatos.create');
    }

    public function store(Request $req){        
        #$serie = new Serie;
        #$serie->nome =$req->input('nome'); 
        #$serie->save();
        $nomeContato =  $req->input('nome');     
        Contato::create($req->all());
        $series = Contato::all();
        return to_route('contatos.index')->with('mensagem.sucesso', 
        "Contato $nomeContato inserida com sucesso");     
    }

    public function destroy(Request $req){
        $id = $req->contato;
        $contato = Contato::find($id);
        $nomeContato = $contato->nome;
        $contato->delete();
        return to_route('contatos.index')->with('mensagem.sucesso', 
        "contato $nomeContato removida com sucesso");
    }

    public function edit(Request $req){
        $id = $req->contato;
        $contato = Contato::find($id);
        return view('contatos.edit')->with('contato', $contato);
    }

    public function update(Request $req){
        $id = $req->input('id');     
        $contato = Contato::find($id);
        $contato->nome = $req->input('nome');        
        $contato->update();
        return to_route('contatos.index')->with('mensagem.sucesso', 
        "contato $contato->nome atualizada com sucesso");
    }
}
