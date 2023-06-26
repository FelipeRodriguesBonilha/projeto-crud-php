<?php
    include_once '../../MODEL/Peao.php';
    include_once '../../BLL/BllPeao.php';

    $peao = new \MODEL\Peao(); 
   
    $peao->setIdPeao($_POST['txtID']);
    $peao->setNomePeao($_POST['txtNome']);

    $bll = new \BLL\BllPeao();
    $bll->update($peao);
   
    header("location: listarpeao.php");
?>