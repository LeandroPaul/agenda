<x-layout title="Listar Contatos">
    <ul>
        @foreach($contatos as $contato)
        <li class='list-group-item'>{{$contato}}</li>
        @endforeach
    </ul>
</x-layout>