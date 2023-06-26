<?php
    use BLL\BllObra;
    include_once '../../BLL/bllobra.php';
    
    $bll = new \BLL\BllObra();
    $listaObra = $bll->select();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Listar Obras</title>

    <link rel="stylesheet" href="listarobra.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php include_once '../../menu.php';?>
<h1>Listar Obras</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>DESCRIÇÃO</th>
            <th>NOME EMPREITEIRA</th>
            <th>NOME PEÃO</th>
            <th>NOME PEÃO MESTRE</th>
            <th>VALOR HORA</th>
            <th>STATUS</th>
            <th>
                <button class="waves-effect waves-light btn green" type="submit" onclick="JavaScript:location.href='inserirobra.php'">
                    <i class="material-icons">add</i>
                </button>
            </th>
        </tr>
        <?php
            foreach($listaObra as $obra){
        ?>
        <tr>
            <td><?php echo $obra->getIdObra(); ?></td>
            <td><?php echo $obra->getDescricaoObra(); ?></td>
            <td><?php echo $obra->getNomeEmpreiteiraObra(); ?></td>
            <td><?php echo $obra->getNomePeaoObra(); ?></td>
            <td><?php echo $obra->getNomePeaoMestreObra(); ?></td>
            <td><?php echo "R$" . number_format($obra->getValorHoraObra(), 2, ",", "."); ?></td>
            <td><?php echo $obra->getEstadoObra(); ?></td>
            <td>
                <button class="waves-effect waves-light btn blue" type="submit" onclick="JavaScript:location.href='detalhesobra.php?id=' + <?php echo $obra->getIdObra(); ?>">
                    <i class="material-icons">assignment</i>
                </button>
                <button class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='editarobra.php?id=' + <?php echo $obra->getIdObra(); ?>">
                    <i class="material-icons">edit</i>
                </button>
                <button class="waves-effect waves-light btn red" type="submit" onclick="JavaScript:remover(<?php echo $obra->getIdObra(); ?>);">
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
    function remover(id) {
        if (confirm('Excluir a Obra com ID = ' + id + '?')) {
            location.href = 'removerobra.php?id=' + id;
        }
    }
</script>