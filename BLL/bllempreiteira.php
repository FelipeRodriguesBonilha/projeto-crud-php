<?php
    namespace BLL; 
    use DAL\DalEmpreiteira;
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\DAL\dalempreiteira.php';
    
    class BllEmpreiteira{
        public function select(){
            $dal = new \DAL\DalEmpreiteira(); 
            return $dal->select();
        }

        public function insert(\MODEL\Empreiteira $empreiteira){
            $dal = new \DAL\DalEmpreiteira(); 
            $dal->insert($empreiteira);
        }
    }