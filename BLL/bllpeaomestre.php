<?php
    namespace BLL; 
    use DAL\DalPeaoMestre;
    include_once '/var/www/html/TrabalhoPHP2BCCT2/DAL/dalpeaomestre.php';
    
    class BllPeaoMestre{
        public function select(){
            $dal = new \DAL\DalPeaoMestre(); 
            return $dal->select();
        }

        public function selectID (int $id){
            $dal = new \DAL\DalPeaoMestre(); 
            return $dal->selectID($id);
        }
        
        public function selectNome(string $nome){
            $dal = new \DAL\DalPeaoMestre();
            return $dal->selectNome($nome);
        }

        public function insert(\MODEL\PeaoMestre $peaomestre){
            $dal = new \DAL\DalPeaoMestre(); 
            $dal->insert($peaomestre);
        }
        
        public function update (\MODEL\PeaoMestre $peaomestre){
            $dal = new \DAL\DalPeaoMestre(); 
            $dal->update($peaomestre);
        }
 
         public function delete (int $id){
            $dal = new \DAL\DalPeaoMestre(); 
            $dal->delete($id);
        }
    }
?>