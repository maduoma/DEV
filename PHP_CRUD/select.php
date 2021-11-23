<?php
include_once 'DatabaseConnection.php';

try
{
    $database = new DatabaseConnection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM student " ;

    foreach ($db->query($sql) as $row) 
    {
        echo " ID: ".$row['ID'] . "<br>";
        echo " Name: ".$row['name'] . "<br>";
        echo " Email: ".$row['email'] . "<br>";
    }
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}

?>