<?php
    namespace MODEL; 

    class Empreiteira{
        private ?int $id; 
        private ?string $nome; 
        private ?string $endereco; 
        private ?string $telefone;
        private ?string $cnpj;

        public function __construct(){}
        
        public function getIdEmpreiteira(){return $this->id;}
        public function getNomeEmpreiteira(){return $this->nome;}
        public function getEnderecoEmpreiteira(){return $this->endereco;}
        public function getTelefoneEmpreiteira(){return $this->telefone;}
        public function getCnpjEmpreiteira(){return $this->cnpj;}

        public function setIdEmpreiteira(int $id){$this->id = $id;}
        public function setNomeEmpreiteira(string $nome){$this->nome = $nome;}
        public function setEnderecoEmpreiteira(string $endereco){$this->endereco = $endereco;}
        public function setTelefoneEmpreiteira(string $telefone){$this->telefone = $telefone;}
        public function setCnpjEmpreiteira(string $cnpj){$this->cnpj = $cnpj;}
    }
?>