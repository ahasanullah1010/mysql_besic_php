<?php
$servername = "localhost";
$username = "root";
$passeord = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $passeord, $dbname);

if($conn->connect_error){
    die("Connection Failed! : ". $conn->connect_error);
}
else{
    echo "mysqli connect successfully!";
}



?>