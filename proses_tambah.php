<?php
include("koneksi.php");

// Dapatkan data dari input form
$nama      = $_POST["nama"];
$deskripsi = $_POST["deskripsi"];
$harga     = $_POST["harga"];

$namafoto  = $_FILES["foto"]["name"];
$lokasifoto = $_FILES["foto"]["tmp_name"];
$uploadDir = 'uploads/'; // Direktori tempat penyimpanan gambar
$uploadFile = $uploadDir . basename($namafoto);

// Validasi tipe file untuk memastikan hanya gambar yang dapat diunggah
$fileType = strtolower(pathinfo($namafoto, PATHINFO_EXTENSION));
$allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($fileType, $allowedTypes)) {
    echo "Tipe file tidak diizinkan. Hanya file JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
    exit();
}

// Gunakan prepared statements untuk keamanan
$stmt = $koneksi->prepare("INSERT INTO `tb_produk`(`nama`, `harga`, `foto`, `deskripsi`) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $nama, $harga, $namafoto, $deskripsi);

if ($stmt->execute()) {
    // Pindahkan file foto ke folder tujuan
    if (move_uploaded_file($lokasifoto, $uploadFile)) {
        header("Location: tambah_produk.php");
        exit();
    } else {
        echo "Gagal mengunggah file gambar.";
    }
} else {
    echo "Gagal menambahkan produk ke database.";
}

header("Location: admin.php");

$stmt->close();
$koneksi->close();
?>
