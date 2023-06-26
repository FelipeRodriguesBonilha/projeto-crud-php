<?php
    use BLL\BllPeaoMestre;
    use MODEL\PeaoMestre;
    include_once '../../MODEL/peaomestre.php';
    include_once '../../BLL/bllpeaomestre.php';

    $peaomestre = new \MODEL\PeaoMestre(); 
    
    if(isset($_POST['txtNome'])){
        $peaomestre->setNomePeaoMestre($_POST['txtNome']);
        $peaomestre->setQuantidadePeaoMestre(0);
        $bll = new \BLL\BllPeaoMestre();
        $bll->insert($peaomestre);
    }

    header("location: listarpeaomestre.php");
?>