<?php
    namespace DAL;

    use MODEL\Empreiteira;
    
    include_once 'conexao.php';
    include_once '/var/www/html/TrabalhoPHP2BCCT2/MODEL/empreiteira.php';

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

        public function selectID(int $id){
            $sql = "select * from empreiteira where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute(array($id));
            $registro = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $empreiteira = new \MODEL\Empreiteira(); 
            $empreiteira->setIdEmpreiteira($registro['id']);
            $empreiteira->setNomeEmpreiteira($registro['nome']);
            $empreiteira->setEnderecoEmpreiteira($registro['endereco']);
            $empreiteira->setTelefoneEmpreiteira($registro['telefone']);
            $empreiteira->setCnpjEmpreiteira($registro['cnpj']);

            return $empreiteira;
        }

        public function selectNome(string $nome){
            $sql = "select * from empreiteira WHERE nome like %?% order by nome;";
  
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $tabela = $query->execute(array($nome));
                      
            $listaEmpreiteira = null;
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
            VALUES (?, ?, ?, ?)";
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($empreiteira->getNomeEmpreiteira(), $empreiteira->getEnderecoEmpreiteira(), $empreiteira->getTelefoneEmpreiteira(), $empreiteira->getCnpjEmpreiteira())); 
            $con = Conexao::desconectar();
            return $tabela;
        }

        public function update(\MODEL\Empreiteira $empreiteira){
            $sql = "UPDATE empreiteira SET nome=?, endereco=?, telefone=?, cnpj=? WHERE id=?";

            $con = Conexao::conectar(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($empreiteira->getNomeEmpreiteira(), $empreiteira->getEnderecoEmpreiteira(), $empreiteira->getTelefoneEmpreiteira(), $empreiteira->getCnpjEmpreiteira(), $empreiteira->getIdEmpreiteira()));
            $con = Conexao::desconectar();
            return $tabela;
        }

        public function delete(int $id){
            $sql = "DELETE from empreiteira WHERE id=?";

            $con = Conexao::conectar(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }
    }

?>