<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Peão</title>

    <link rel="stylesheet" href="stylepeao.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;1,400&display=swap" rel="stylesheet">
        
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="fundo">
            <form action="recinserirpeao.php" method="POST" id="forminserirpeao" class="col s12">
                <p>Inserir Peao</p>
                <div class="input-field col s6">
                    <input placeholder="Digite o nome do peão" id="nome" type="text" name="txtNome" required minlength="2">
                </div>
                <div class="botoes">
                    <button class="waves-effect waves-light btn green" type="submit">
                        <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn orange" type="reset">
                        <i class="material-icons">clear</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listarpeao.php'">
                        <i class="material-icons">arrow_back</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="validacaopeao.js"></script>
</body>
</html>