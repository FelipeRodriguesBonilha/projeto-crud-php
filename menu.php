<?php
  session_start(); 
   if(!isset($_SESSION['login']))
       Header("Location: ../index.php");   
?> 


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Sistema Obras</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper black">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="\TrabalhoPHP2BCCT2\VIEW\Empreiteira\listarempreiteira.php">Empreiteira</a></li>
                <li><a href="\TrabalhoPHP2BCCT2\VIEW\Peão\listarpeao.php">Peão</a></li>
                <li><a href="\TrabalhoPHP2BCCT2\VIEW\Peão Mestre\listarpeaomestre.php">Peão Mestre</a></li>
                <li><a href="\TrabalhoPHP2BCCT2\VIEW\Obra\listarobra.php">Obra</a></li>
                <li><a href="\TrabalhoPHP2BCCT2\logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>