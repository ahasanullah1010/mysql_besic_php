<?php
include 'my_sql_connect.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password') ";

        $query = $conn->query($sql);
        
        if($query){
            echo "Data insert successfully!";
        }
        else{
            echo "Data insert failed!";
        }
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert user information</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Your Name " required><br>
        <input type="email" name="email" placeholder="Enter your email" required><br>
        <input type="text" name="password" placeholder="Enter password" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>