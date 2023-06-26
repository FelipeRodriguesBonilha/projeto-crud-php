<?php
    use BLL\BllPeao;
    include_once '../../BLL/bllpeao.php';
    
    $bll = new \BLL\BllPeao();
    $listaPeao = $bll->select();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Listar Peões</title>

    <link rel="stylesheet" href="listarpeao.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php include_once '../../menu.php';?>
<h1>Listar Peões</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>
                <button class="waves-effect waves-light btn green" type="submit" onclick="JavaScript:location.href='inserirpeao.php'">
                    <i class="material-icons">add</i>
                </button>
            </th>
        </tr>
        <?php
            foreach($listaPeao as $peao) {
        ?>
        <tr>
            <td><?php echo $peao->getIdPeao(); ?></td>
            <td><?php echo $peao->getNomePeao(); ?></td>
            <td>
                <button class="waves-effect waves-light btn blue" type="submit" onclick="JavaScript:location.href='detalhespeao.php?id=' + <?php echo $peao->getIdPeao(); ?>">
                    <i class="material-icons">assignment</i>
                </button>
                <button class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='editarpeao.php?id=' + <?php echo $peao->getIdPeao(); ?>">
                    <i class="material-icons">edit</i>
                </button>
                <button class="waves-effect waves-light btn red" type="submit" onclick="JavaScript:remover(<?php echo $peao->getIdPeao(); ?>, '<?php echo $peao->getNomePeao(); ?>');">
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
        if (confirm('Excluir o Peão ' + nome + ' com ID = ' + id + '?')) {
            location.href = 'removerpeao.php?id=' + id;
        }
    }
</script>