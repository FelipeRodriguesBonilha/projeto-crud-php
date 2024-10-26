<?php
    namespace BLL; 
    use DAL\DalEmpreiteira;
    include_once '/var/www/html/projeto-crud-php/DAL/dalempreiteira.php';
    
    class BllEmpreiteira{
        public function select(){
            $dal = new \DAL\DalEmpreiteira(); 
            return $dal->select();
        }

        public function selectID (int $id){
            $dal = new \DAL\DalEmpreiteira(); 
            return $dal->selectID($id);
        }
        
        public function selectNome(string $nome){
            $dal = new \DAL\DalEmpreiteira();
            return $dal->selectNome($nome);
        }

        public function insert(\MODEL\Empreiteira $empreiteira){
            $dal = new \DAL\DalEmpreiteira(); 
            $dal->insert($empreiteira);
        }
        
        public function update (\MODEL\Empreiteira $empreiteira){
            $dal = new \DAL\DalEmpreiteira(); 
            $dal->update($empreiteira);
        }
 
         public function delete (int $id){
            $dal = new \DAL\DalEmpreiteira(); 
            $dal->delete($id);
        }
    }
?>