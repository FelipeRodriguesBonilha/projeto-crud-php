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
</head>
<body>
<h1>Listar Empreiteiras</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>TELEFONE</th>
            <th>CNPJ</th>
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
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>