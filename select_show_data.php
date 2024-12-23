<?php
include 'my_sql_connect.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>User Data</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        while($data = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?= $data['name'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['password'] ?></td>
                <td><a href="edit.php?id=<?= $data['id'] ?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $data['id'] ?>">Delete</a></td>
            </tr>
            <?php
            } ?>
            
        </tbody>
    </table>
</body>
</html>
