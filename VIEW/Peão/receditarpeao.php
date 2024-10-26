<?php
    include_once '../../MODEL/peao.php';
    include_once '../../BLL/bllpeao.php';

    $peao = new \MODEL\Peao(); 
   
    $peao->setIdPeao($_POST['txtID']);
    $peao->setNomePeao($_POST['txtNome']);

    $bll = new \BLL\BllPeao();
    $bll->update($peao);
   
    header("location: listarpeao.php");
?>