<?php
    namespace BLL; 
    use DAL\DalObra;
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\DAL\dalobra.php';
    
    class BllObra{
        public function select(){
            $dal = new \DAL\DalObra(); 
            return $dal->select();
        }

        public function selectID(int $id){
            $dal = new \DAL\DalObra(); 
            return $dal->selectID($id);
        }
        
        public function selectNome(string $nome){
            $dal = new \DAL\DalObra();
            return $dal->selectNome($nome);
        }

        public function insert(\MODEL\Obra $obra){
            $dal = new \DAL\DalObra(); 
            $dal->insert($obra);
        }
        
        public function update(\MODEL\Obra $obra){
            $dal = new \DAL\DalObra(); 
            $dal->update($obra);
        }
 
         public function delete(int $id){
            $dal = new \DAL\DalObra(); 
            $dal->delete($id);
        }
    }
?>