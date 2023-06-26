<?php
    namespace MODEL; 

    class PeaoMestre{
        private ?int $id; 
        private ?string $nome;
        private ?int $quantidade;

        public function __construct(){}

        public function getIdPeaoMestre(){return $this->id;}
        public function getNomePeaoMestre(){return $this->nome;}
        public function getQuantidadePeaoMestre(){return $this->quantidade;}

        public function setIdPeaoMestre(int $id){$this->id = $id;}
        public function setNomePeaoMestre(string $nome){$this->nome = $nome;}
        public function setQuantidadePeaoMestre(string $quantidade){$this->quantidade = $quantidade;}
    }
?>