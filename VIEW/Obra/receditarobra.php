<?php
    include_once '../../MODEL/Obra.php';
    include_once '../../BLL/BllObra.php';

    $obra = new \MODEL\Obra(); 
   
    if(isset($_POST['txtID']) || isset($_POST['txtDescricao']) || isset($_POST['txtIdEmpreiteira']) || isset($_POST['txtIdPeao']) || isset($_POST['txtIdPeaoMestre']) || isset($_POST['txtValorHora']) || isset($_POST['txtEstado'])){
        $obra->setIdObra($_POST['txtID']);
        $obra->setNomeEmpreiteira($_POST['txtDescricao']);
        $obra->setIdEmpreiteiraObra($_POST['txtIdEmpreiteira']);
        $obra->setIdPeaoObra($_POST['txtIdPeao']);
        $obra->setIdPeaoMestre($_POST['txtIdPeaoMestre']);
        $obra->setValorHora($_POST['txtValorHora']);
        $obra->setEstado($_POST['txtEstado']);
    }

    $bll = new \BLL\BllObra();
    $bll->update($obra);
   
    header("location: listarobra.php");
?>