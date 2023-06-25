<?php
    include_once '../../MODEL/Empreiteira.php';
    include_once '../../BLL/BllEmpreiteira.php';

    $empreiteira = new \MODEL\Empreiteira(); 
   
    $empreiteira->setIdEmpreiteira($_POST['txtID']);
    $empreiteira->setNomeEmpreiteira($_POST['txtNome']);
    $empreiteira->setEnderecoEmpreiteira($_POST['txtEndereco']);
    $empreiteira->setTelefoneEmpreiteira($_POST['txtTelefone']);
    $empreiteira->setCnpjEmpreiteira($_POST['txtCnpj']);

    $bll = new \BLL\BllEmpreiteira();
    $bll->update($empreiteira);
   
    header("location: listarempreiteira.php");
?>