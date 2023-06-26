<?php
    namespace BLL; 
    use DAL\DalPeao;
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\DAL\dalpeao.php';
    
    class BllPeao{
        public function select(){
            $dal = new \DAL\DalPeao(); 
            return $dal->select();
        }

        public function selectID (int $id){
            $dal = new \DAL\DalPeao(); 
            return $dal->selectID($id);
        }
        
        public function selectNome(string $nome){
            $dal = new \DAL\DalPeao();
            return $dal->selectNome($nome);
        }

        public function insert(\MODEL\Peao $peao){
            $dal = new \DAL\DalPeao(); 
            $dal->insert($peao);
        }
        
        public function update (\MODEL\Peao $peao){
            $dal = new \DAL\DalPeao(); 
            $dal->update($peao);
        }
 
         public function delete (int $id){
            $dal = new \DAL\DalPeao(); 
            $dal->delete($id);
        }
    }
?>