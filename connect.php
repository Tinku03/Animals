<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "animals";
// $conn = new mysqli($servername , $username, $password,$db) or die("Connect failed: %s\n". $conn -> error);
// echo "Connected Successfull";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "animals";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

