<?php
    use BLL\BllPeaoMestre;
    include_once '../../BLL/bllpeaomestre.php';
    
    $bll = new \BLL\BllPeaoMestre();
    $listaPeaoMestre = $bll->select();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Listar Peões Mestres</title>

    <link rel="stylesheet" href="listarpeaomestre.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php include_once '../../menu.php';?>
<h1>Listar Peões Mestres</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>QUANTIDADE</th>
            <th>
                <button class="waves-effect waves-light btn green" type="submit" onclick="JavaScript:location.href='inserirpeaomestre.php'">
                    <i class="material-icons">add</i>
                </button>
            </th>
        </tr>
        <?php
            foreach($listaPeaoMestre as $peaomestre) {
        ?>
        <tr>
            <td><?php echo $peaomestre->getIdPeaoMestre(); ?></td>
            <td><?php echo $peaomestre->getNomePeaoMestre(); ?></td>
            <td><?php echo $peaomestre->getQuantidadePeaoMestre(); ?></td>
            <td>
                <button class="waves-effect waves-light btn blue" type="submit" onclick="JavaScript:location.href='detalhespeaomestre.php?id=' + <?php echo $peaomestre->getIdPeaoMestre(); ?>">
                    <i class="material-icons">assignment</i>
                </button>
                <button class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='editarpeaomestre.php?id=' + <?php echo $peaomestre->getIdPeaoMestre(); ?>">
                    <i class="material-icons">edit</i>
                </button>
                <button class="waves-effect waves-light btn red" type="submit" onclick="JavaScript:remover(<?php echo $peaomestre->getIdPeaoMestre(); ?>, '<?php echo $peaomestre->getNomePeaoMestre(); ?>');">
                    <i class="material-icons">delete</i>
                </button>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>

<script>
    function remover(id, nome) {
        if (confirm('Excluir o Peão Mestre ' + nome + ' com ID = ' + id + '?')) {
            location.href = 'removerpeaomestre.php?id=' + id;
        }
    }
</script>