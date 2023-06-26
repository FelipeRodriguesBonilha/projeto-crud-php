<?php
    use BLL\BllPeaoMestre;
    include_once '../../BLL/bllpeaomestre.php';

    $id = $_GET['id'];

    $bll = new \BLL\BllPeaoMestre();
    $peaomestre = $bll->selectID($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Peão Mestre</title>

    <link rel="stylesheet" href="stylepeaomestre.css">

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
            <form action="receditarpeaomestre.php" method="POST" id="formeditarpeaomestre" class="col s12">
                <p>Editar Peão Mestre</p>
                <h5>ID: <?php echo $peaomestre->getIdPeaoMestre(); ?> </h5>
                <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                <div class="input-field col s6">
                    <input placeholder="Digite o nome do peão mestre" id="nome" type="text" name="txtNome" value="<?php echo $peaomestre->getNomePeaoMestre(); ?>">
                </div>
                <div class="botoes">
                    <button class="waves-effect waves-light btn green" type="submit">
                        <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn orange" type="reset">
                        <i class="material-icons">clear</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listarpeaomestre.php'">
                        <i class="material-icons">arrow_back</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>