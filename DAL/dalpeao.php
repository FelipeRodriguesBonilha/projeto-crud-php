<?php
    namespace DAL;

    use MODEL\Peao;
    
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\MODEL\peao.php';

    class DalPeao{
        public function select(){
            $con = Conexao::conectar();
            $sql = 'select * from peao';
            $tabela = $con->query($sql);
            $con = Conexao::desconectar();
            
            foreach($tabela as $registro){
                $peao = new \MODEL\Peao();

                $peao->setIdPeao($registro['id']);
                $peao->setNomePeao($registro['nome']);

                $listaPeao[] = $peao;
            }
            return $listaPeao;
        }

        public function selectID(int $id){
            $sql = "select * from peao where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute(array($id));
            $registro = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $peao = new \MODEL\Peao(); 
            $peao->setIdPeao($registro['id']);
            $peao->setNomePeao($registro['nome']);

            return $peao;
        }

        public function selectNome(string $nome){
            $sql = "select * from peao WHERE nome like %?% order by nome;";
  
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $tabela = $query->execute(array($nome));
                      
            $listaEmpreiteira = null;
            foreach($tabela as $registro){
                $peao = new \MODEL\Peao();
        
                $peao->setIdPeao($registro['id']);
                $peao->setNomePeao($registro['nome']);
        
                $listaPeao[] = $peao;
            }
            return $listaPeao;
        }
        
        public function insert(\MODEL\Peao $peao){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO peao (nome) 
            VALUES (?)";
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($peao->getNomePeao())); 
            $con = Conexao::desconectar();
            return $tabela;
        }

        public function update(\MODEL\Peao $peao){
            $sql = "UPDATE peao SET nome=? WHERE id=?;";

            $con = Conexao::conectar(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($peao->getNomePeao(), $peao->getIdPeao()));
            $con = Conexao::desconectar();
            return $tabela;
        }

        public function delete(int $id){
            $sql = "DELETE from peao WHERE id=?;";

            $con = Conexao::conectar(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }
    }

?>