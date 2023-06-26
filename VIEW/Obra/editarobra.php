<?php
    use BLL\BllObra;
    include_once '../../BLL/bllobra.php';

    $id = $_GET['id'];

    $bll = new \BLL\BllObra();
    $obra = $bll->selectID($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Obra</title>

    <link rel="stylesheet" href="styleobra.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;1,400&display=swap" rel="stylesheet">
            
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="fundo">
            <form action="receditarobra.php" method="POST" id="formeditarobra" class="col s12">
                <p>Editar Obra</p>
                <h5>ID: <?php echo $obra->getIdObra(); ?> </h5>
                <input type="hidden" name="txtID" value="<?php echo $id; ?>">
                <div class="input-field col s6">
                    <input placeholder="Digite a descrição da obra" id="first_name" type="text" name="txtDescricao" value="<?php echo $obra->getDescricaoObra(); ?>">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o id da empreiteira da obra" id="first_name" type="text" name="txtIdEmpreiteira" value="<?php echo $obra->getIdEmpreiteiraObra(); ?>">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o id do peão da obra" id="first_name" type="text" name="txtIdPeao" value="<?php echo $obra->getIdPeaoObra(); ?>">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o id do peão mestre da obra" id="first_name" type="text" name="txtIdPeaoMestre" value="<?php echo $obra->getIdPeaoMestreObra(); ?>">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o valor da hora da obra" id="first_name" type="text" name="txtValorHora" value="<?php echo $obra->getValorHoraObra(); ?>">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Digite o status da obra" id="first_name" type="text" name="txtEstado" value="<?php echo $obra->getEstadoObra(); ?>">
                </div>
                <div class="botoes">
                    <button class="waves-effect waves-light btn green" type="submit">
                        <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn orange" type="reset">
                        <i class="material-icons">clear</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listarobra.php'">
                        <i class="material-icons">arrow_back</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>