<?php

class PDODBCon
{
    // private $server = "mssql:host=BNY-L-2101\SQLEXPRESS;dbname=PHP_MSSQL";
    private $host = 'BNY-L-2101\SQLEXPRESS';
    private $user = '';
    private $pass = '';
    private $dbn = 'PHPMSSQL';

    private $dbh;
    private $errmsg;


    public function __construct()
    {
        $dsn = "sqlsrv:host=" . $this->host . "; dbname=" . $this->dbn;
        $option = array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        try {
            // $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
            echo "Connection Successful!";

        } catch (PDOException $pdoException) {
            $this->errmsg = $pdoException->getMessage();
            echo $this->errmsg;
        }
    }
}

$db = new PDODBCon;