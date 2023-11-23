<?php

class mydb
{
    private $servidor = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'cnhhelp';
    public  $result;
    private $conexao;

    function __construct($qry)
    {
        $this->conexao = new mysqli($this->servidor, $this->username, $this->password, $this->dbname);
        $this->result = $this->conexao->query($qry);
    }
}