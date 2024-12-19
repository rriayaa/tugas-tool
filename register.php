<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pengguna Baru</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2; /* Latar belakang pink muda */
            color: #ff66b2; /* Teks berwarna pink gelap */
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 500px;
        }
        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #ff66b2; /* Warna header pink gelap */
            color: #ffffff;
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-primary {
            background-color: #ff66b2;
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #ff3385;
        }
        .form-control {
            border-radius: 10px;
        }
        .text-success {
            color: #28a745;
        }
        .text-danger {
            color: #ff3385;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Daftar Pengguna Baru</div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Koneksi ke database
                    $conn = new mysqli('localhost', 'root', '', 'login_db');

                    // Ambil data dari form
                    $username = $_POST['username'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash password

                    // Query untuk menyimpan data
                    $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p class='text-center text-success'>Pengguna baru berhasil ditambahkan!</p>";
                        echo "<div class='text-center mt-3'>
                                <a href='login.php' class='btn btn-success'>Lanjutkan ke Login</a>
                              </div>";
                    } else {
                        echo "<p class='text-center text-danger'>Error: " . $sql . "<br>" . $conn->error . "</p>";
                    }

                    $conn->close();
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
