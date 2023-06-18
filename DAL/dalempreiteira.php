<?php
    namespace DAL;

    use MODEL\Empreiteira;
    
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\MODEL\Empreiteira.php';

    class DalEmpreiteira{
        public function select(){
            $con = Conexao::conectar();
            $sql = 'select * from empreiteira';
            $tabela = $con->query($sql);
            $con = Conexao::desconectar();
            
            foreach($tabela as $registro){
                $empreiteira = new \MODEL\Empreiteira();

                $empreiteira->setIdEmpreiteira($registro['id']);
                $empreiteira->setNomeEmpreiteira($registro['nome']);
                $empreiteira->setEnderecoEmpreiteira($registro['endereco']);
                $empreiteira->setTelefoneEmpreiteira($registro['telefone']);
                $empreiteira->setCnpjEmpreiteira($registro['cnpj']);

                $listaEmpreiteira[] = $empreiteira;
            }
            return $listaEmpreiteira;
        }

        public function insert(\MODEL\Empreiteira $empreiteira){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO empreiteira (nome, endereco, telefone, cnpj) 
            VALUES ('{$empreiteira->getNomeEmpreiteira()}', '{$empreiteira->getEnderecoEmpreiteira()}','{$empreiteira->getTelefoneEmpreiteira()}', '{$empreiteira->getCnpjEmpreiteira()}');";
            //"INSERT INTO empreiteira (id, nome, endereco, telefone, cnpj), VALUES ('{$empreiteira->getIdEmpreiteira()}', '{$empreiteira->getNomeEmpreiteira()}',
                           //'{$empreiteira->getEnderecoEmpreiteira()}', '{$empreiteira->getTelefoneEmpreiteira()}, '{$empreiteira->getCnpjEmpreiteira()}');";
     
            $tabela = $con->query($sql); 
            $con = Conexao::desconectar();
            return $tabela;
        }
    }

?>