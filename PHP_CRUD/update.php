<?php
include_once 'DatabaseConnection.php';

try
{
    $database = new DatabaseConnection();
    $db = $database->openConnection();
    $sql = "UPDATE `student` SET `name`= 'new name' , `email` = 'your email' WHERE `id` = 8";
    $affectedrows = $db->exec($sql);

    if (isset($affectedrows)) {
        echo "Record has been successfully updated";
    }
} catch (PDOException $e) {
    echo "There is some problem in connection: " . $e->getMessage();
}
