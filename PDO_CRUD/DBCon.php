<?php
//$serverName = "localhost\SQLEXPRESS";
///* Connect using Windows Authentication. */ /* Attempt to connect to MySQL database */
//try {
//    $con = new PDO("sqlsrv:server=$serverName ; Database=PHPMSSQL", "", "");
//    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    //echo "Connection successful!";
//} catch (Exception $e) {
//    die(print_r($e->getMessage()));
//}


//For PHP/MSSQL
class DBCon
{
    //private $server = "mysql:host=localhost;port=33061;dbname=php_mysql";
    //private $server = "sqlsrv:Server=BNY-L-2101\SQLEXPRESS;Database=PHP_MSSQL";
    private $server = "mssql:host=BNY-L-2101\SQLEXPRESS;dbname=PHP_MSSQL";
    private $user = "";
    private $pass = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function openConnection()
    {
        try {
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            echo "Connection successful!";
            return $this->con;

        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function closeConnection()
    {
        $this->con = null;
    }
}

$db = new DBCon();




//$servername = "localhost\SQLEXPRESS";
//$username = "";
//$password = "";
//$database = "PHP_MSSQL";
//$port = "51525"; // May not be required
//
//try
//{
//
//    $conn = new PDO("sqlsrv:Server=$servername;Database=$database;ConnectionPooling=0", "", "");
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//} catch (PDOException $e) {
//    $e->getMessage();
//
//}
//