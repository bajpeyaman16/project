<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($conn){
    echo "connected";
}
else{
    echo "failed";
}
?>
