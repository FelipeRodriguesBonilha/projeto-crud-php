<?php
    include_once '../../BLL/bllobra.php';

    $id = $_GET['id'];

    $bll = new \BLL\BllObra();
    $bll->delete($id);
   
    header("location: listarobra.php");
?>