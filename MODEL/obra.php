<?php
    namespace MODEL; 

    class Obra{
        private ?int $id; 
        private ?string $descricao; 
        private ?int $id_empreiteira;
        private ?string $nome_empreiteira;
        private ?int $id_peao;
        private ?string $nome_peao;
        private ?int $id_peaoMestre;
        private ?string $nome_peaoMestre;
        private ?float $valorHora;
        private ?string $estado;

        public function __construct(){}

        public function getIdObra() {return $this->id;}
        public function getDescricaoObra(){return $this->descricao;}
        public function getIdEmpreiteiraObra(){return $this->id_empreiteira;}
        public function getNomeEmpreiteiraObra(){return $this->nome_empreiteira;}
        public function getIdPeaoObra(){return $this->id_peao;}
        public function getNomePeaoObra(){return $this->nome_peao;}
        public function getIdPeaoMestreObra(){return $this->id_peaoMestre;}
        public function getNomePeaoMestreObra(){return $this->nome_peaoMestre;}
        public function getValorHoraObra(){return $this->valorHora;}
        public function getEstadoObra(){return $this->estado;}

        public function setIdObra(int $id){$this->id = $id;}
        public function setDescricaoObra(string $descricao){$this->descricao = $descricao;}
        public function setIdEmpreiteiraObra(int $id_empreiteira){$this->id_empreiteira = $id_empreiteira;}
        public function setNomeEmpreiteiraObra(string $nome_empreiteira){$this->nome_empreiteira = $nome_empreiteira;}
        public function setIdPeaoObra(int $id_peao){$this->id_peao = $id_peao;}
        public function setNomePeaoObra(string $nome_peao){$this->nome_peao = $nome_peao;}
        public function setIdPeaoMestreObra(int $id_peaoMestre){$this->id_peaoMestre = $id_peaoMestre;}
        public function setNomePeaoMestreObra(string $nome_peaoMestre){$this->nome_peaoMestre = $nome_peaoMestre;}
        public function setValorHoraObra(float $valorHora){$this->valorHora = $valorHora;}
        public function setEstadoObra(string $estado){$this->estado = $estado;}
    }
?>