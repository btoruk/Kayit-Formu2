<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "regform";
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    die("Veritabanı bağlantısı kurulamadı: " . $db->connect_error);
}
function getDbConnection() {
    global $db;
    return $db;
}
