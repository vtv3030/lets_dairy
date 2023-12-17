<?php
$PATH = $_SERVER['DOCUMENT_ROOT'].'/.env';;
$env = parse_ini_file($PATH);


$servername = $env["db_host"];
$username =  $env["db_user"];
$password =  $env["db_pass"];

if ($_SERVER['SERVER_NAME'] == "www.letsdiry.in"){
  $database =  $env["db_live_name"];
} else {
  $database =  $env["db_test_name"];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo $database


?>