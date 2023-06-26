<?php
    include_once '../../BLL/bllpeao.php';

    $id = $_GET['id'];

    $bll = new \BLL\BllPeao();
    $bll->delete($id);
   
    header("location: listarpeao.php");
?>