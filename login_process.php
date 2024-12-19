<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'login_db');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {  // Memeriksa hash password
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
        } else {
            echo "<p class='text-center text-danger'>Password salah!</p>";
        }
    } else {
        echo "<p class='text-center text-danger'>Username tidak ditemukan!</p>";
    }
}
?>
