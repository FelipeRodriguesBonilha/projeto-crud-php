<?php
    namespace DAL;
    use PDO;

    class Conexao{
        private static $bdHost = 'localhost';
        private static $bdNome = 'obra';
        private static $bdUsuario = 'root';
        private static $bdSenha = '';

        private static $conectado = NULL;

        public function __construct(){
            die("A função init não é permitida"); 
        }

        public static function conectar(){
            if($this->conectado == NULL){
                try{
                    $this->$conectado = new \PDO("mysql:host=" . $this->$bdHost . ";dbname=" . $this->$bdNome, $this->$bdUsuario, $this->$bdSenha);
                }
                catch(\PDOException $exception){
                    die("Não foi possível concetar com Banco de Dados devido ao erro: " . $exception->getMessage());
                }
            }
            return conectado;
        }

        public static function desconectar(){
            $this->conectado = NULL;
        }
    }
?>