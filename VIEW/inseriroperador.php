<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Empreiteira</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container center brown lighten-4 black-text col s12" id="container">
        <div>
            <br>
            <h3>Inserir Empreiteira</h3>
            <br>
        </div>
        <div class="row white">
            <div class="input-field col s7">
                <input id="nome" type="text">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s7">
                <input id="endereco" type="text">
                <label for="endereco">Endereço</label>
            </div>
            <div class="input-field col s7">
                <input id="telefone" type="text">
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s7">
                <input id="cnpj" type="text">
                <label for="cnpj">Cnpj</label>
            </div>
        </div>
        <div class="brown lighten-4 center col s12">
            <br>
            <button class="waves-effect waves-light btn black" type = "submit">
                Gravar <i class="material-icons">save</i>
            </button>
            <button class="waves-effect waves-light btn black" type = "reset">
                Limpar <i class="material-icons">clear_all</i>
            </button>
            <button class="waves-effect waves-light btn black" type = "button">
                Voltar <i class="material-icons">arrow_back</i>
            </button>
            <br>
            <br>
        </div>
    </div>
</body>
</html>