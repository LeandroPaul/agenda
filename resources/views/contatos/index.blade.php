<x-layout title="Listar Contatos">
    <a href="{{route('contatos.create')}}" class="btn btn-primary mb-2">adicionar <i class="fa fa-plus" aria-hidden="true"></i></a>
     @isset($mensagemSucesso)
    <div class="alert alert-success">
         {{$mensagemSucesso}}
    </div>
    @endisset
    <ul class="list-group">
         @foreach ($contatos as $contato)
             <li class="list-group-item d-flex justify-content-between align-items-center">
                 {{$contato->nome}} 
                 
                 <span class="d-flex">
 
                 <a href="{{route('contatos.edit', $contato->id)}}" class="btn btn-primary btn-sm">
                     <i class="fas fa-edit"></i>
                 </a>
 
                 <form action="{{route('contatos.destroy', $contato->id)}}"
                     method="post" class="ml-2">
                     @csrf
                     <button class="btn btn-danger btn-sm">
                         <i class="fa fa-trash" aria-hidden="true"></i></button>
 
                 </form>
                 </span>
 
             </li>
         @endforeach  
    </ul> 
 </x-layout>