<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';

// Jika ada id, data barang akan diupdate
if (!empty($id)) {
    // Ambil data baru dari form atau mana saja
    $nama_lokasi = isset($_POST['nama_lokasi']) ? $_POST['nama_lokasi'] : '';
    $nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';

    // Proses penggantian data
    foreach ($data_barang as &$barang) {
        if ($barang['no_kode'] == $id) {
            $barang['nama_lokasi'] = $nama_lokasi;
            $barang['nama_barang'] = $nama_barang;
            break;
        }
    }
}

header('Location: index.php');