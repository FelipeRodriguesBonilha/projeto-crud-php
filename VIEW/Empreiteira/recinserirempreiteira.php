<?php
    use BLL\BllEmpreiteira;
    use MODEL\Empreiteira;
    include_once '../../MODEL/empreiteira.php';
    include_once '../../BLL/bllempreiteira.php';

    $empreiteira = new \MODEL\Empreiteira(); 
    
    if(isset($_POST['txtNome']) || isset($_POST['txtEndereco']) || isset($_POST['txtTelefone']) || isset($_POST['txtCnpj'])){
        $empreiteira->setNomeEmpreiteira($_POST['txtNome']);
        $empreiteira->setEnderecoEmpreiteira($_POST['txtEndereco']);
        $empreiteira->setTelefoneEmpreiteira($_POST['txtTelefone']);
        $empreiteira->setCnpjEmpreiteira($_POST['txtCnpj']);
        $bll = new \BLL\BllEmpreiteira(); 
        $bll->insert($empreiteira); 
    }

    header("location: listarempreiteira.php");
?>