<?php
    namespace BLL; 
    use DAL\DalUsuario; 
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\DAL\dalusuario.php';
    
    class BllUsuario{
        public function selectUser(string $usuario){
            $dal = new \Dal\DalUsuario(); 
            return $dal->selectUser($usuario);
        }
    }
?>