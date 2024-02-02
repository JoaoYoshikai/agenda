<x-layout title="addTarefas">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar tarefas</title>
        <style>
            .container-md{background-color:#011F26; color: whitesmoke; border-radius:10px; margin-bottom: 20px;}
            input{position: fixed; left:330px}
            .container{margin-top:30px; background-color: #025E73; border-radius: 10px}
        </style>
    </head>
    <body>
    <form action="/addtarefas/salvar" method="POST">
        @csrf 
        <div class="container">
            <h1 style="text-align:center; margin-bottom:0; color:whitesmoke;">Adicione novas tarefas!</h1>    
            <div class="container-md" style="margin-top: 10px;padding: 10px 8px;">
                    <label>Nome da Tarefa:</label>
                    <input type="text" id="nomeTarefa" name="nomeTarefa" required/><br><br>
                        
                    <label>Descrição da tarefa:</label>
                    <input type="text" id="descTarefa" name="descTarefa" required/><br><br>
                    
                    <label>Data de entrega:</label>
                    <input type="date" id="dataTarefa" name="dataTarefa" required/><br><br>

                    <button type="submit">Enviar</button>
            </div>    
        </div>
    </form>    
    </body>
    </html>
</x-layout>