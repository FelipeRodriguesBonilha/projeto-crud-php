<?php
    namespace DAL;

    use MODEL\PeaoMestre;
    
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\MODEL\peaomestre.php';

    class DalPeaoMestre{
        public function select(){
            $con = Conexao::conectar();
            $sql = 'select * from peaomestre';
            $tabela = $con->query($sql);
            $con = Conexao::desconectar();
            
            foreach($tabela as $registro){
                $peaomestre = new \MODEL\PeaoMestre();

                $peaomestre->setIdPeaoMestre($registro['id']);
                $peaomestre->setNomePeaoMestre($registro['nome']);
                $peaomestre->setQuantidadePeaoMestre($registro['quantidade']);

                $listaPeaoMestre[] = $peaomestre;
            }
            return $listaPeaoMestre;
        }

        public function selectID(int $id){
            $sql = "select * from peaomestre where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute(array($id));
            $registro = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $peaomestre = new \MODEL\PeaoMestre(); 
            $peaomestre->setIdPeaoMestre($registro['id']);
            $peaomestre->setNomePeaoMestre($registro['nome']);
            $peaomestre->setQuantidadePeaoMestre($registro['quantidade']);

            return $peaomestre;
        }

        public function selectNome(string $nome){
            $sql = "select * from peaomestre WHERE nome like %?% order by nome;";
  
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $tabela = $query->execute(array($nome));
                      
            $listaPeaoMestre = null;
            foreach($tabela as $registro){
                $peaomestre = new \MODEL\PeaoMestre();
        
                $peaomestre->setIdPeaoMestre($registro['id']);
                $peaomestre->setNomePeaoMestre($registro['nome']);
                $peaomestre->setQuantidadePeaoMestre($registro['quantidade']);

                $listaPeaoMestre[] = $peaomestre;
            }
            return $listaPeaoMestre;
        }
        
        public function insert(\MODEL\PeaoMestre $peaomestre){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO peaomestre (nome, quantidade) VALUES (?, ?)";
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($peaomestre->getNomePeaoMestre(), $peaomestre->getQuantidadePeaoMestre())); 
            $con = Conexao::desconectar();
            return $tabela;
        }

        public function update(\MODEL\PeaoMestre $peaomestre){
            $sql = "UPDATE peaomestre SET nome=?, quantidade=? WHERE id=?";

            $con = Conexao::conectar(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($peaomestre->getNomePeaoMestre(), $peaomestre->getQuantidadePeaoMestre(), $peaomestre->getIdPeaoMestre()));
            $con = Conexao::desconectar();
            return $tabela;
        }

        public function delete(int $id){
            $sql = "DELETE from peaomestre WHERE id=?";

            $con = Conexao::conectar(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }
    }

?>