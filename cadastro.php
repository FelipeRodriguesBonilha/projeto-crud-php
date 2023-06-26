<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="usuario.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;1,400&display=swap" rel="stylesheet">
             
</head>
<body>
    <div class="container">
        <div class="fundo">
            <form action="recinserirusuario.php" method="POST" id="forminserirusuario" class="col s12">
                <p>Cadastrar Usuário</p>
                <div class="input-field col s6">
                    <input placeholder="Digite o usuario" id="nome" type="text" name="txtUsuario">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite a senha" id="first_name" type="text" name="txtSenha">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o e-mail" id="first_name" type="text" name="txtEmail">
                </div>
                <div class="botoes">
                    <button class="waves-effect waves-light btn green" type="submit">
                        Cadastrar
                    </button>
                    <button class="waves-effect waves-light btn orange" type="reset">
                        Limpar
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='index.php'">
                        Voltar
                    </button>
                </div>
                <h5><a href="login.php">Logar-se</a></h5>
            </form>
        </div>
    </div>
</body>
</html>