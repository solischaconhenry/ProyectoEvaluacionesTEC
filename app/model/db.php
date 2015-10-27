<?php

class db {
    private $conexion;
    private $user = '';
    private $passwd = '';
    private $dbName = '';
    private $port = 5432;
    private $host = '';
    
    public function conectar()
    {
        if(!isset($this->conexion))
            {
                $strCnx = "host=$this->host "
                        . "port=$this->port "
                        . "dbname=$this->dbName "
                        . "user=$this->user "
                        . "password=$this->passwd";
                $this->conexion = pg_connect($strCnx) or die ("Error en la conexión de la base de datos: "+  $this->dbName);
            }
    } 
}
