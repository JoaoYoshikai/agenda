<x-layout title="Formulário Cadastro">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .container-md{background-color:#011F26; color:whitesmoke; border-radius:10px}
            input{position: fixed; left: 240px}
            .container{margin-top: 50px;background-color:#025E73}
        </style>
    </head>
    <body>

        <form action="/cadastrar/salvar" method="POST">
            @csrf    
            <br>
                <div class="container-md" style=";padding: 10px 8px;">
                <h1 style="text-align:center; color: whitesmoke;">Cadastre-se na Agenda!</h1>

                <label>Usuário:</label>
                <input type="text" id="nome" name="nome" required/><br><br>
                
                <label>Senha:</label>
                <input type="password" id="senha" name="senha" required/><br><br>

                <button type="submit">Enviar</button>
        </form>
    </body>
    </html>
</x-layout>