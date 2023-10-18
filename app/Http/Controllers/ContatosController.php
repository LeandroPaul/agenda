<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContatosController extends Controller
{
   public function index(){
        $contatos = DB::select('select * from contatos');
        return view('contatos.index', ['contatos'=>$contatos]);
   }

   public function create(){
        return view('contatos.create');
   }

   public function store(Request $request){
        $nome = $request->input('nome');
        DB::insert('insert into contatos(nome) values (?)', [$nome]);
        $contatos =  DB::select('select * from contatos');
        return view('contatos.index', ['contatos'=>$contatos]);
   }
}