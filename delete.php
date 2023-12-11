<?php
// Menghubungkan PHP dengan database MySQL
$conn = new mysqli("localhost", "username", "password", "database");

// Melakukan pengecekan koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil id dari url
$id = $_GET['id'];

// Menghapus data barang berdasarkan id
$sql = "DELETE FROM barang WHERE no_kode = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data barang berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Mengalihkan ke halaman data_barang.php
header('Location: data_barang.php');
?>