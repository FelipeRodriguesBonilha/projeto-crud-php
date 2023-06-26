<?php 
namespace MODEL; 

    class Usuario{
        private ?int $id; 
        private ?string $usuario; 
        private ?string $senha;
        private ?string $email;
        
        public function __construct(){}

        public function getIdUsuario(){return $this->id; }
        public function getUsuario(){return $this->usuario;}
        public function getSenha(){return $this->senha;}
        public function getEmail(){return $this->email;}
        
        public function setIdUsuario(int $id){$this->id = $id;}
        public function setUsuario(string $usuario){$this->usuario = $usuario;}
        public function setSenha(string $senha){$this->senha = $senha;}
        public function setEmail(string $email){$this->email = $email;}
    }
?>