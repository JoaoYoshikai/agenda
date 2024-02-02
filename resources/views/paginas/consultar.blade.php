<x-layout title="Consultar Tarefas">
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultar tarefas</title>
        <style>
            .col{background-color:#011F26;color: whitesmoke; padding: 20px 16px; margin-bottom: 40px border:solid 1px; border-color:#025E73; }
        </style>
    </head>
    <body>
    <div class="container" style="text-align: center; background-color:#025E73; margin-top: 50px; border-radius: 10px">
        <h1 style="color:whitesmoke;">Tarefas agendadas:</h1>    
        @foreach($dados as $dado)
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        <li class="list-group-item">Nome: {{$dado->nomeTarefa}}</li>
                    </div>
                    <div class="col">
                        <li class="list-group-item">Descrição: {{$dado->descTarefa}}</li>
                    </div>
                    <div class="col">
                        <li class="list-group-item">Data de entrega: {{$dado->dataTarefa}}</li>
                    </div>
                    <br><br><br>
                </div>
            </div>
            @endforeach
        </div>   
    </body>
    </html>
</x-layout>





























