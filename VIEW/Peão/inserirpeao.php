<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

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
            <form action="recinserirempreiteira.php" method="POST" id="forminserirempreiteira" class="col s12">
                <p>Inserir Empreiteira</p>
                <div class="input-field col s6">
                    <input placeholder="Digite o nome da empreiteira" id="nome" type="text" name="txtNome">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o endereço da empreiteira" id="first_name" type="text" name="txtEndereco">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o telefone da empreiteira" id="first_name" type="text" name="txtTelefone">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o cnpj da empreiteira" id="first_name" type="text" name="txtCnpj">
                </div>
                <div class="botoes">
                    <button class="waves-effect waves-light btn black" type="submit">
                        Gravar
                    </button>
                    <button class="waves-effect waves-light btn black" type="reset">
                        Limpar
                    </button>
                    <button class="waves-effect waves-light btn black" type="button" onclick="JavaScript:location.href='listarempreiteira.php'">
                        Voltar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>