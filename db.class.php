<?php

class db{

    //HOST
    private $host = 'locahost';

    // USUARIO
    private $usuario = 'root';
    
    // SENHA
    private $senha = '';
    
    // BANCO DE DADOS
    private $database = 'twitter_clone';

    public function conecta_mysql(){

        mysqli_connect($this->host, $this->usuario,$this->senha, $this->database);

    }
}


?>