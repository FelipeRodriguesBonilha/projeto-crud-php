<?php
    include_once '../../MODEL/Obra.php';
    include_once '../../BLL/BllObra.php';

    $obra = new \MODEL\Obra(); 
   
    if(isset($_POST['txtID']) || isset($_POST['txtDescricao']) || isset($_POST['txtIdEmpreiteira']) || isset($_POST['txtIdPeao']) || isset($_POST['txtIdPeaoMestre']) || isset($_POST['txtValorHora']) || isset($_POST['txtEstado'])){
        $obra->setIdObra($_POST['txtID']);
        $obra->setDescricaoObra($_POST['txtDescricao']);
        $obra->setIdEmpreiteiraObra($_POST['txtIdEmpreiteira']);
        $obra->setIdPeaoObra($_POST['txtIdPeao']);
        $obra->setIdPeaoMestreObra($_POST['txtIdPeaoMestre']);
        $obra->setValorHoraObra($_POST['txtValorHora']);
        $obra->setEstadoObra($_POST['txtEstado']);
    }

    $bll = new \BLL\BllObra();
    $bll->update($obra);
   
    header("location: listarobra.php");
?>