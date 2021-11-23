<?php
//In the above snippet, notice that the DBMS is MySQL. However, if the DBMS changes to MS SQL Server, the main change will be the replacement of mysql with mssql

/*I changed my MySQL server port from 3306 to 33061, so I need to reflect it here to avoid it throwig errors. 
If I leave it at default port (3306), then there's no need to have $dbport line at all.*/
// $dbhost = 'localhost';
// $dbname = 'chat';
// $dbport='33061'; 
// $dbuser = 'root';
// $dbpassword = '';

// try {
//     $con = new PDO("mysql:dbname=$dbhost; port=$dbport; dbname=$dbname","$dbuser", "$dbpassword");
// }catch(PDOException $e){
//     echo "Error: " . $e->getMessage();
// }
// //============================================================================================================================


// //For SQL Server
// $servername = "BNY-L-2101\SQLEXPRESS";
// $username = "";
// $password = "";
// $database = "PHP_MSSQL";
// $port = "51525"; // May not be required

// //For MySQL
// $servername = "localhost";
// $username = "";
// $password = "";
// $database = "php_mysql";
// $port = "33061"; // May not be required

//For PHP/MySQL
// class DatabaseConnection
// {
//     private $server = "mysql:host=localhost;port=33061;dbname=php_mysql";
//     private $user = "root";
//     private $pass = "";
//     private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
//     protected $con;

//     public function openConnection()
//     {
//         try {
//             $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
//             return $this->con;

//         } catch (PDOException $e) {
//             echo "There is some problem in connection: " . $e->getMessage();
//         }
//     }
//     public function closeConnection()
//     {
//         $this->con = null;
//     }
// }

//For PHP/MSSQL
class DatabaseConnection
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



