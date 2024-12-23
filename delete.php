<?php
include 'my_sql_connect.php';
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";
$query = $conn->query($sql);
if($query){
    header("location:select_show_data.php");
    exit;
}


?>