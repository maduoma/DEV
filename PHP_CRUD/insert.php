<?php
include_once 'DatabaseConnection.php';

try
{
    $database = new DatabaseConnection();
    $db = $database->openConnection();

    // inserting data into create table using prepare statement to prevent from sql injections
    $stm = $db->prepare("INSERT INTO student (ID,name,email) VALUES ( :id, :name, :email)");

    // inserting a record
    $stm->execute(array(':id' => 0, ':name' => 'Maduabughichi Achilefu', ':email' => 'madu@gmail.com'));
    echo "New record created successfully";

} catch (PDOException $e) {
    echo "There is some problem in connection: " . $e->getMessage();
}
