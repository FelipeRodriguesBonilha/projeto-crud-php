<?php
    use BLL\BllEmpreiteira;
    include_once '../../BLL/bllpeao.php';

    $id = $_GET['id'];

    $bll = new  \BLL\BllPeao();
    $peao = $bll->selectID($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Empreiteira</title>

    <link rel="stylesheet" href="stylepeao.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;1,400&display=swap" rel="stylesheet">
             
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="fundo">
            <form class="col s12">
                <p>Detalhes Peao</p>
                <h5><?php echo "ID: {$peao->getIdPeao()}"; ?></h5>
                <h5><?php echo "Nome: {$peao->getNomePeao()}"; ?></h5>
                <div class="botoes">
                    <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='editarpeao.php?id=' + <?php echo $peao->getIdPeao(); ?>">
                        <i class="material-icons">edit</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listarpeao.php'">
                        <i class="material-icons">arrow_back</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>