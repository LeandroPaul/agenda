<x-layout title="Listar Contatos">
<a href="/contatos/criar" class="btn btn-primary mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach($contatos as $contato)
            <li class="list-group-item">{{$contato->nome}}</li>
        @endforeach
    </ul>
</x-layout>