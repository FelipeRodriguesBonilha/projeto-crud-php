<?php
    include_once '../../BLL/bllempreiteira.php';

    $id = $_GET['id'];

    $bll = new \BLL\BllEmpreiteira();
    $bll->delete($id);
   
    header("location: listarempreiteira.php");
?>