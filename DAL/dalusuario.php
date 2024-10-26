<?php

namespace DAL;

    include_once '/var/www/html/TrabalhoPHP2BCCT2/DAL/conexao.php';
    include_once '/var/www/html/TrabalhoPHP2BCCT2/MODEL/Usuario.php';


    class DalUsuario{
        public function selectUser(string $usuario){
            $sql = "select * from usuario WHERE usuario LIKE ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($usuario));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $usuario = new \MODEL\Usuario();

            if($linha != null){
                $usuario->setIdUsuario($linha['id']);
                $usuario->setUsuario($linha['usuario']);
                $usuario->setSenha($linha['senha']);
                $usuario->setEmail($linha['email']);
            }
            return $usuario;
        }

        public function insertUser(\MODEL\Usuario $cadastro){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO usuario (usuario, senha, email) VALUES (?, ?, ?)";
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $con->prepare($sql);
            $tabela = $query->execute(array($cadastro->getUsuario(), $cadastro->getSenha(), $cadastro->getEmail())); 
            $con = Conexao::desconectar();
            return $tabela;
        }
    }
?>