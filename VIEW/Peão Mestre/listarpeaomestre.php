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

    <link rel="stylesheet" href="listar.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
<h1>Listar Empreiteiras</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>TELEFONE</th>
            <th>CNPJ</th>
            <th>
                <button class="waves-effect waves-light btn black" type="submit" onclick="JavaScript:location.href='inserirempreiteira.php'">
                    Inserir
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
                <button class="waves-effect waves-light btn black" type="submit" onclick="JavaScript:location.href='detalhesempreiteira.php?id=' + <?php echo $empreiteira->getIdEmpreiteira(); ?>">
                    Detalhes
                </button>
                <button class="waves-effect waves-light btn black" onclick="JavaScript:location.href='editarempreiteira.php?id=' + <?php echo $empreiteira->getIdEmpreiteira(); ?>">
                    Editar
                </button>
                <button class="waves-effect waves-light btn black" type="submit" onclick="JavaScript:remover(<?php echo $empreiteira->getIdEmpreiteira(); ?>, '<?php echo $empreiteira->getNomeEmpreiteira(); ?>');">
                    Excluir
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