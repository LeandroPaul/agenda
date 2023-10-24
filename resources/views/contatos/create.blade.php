<x-layout title="Criar Contato">
    <form method="post" action="{{route('contatos.store')}}">
       @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control"/>
        </div>
        <button class="btn btn-primary">Salvar</button>
   </form>
</x-layout>