<?php

namespace DAL;

    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\TrabalhoPHP2BCCT2\MODEL\Usuario.php';


    class DalUsuario{
        public function selectUser(string $usuario)
        {
            $sql = "select * from usuario where usuario LIKE ?;";
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
    }
?>