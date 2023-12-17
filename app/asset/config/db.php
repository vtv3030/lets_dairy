<?php
$PATH = $_SERVER['DOCUMENT_ROOT'].'/.env';;
$env = parse_ini_file($PATH);


$servername = $env["host"];
$username =  $env["user"];
$password =  $env["password"];
$database =  $env["database"];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

