<?php
    use BLL\BllUsuario;
    use MODEL\Usuario;
    include_once './MODEL/usuario.php';
    include_once './BLL/bllusuario.php';

    $cadastro = new \MODEL\Usuario(); 
    
    if(isset($_POST['txtUsuario']) || isset($_POST['txtSenha']) || isset($_POST['txtEmail'])){
        if($_POST['txtUsuario'] != NULL && $_POST['txtSenha'] != NULL && $_POST['txtEmail'] != NULL){
            $cadastro->setUsuario($_POST['txtUsuario']);
            $cadastro->setSenha(md5($_POST['txtSenha']));
            $cadastro->setEmail($_POST['txtEmail']);
        } else echo "Preencha os campos para se cadastrar";
    }

    $bll = new \BLL\BllUsuario(); 
    $bll->insertUser($cadastro);

    header("location: login.php");
?>