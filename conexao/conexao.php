<?php

class conexao{
    public static $instance;

    private function __construct(){
        //criar a funcionalidade - instanciar 
    }

    private static function getConexao(){
        if(!isset(self::$instance)){
            self::$instance=new PDO('mysql:host=localhost;dbname=crud','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES UTF8"));
        }
    }
}

?>