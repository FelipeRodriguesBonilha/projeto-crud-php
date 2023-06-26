<?php
    use BLL\BllEmpreiteira;
    include_once '../../BLL/bllempreiteira.php';
    
    $bll = new \BLL\BllEmpreiteira();
    $listaEmpreiteira = $bll->select();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Listar Empreiteiras</title>

    <link rel="stylesheet" href="listarempreiteira.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <?php include_once '../../menu.php';?>
    <h1>Listar Empreiteiras</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>TELEFONE</th>
            <th>CNPJ</th>
            <th>
                <button class="waves-effect waves-light btn green" type="submit" onclick="JavaScript:location.href='inserirempreiteira.php'">
                    <i class="material-icons">add</i>
                </button>
            </th>
        </tr>
        <?php
            foreach($listaEmpreiteira as $empreiteira) {
        ?>
        <tr>
            <td><?php echo $empreiteira->getIdEmpreiteira(); ?></td>
            <td><?php echo $empreiteira->getNomeEmpreiteira(); ?></td>
            <td><?php echo $empreiteira->getEnderecoEmpreiteira(); ?></td>
            <td><?php echo $empreiteira->getTelefoneEmpreiteira(); ?></td>
            <td><?php echo $empreiteira->getCnpjEmpreiteira(); ?></td>
            <td>
                <button class="waves-effect waves-light btn blue" type="submit" onclick="JavaScript:location.href='detalhesempreiteira.php?id=' + <?php echo $empreiteira->getIdEmpreiteira(); ?>">
                    <i class="material-icons">assignment</i>
                </button>
                <button class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='editarempreiteira.php?id=' + <?php echo $empreiteira->getIdEmpreiteira(); ?>">
                    <i class="material-icons">edit</i>
                </button>
                <button class="waves-effect waves-light btn red" type="submit" onclick="JavaScript:remover(<?php echo $empreiteira->getIdEmpreiteira(); ?>, '<?php echo $empreiteira->getNomeEmpreiteira(); ?>');">
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
        if (confirm('Excluir a Empreiteira ' + nome + ' com ID = ' + id + '?')) {
            location.href = 'removerempreiteira.php?id=' + id;
        }
    }
</script>