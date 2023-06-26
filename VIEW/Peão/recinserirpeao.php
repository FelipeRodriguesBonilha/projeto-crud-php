<?php
    use BLL\BllPeao;
    use MODEL\Peao;
    include_once '../../MODEL/peao.php';
    include_once '../../BLL/bllpeao.php';

    $peao = new \MODEL\Peao(); 
    
    if(isset($_POST['txtNome'])){
        $peao->setNomePeao($_POST['txtNome']);
        $bll = new \BLL\BllPeao();
        $bll->insert($peao); 
    }

    header("location: listarpeao.php");
?>