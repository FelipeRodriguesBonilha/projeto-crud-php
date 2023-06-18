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
            if(self::$conectado == NULL){
                try{
                    self::$conectado = new \PDO("mysql:host=" . self::$bdHost . ";dbname=" . self::$bdNome, self::$bdUsuario, self::$bdSenha);
                }
                catch(\PDOException $exception){
                    die("Não foi possível concetar com Banco de Dados devido ao erro: " . $exception->getMessage());
                }
            }
            return self::$conectado;
        }

        public static function desconectar(){
            self::$conectado = NULL;
        }
    }
?>