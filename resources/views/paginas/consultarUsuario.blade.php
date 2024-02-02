<x-layout title="Consultar Usuário">
    <div class="container">
        @foreach($dados as $dado)
            <li class="list-group-item">{{$dado->nome}}</li>
            <li class="list-group-item">{{$dado->senha}}</li>
            <br><br>
        @endforeach
    </div>   
</x-layout>