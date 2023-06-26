<?php
    include_once '../../BLL/bllpeaomestre.php';

    $id = $_GET['id'];

    $bll = new \BLL\BllPeaoMestre();
    $bll->delete($id);
   
    header("location: listarpeaomestre.php");
?>