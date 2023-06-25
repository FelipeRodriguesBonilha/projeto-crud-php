<?php
    use BLL\BllEmpreiteira;
    include_once '../../BLL/bllempreiteira.php';

    $id = $_GET['id'];

    $bll = new  \BLL\BllEmpreiteira();
    $empreiteira = $bll->selectID($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Empreiteira</title>

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
            <form class="col s12">
                <p>Detalhes Empreiteira</p>
                <h5><?php echo "ID: {$empreiteira->getIdEmpreiteira()}"; ?></h5>
                <h5><?php echo "Nome: {$empreiteira->getNomeEmpreiteira()}"; ?></h5>
                <h5><?php echo "Endereço: {$empreiteira->getEnderecoEmpreiteira()}"; ?></h5>
                <h5><?php echo "Telefone: {$empreiteira->getTelefoneEmpreiteira()}"; ?></h5>
                <h5><?php echo "Cnpj: {$empreiteira->getCnpjEmpreiteira()}"; ?></h5>
                <div class="botoes">
                    <button class="waves-effect waves-light btn black" type="button" onclick="JavaScript:location.href='editarempreiteira.php?id=' + <?php echo $empreiteira->getIdEmpreiteira(); ?>">
                        Editar
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