<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname = "e-commerce";

try {
    $test = new PDO("mysql:host=$servername;dbname=$dname", $username, $password);
    $test->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>