<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    public function index(){
        $contatos = [
            'Leandro',
            'Lidiane',
            'Noêmia',
            'Vânia',
        ]; 
        return view('contatos.index', ['contatos'=>$contatos]);
    }
}
