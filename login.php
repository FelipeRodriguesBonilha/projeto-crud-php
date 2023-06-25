<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="logicalogin.php">
        <input id="user" type="text" name="usuario" class="validate">
        <label for="usuario">Usuário</label>
        <input id="password" type="text" name="senha" class="validate">
        <label for="senha">Senha</label>
        <button type="submit" name="action">Logar</button>
    </form>
</body>
</html>