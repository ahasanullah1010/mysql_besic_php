<?php
include 'my_sql_connect.php';
$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$data = mysqli_fetch_assoc($result);


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($_POST['name'] == ""){
        $name = $data['name'];
    }
    if($_POST['email'] ==""){
        $email = $data['email'];
    }
    if($_POST['password']==""){
        $password = $data['password'];
    }

    $sqlupdate = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id=$id ";
    $queryupdate = $conn->query($sqlupdate);
    if($queryupdate){
        echo "User information update siccessfully!";
        header("location:select_show_data.php");
        exit;
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-actions {
            text-align: center;
        }

        .form-actions button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-actions button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit User</h1>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="<?= $data['name'] ?>" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="<?= $data['email'] ?>" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="<?= $data['password'] ?>" >
            </div>
            <div class="form-actions">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
