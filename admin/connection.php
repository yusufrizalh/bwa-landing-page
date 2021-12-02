<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_bwa";

try {
    $dbconn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection is succesful!";
    return $dbconn;
} catch (PDOException $ex) {
    echo "Error connection: " . $ex->getMessage();
}
