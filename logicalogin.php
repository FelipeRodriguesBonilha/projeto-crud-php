<?php
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\BLL\bllusuario.php';
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\MODEL\usuario.php';

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    $bll = new \BLL\BllUsuario();

    $objUsuario = new \MODEL\Usuario();

    $objUsuario = $bll->selectUser($usuario);

    if($objUsuario != NULL) {
        if(md5($senha) == $objUsuario->getSenha()){
            session_start();
            $_SESSION['login'] = $objUsuario->getUsuario();
            header("location: telamenu.php");
        } else header("location: login.php");
    } else echo "usuário não encontrado";
?>