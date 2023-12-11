<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lokasi = $_POST['nama_lokasi'];

    // Buat koneksi ke database
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Prepared statement untuk menghindari SQL injection
    $stmt = $conn->prepare("INSERT INTO barang (nama_lokasi) VALUES (?)");
    $stmt->bind_param("s", $nama_lokasi);

    // Jalankan query
    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Terjadi kesalahan saat menambahkan data: " . $stmt->error;
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
}
?>