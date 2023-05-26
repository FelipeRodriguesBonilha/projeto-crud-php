<?php
    namespace MODEL; 

    class Peao{
        private ?int $id; 
        private ?string $nome; 

        public function __construct(){}

        public function getIdPeao() {return $this->id;}
        public function getNomePeao(){return $this->nome;}

        public function setIdPeao(int $id){$this->id = $id;}
        public function setNomePeao(int $nome){$this->nome = $nome;}
    }
?>