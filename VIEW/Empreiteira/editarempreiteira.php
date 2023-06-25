<?php
    use BLL\BllEmpreiteira;
    include_once '../../BLL/bllempreiteira.php';

    $id = $_GET['id'];

    $bll = new \BLL\BllEmpreiteira();
    $empreiteira = $bll->selectID($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empreiteira</title>

    <link rel="stylesheet" href="styleempreiteira.css">

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
            <form action="receditarempreiteira.php" method="POST" id="formeditarempreiteira" class="col s12">
                <p>Editar Empreiteira</p>
                <h5>ID: <?php echo $empreiteira->getIdEmpreiteira(); ?> </h5>
                <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                <div class="input-field col s6">
                    <input placeholder="Digite o nome da empreiteira" id="nome" type="text" name="txtNome" value="<?php echo $empreiteira->getNomeEmpreiteira() ?>">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o endereço da empreiteira" id="first_name" type="text" name="txtEndereco" value="<?php echo $empreiteira->getEnderecoEmpreiteira() ?>">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o telefone da empreiteira id="first_name" type="text" name="txtTelefone" value="<?php echo $empreiteira->getTelefoneEmpreiteira() ?>">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o cnpj da empreiteira" id="first_name" type="text" name="txtCnpj" value="<?php echo $empreiteira->getCnpjEmpreiteira() ?>">
                </div>
                <div class="botoes">
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listarempreiteira.php'">
                        Voltar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>