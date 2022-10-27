<?php 

$host = "localhost";
$port = 3316;
$username = "root";
$password = "";
$database = "produk";

$conn = mysqli_connect($host, $username, $password, $database, $port);

if(!$conn){
	echo "connect to database failed" . "<br><br>";
}

