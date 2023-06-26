<?php
    include_once '../../MODEL/peaomestre.php';
    include_once '../../BLL/bllpeaomestre.php';

    $peaomestre = new \MODEL\PeaoMestre(); 
   
    $peaomestre->setIdEmpreiteira($_POST['txtID']);
    $peaomestre->setNomeEmpreiteira($_POST['txtNome']);

    $bll = new \BLL\BllPeaoMestre();
    $bll->update($peaomestre);
   
    header("location: listarpeaomestre.php");
?>