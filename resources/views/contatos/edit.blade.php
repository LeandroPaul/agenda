<x-layout title="Editar Contato">
    <form method="post" action="{{route('contatos.update')}}">
       @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$contato->nome}}"class="form-control"/>
            <input type="hidden" name="id" id="id" value="{{$contato->id}}"class="form-control"/>
        </div>
        <button class="btn btn-primary">Atualizar</button>
   </form>   
</x-layout>