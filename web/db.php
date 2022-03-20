<?php
include_once(__DIR__.'/vendor/autoload.php'); 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$servername = "db";
$username = "root";
$password = $_ENV["MYSQL_ROOT_PASSWORD"];
$database = $_ENV["MYSQL_DB_NAME"];

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
