<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 15%;
            text-align: center;
        }
        .welcome-box {
            background-color: #ffcce6;
            padding: 20px;
            border-radius: 10px;
        }
        .btn-danger {
            background-color: #ff66b2;
            border: none;
        }
        .btn-danger:hover {
            background-color: #ff4da6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-box shadow">
            <h3 class="text-dark">Selamat, Anda telah login!</h3>
            <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
        </div>
    </div>
</body>
</html>
