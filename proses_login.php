<?php
include("koneksi.php");
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

// Menggunakan prepared statement untuk keamanan
$stmt = $koneksi->prepare("SELECT * FROM tb_user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$query = $stmt->get_result();

$jumlah_data = $query->num_rows;

if($jumlah_data > 0){
    $data = $query->fetch_assoc();
    {
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        header("Location: admin.php");
        exit();
    } 
} else {
    echo "Username tidak terdaftar";
    header("Location: login.php");
    exit();
}
?>
