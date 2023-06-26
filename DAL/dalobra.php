<?php
    namespace DAL;

    use MODEL\Obra;
    
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\MODEL\Obra.php';

    class DalObra{
        public function select(){
            $con = Conexao::conectar();
            $sql = 'select * from obra';
            $tabela = $con->query($sql);
            $con = Conexao::desconectar();
            
            foreach($tabela as $registro){
                $obra = new \MODEL\Obra();

                $obra->setIdObra($registro['id']);
                $obra->setDescricaoObra($registro['descricao']);

                $obra->setIdEmpreiteiraObra($registro['empreiteira']);
                
                $con = Conexao::conectar();
                $sqlEmpreiteira = 'select * from empreiteira WHERE id=?';
                $con = Conexao::conectar(); 
                $query = $con->prepare($sqlEmpreiteira);
                $query->execute(array($obra->getIdEmpreiteiraObra()));
                $registroEmpreiteira = $query->fetch(\PDO::FETCH_ASSOC);
                $con = Conexao::desconectar();

                $obra->setNomeEmpreiteiraObra($registroEmpreiteira['nome']);

                $obra->setIdPeaoObra($registro['peao']);
                
                $con = Conexao::conectar();
                $sqlPeao = 'select * from peao WHERE id=?';
                $con = Conexao::conectar(); 
                $query = $con->prepare($sqlPeao);
                $query->execute(array($obra->getIdPeaoObra()));
                $registroPeao = $query->fetch(\PDO::FETCH_ASSOC);
                $con = Conexao::desconectar();

                $obra->setNomePeaoObra($registroPeao['nome']);

                $obra->setIdPeaoMestreObra($registro['peaomestre']);
                
                $con = Conexao::conectar();
                $sqlPeaoMestre = 'select * from peaomestre WHERE id=?;';
                $con = Conexao::conectar(); 
                $query = $con->prepare($sqlPeaoMestre);
                $query->execute(array($obra->getIdPeaoMestreObra()));
                $registroPeaoMestre = $query->fetch(\PDO::FETCH_ASSOC);
                $con = Conexao::desconectar();

                $obra->setNomePeaoMestreObra($registroPeaoMestre['nome']);
                $obra->setValorHoraObra($registro['valorhora']); 
                $obra->setEstadoObra($registro['estado']);

                $listaObra[] = $obra;
            }
            return $listaObra;
        }

        public function selectID(int $id){
            $sql = "select * from obra where id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $registro = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $obra = new \MODEL\Obra();

            $obra->setIdObra($id);
            $obra->setDescricaoObra($registro['descricao']);
            $obra->setIdEmpreiteiraObra($registro['empreiteira']);
                
            $con = Conexao::conectar();
            $sqlEmpreiteira = 'select * from empreiteira WHERE id=?';
            $con = Conexao::conectar(); 
            $query = $con->prepare($sqlEmpreiteira);
            $query->execute(array($obra->getIdEmpreiteiraObra()));
            $registroEmpreiteira = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $obra->setNomeEmpreiteiraObra($registroEmpreiteira['nome']);

            $obra->setIdPeaoObra($registro['peao']);
                
            $con = Conexao::conectar();
            $sqlPeao = 'select * from peao WHERE id=?';
            $con = Conexao::conectar(); 
            $query = $con->prepare($sqlPeao);
            $query->execute(array($obra->getIdPeaoObra()));
            $registroPeao = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $obra->setNomePeaoObra($registroPeao['nome']);
            
            $obra->setIdPeaoMestreObra($registro['peaomestre']);
                
            $con = Conexao::conectar();
            $sqlPeaoMestre = 'select * from peaomestre WHERE id=?;';
            $con = Conexao::conectar(); 
            $query = $con->prepare($sqlPeaoMestre);
            $query->execute(array($obra->getIdPeaoMestreObra()));
            $registroPeaoMestre = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $obra->setNomePeaoMestreObra($registroPeaoMestre['nome']);

            $obra->setValorHoraObra($registro['valorhora']); 
            $obra->setEstadoObra($registro['estado']);

            return $obra;
        }

        public function selectNome(string $nome){
            $sql = "select * from obra WHERE descricao like %?% order by nome;";
  
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $tabela = $query->execute(array($nome));
                      
            $listaObra = null;
            foreach($tabela as $registro){
                $obra = new \MODEL\Obra();
        
                $obra->setIdObra($registro['id']);
                $obra->setDescricaoObra($registro['descricao']);
                $obra->setIdEmpreiteiraObra($registro['empreiteira']);
                $obra->setIdPeaoObra($registro['peao']);
                $obra->setIdPeaoMestreObra($registro['peaomestre']);
                $obra->setValorHoraObra($registro['valorhora']); 
                $obra->setEstadoObra($registro['estado']);  
        
                $listaObra[] = $obra; 
            }
            return $listaObra;
        }
        
        public function insert(\MODEL\Obra $obra){
            $con = Conexao::conectar();
            $sql = "INSERT INTO obra (descricao, empreiteira, peao, peaomestre, valorhora, estado) 
            VALUES (?, ?, ?, ?, ?, ?)";
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($obra->getDescricaoObra(), $obra->getIdEmpreiteiraObra(), $obra->getIdPeaoObra(), $obra->getIdPeaoMestreObra(), $obra->getValorHoraObra(), $obra->getEstadoObra())); 
            $con = Conexao::desconectar();
            return $tabela;
        }

        public function update(\MODEL\Obra $obra){
            $sql = "UPDATE obra SET descricao=?, empreiteira=?, peao=?, peaomestre=?, valorhora=?, estado=? WHERE id=?;";

            $con = Conexao::conectar(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($obra->getDescricaoObra(), $obra->getIdEmpreiteiraObra(), $obra->getIdPeaoObra(), $obra->getIdPeaoMestreObra(), $obra->getValorHoraObra(), $obra->getEstadoObra(), $obra->getIdObra()));
            $con = Conexao::desconectar();
            return $tabela;
        }

        public function delete(int $id){
            $sql = "DELETE from obra WHERE id=?";

            $con = Conexao::conectar(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }
    }

?>