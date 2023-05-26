<?php
    namespace MODEL; 

    class Obra{
        private ?int $id; 
        private ?string $descricao; 
        private ?Empreiteira $empreiteira;
        private ?Peao $peao;
        private ?PeaoMestre $peaoMestre;
        private ?float $valorHora;
        private ?string $status;

        public function __construct(){}

        public function getIdObra() {return $this->id;}
        public function getDescricaoObra(){return $this->descricao;}
        public function getEmpreiteiraObra(){return $this->empreiteira;}
        public function getPeaoObra(){return $this->peao;}
        public function getPeaoMestreObra(){return $this->peaoMestre;}
        public function getValorHoraObra(){return $this->valorHora;}
        public function getStatusObra(){return $this->status;}

        public function setIdObra(int $id){$this->id = $id;}
        public function setDescricaoObra(int $descricao){$this->descricao = $descricao;}
        public function setEmpreiteiraObra(Empreiteira $empreiteira){$this->empreiteira = $empreiteira;}
        public function setPeaoObra(Peao $peao){$this->peao = $peao;}
        public function setPeaoMestreObra(PeaoMestre $peaoMestre){$this->peaoMestre = $peaoMestre;}
        public function setValorHoraObra(float $valorHora){$this->valorHora = $valorHora;}
        public function setStatusObra(string $status){$this->status = $status;}
    }
?>