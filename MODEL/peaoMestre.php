<?php
    namespace MODEL; 

    class PeaoMestre{
        private ?int $id; 
        private ?string $nome; 

        public function __construct(){}

        public function getIdPeaoMestre() {return $this->id;}
        public function getNomePeaoMestre(){return $this->nome;}

        public function setIdPeaoMestre(int $id){$this->id = $id;}
        public function setNomePeaoMestre(int $nome){$this->nome = $nome;}
    }
?>