<?php
    namespace BLL; 
    use DAL\DalObra;
    use BLL\PeaoMestre;
    include_once '/var/www/html/projeto-crud-php/DAL/dalobra.php';
    include_once '/var/www/html/projeto-crud-php/BLL/bllpeaomestre.php';
    include_once '/var/www/html/projeto-crud-php/MODEL/peaomestre.php';
    
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

            $bllPeaoMestre = new \BLL\BllPeaoMestre(); 
            $peaomestre = new \MODEL\PeaoMestre();
            $peaomestre = $bllPeaoMestre->selectID($obra->getIdPeaoMestreObra());

            $novoValor = $peaomestre->getQuantidadePeaoMestre() + 1;
            $peaomestre->setQuantidadePeaoMestre($novoValor);
            $bllPeaoMestre->update($peaomestre);

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