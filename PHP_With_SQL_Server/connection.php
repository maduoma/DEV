<?php
$server = 'localhost\SQLEXPRESS';
$dbName = 'PHP_MSSQL';
$uid = '';
$pwd = '';

$conn = new PDO("sqlsrv:server=$server; database = $dbName", $uid, $pwd);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $tableName = 'testTable';
    $query = "CREATE TABLE $tableName ([c1_int] sql_variant, [c2_varchar] sql_variant)";

    $stmt = $conn->query($query);
    unset($stmt);

    $query = "INSERT INTO [$tableName] (c1_int, c2_varchar) VALUES (1, 'test_data')";
    $stmt = $conn->query($query);
    unset($stmt);

    $query = "SELECT * FROM $tableName";
    $stmt = $conn->query($query);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($result);

    unset($stmt);
    unset($conn);
} catch (Exception $e) {
    echo $e->getMessage();
}
