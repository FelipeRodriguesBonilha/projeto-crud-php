<?php
    namespace BLL; 
    use DAL\DalUsuario; 
    include_once '/var/www/html/projeto-crud-php/DAL/dalusuario.php';
    
    class BllUsuario{
        public function selectUser(string $usuario){
            $dal = new \Dal\DalUsuario(); 
            return $dal->selectUser($usuario);
        }

        public function insertUser(\MODEL\Usuario $cadastro){
            $dal = new \DAL\DalUsuario(); 
            $dal->insertUser($cadastro);
        }
    }
?>