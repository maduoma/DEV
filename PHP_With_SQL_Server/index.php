
<?php
// $serverName = "BNY-L-2101\SQLEXPRESS" //serverName\instanseName
// $connectionInfo = array("Database"=>"PHP_MSSQL");
// $conn =sqlsrv_connect($serverName, $connectionInfo);

// if($conn) {
//     echo "Connection established.<br />";
// } else {
//     echo "Connection failed.<br />";
//     die(print_r(sqlsrv_errors(), true));
// }
//================================================================================================================================
// $host = 'localhost'; // URL to the server
// $user = 'root'; // Username (xampp = root)
// $pw = ''; // Password (xampp = )
// $dbname = 'database'; // The name of your database
// $dsn = "mysql:host=$host;dbname=$dbname";
// $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']; // If you want to use utf-8 use this line

// $db = new PDO($dsn, $user, $pw, $options); // Database Object
// $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Use this if you want an associate array
// // $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); Use this if you want an indexed array

// $qry = 'select * from table;'; // Your query
// $result = $db -> query($qry); // execute query

// while ($row = $result -> fetch()) {
//     $id = $row[/*column-name*/];
// }
//=====================================================================================================================================
$servername = "localhost\SQLEXPRESS";
$username = "";
$password = "";
$database = "PHP_MSSQL";
$port = "51525"; // May not be required

// This requires ODBC Driver 17 for SQL Server installation to be able to work
// $database = "AdventureWorks";
// $conn = new PDO( "sqlsrv:server=(local) ; Database = $database", "", "");
// $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
// $conn->setAttribute( PDO::SQLSRV_ATTR_QUERY_TIMEOUT, 1 );

// $query = 'select * from Person.ContactType';

// // simple query
// $stmt = $conn->query( $query );
// while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
//    print_r( $row['Name'] ."\n" );
// }

// echo "\n........ query for a column ............\n";

// // query for one column
// $stmt = $conn->query( $query, PDO::FETCH_COLUMN, 1 );
// while ( $row = $stmt->fetch() ){
//    echo "$row\n";
// }

// echo "\n........ query with a new class ............\n";
// $query = 'select * from HumanResources.Department order by GroupName';
// // query with a class
// class cc {
//    function __construct( $arg ) {
//       echo "$arg";
//    }

//    function __toString() {
//       return $this->DepartmentID . "; " . $this->Name . "; " . $this->GroupName;
//    }
// }

// $stmt = $conn->query( $query, PDO::FETCH_CLASS, 'cc', array( "arg1 " ));

// while ( $row = $stmt->fetch() ){
//    echo "$row\n";
// }

// echo "\n........ query into an existing class ............\n";
// $c_obj = new cc( '' );
// $stmt = $conn->query( $query, PDO::FETCH_INTO, $c_obj );
// while ( $stmt->fetch() ){
//    echo "$c_obj\n";
// }

// $stmt = null;
//=====================================================================================================================================
//This is working
// $db = new PDO("sqlsrv:Server=YouAddress;Database=YourDatabase", "Username", "Password");
// $db = new PDO("sqlsrv:Server=BNY-L-2101\SQLEXPRESS;Database=PHP_MSSQL", "", "");
// if ($db) {
//     echo "Connection to MSSQL Server established.<br />";
// } else {
//     echo "Connection to MSSQL Server failed.<br />";
// }
//=====================================================================================================================================
// This is working
// try {
//     $conn = new PDO("sqlsrv:server=$servername,$port;Database=$database;ConnectionPooling=0", $username, $password);
//     if ($conn) {
//         echo "Connection to MSSQL Server established.<br />";
//     }
// } catch (PDOException $e) {
//     echo "Error connecting to SQL Server:" . $e->getMessage() . "\n";
//     exit;
// }
//==========================================================================
//This is working
try
{

    $conn = new PDO("sqlsrv:Server=$servername;Database=$database;ConnectionPooling=0", "", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $e->getMessage();

}
