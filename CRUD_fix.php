<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
            text-align: center; 
        }

        h2 {
            color: #3498db; /
            border-bottom: 2px solid #3498db; 
            padding-bottom: 5px; /
        }


        form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
            border: 4px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }
        form {
        margin-bottom: 20px;
        margin: 0 auto; /* Center the form on the page */
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 10px;
        box-shadow: 0 0 16px rgba(0, 0, 0, 0.1);
    }
        input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-left:20px;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<h1>Sistem Pelacakan Letak Barang | Lokasi Barang</h1>
    </form>
    <h2>Data Barang</h2>
    <form action="tambah_lokasi.php" method="post">
        <label for="nama_lokasi">Nama Lokasi:</label>
        <input type="text" id="nama_lokasi" name="nama_lokasi" required>
        <input type="submit" value="Tambah Lokasi">
    <table border="1">
        <tr>
            <th>No. Kode</th>
            <th>Nama Lokasi</th>
            <th>Nama Barang</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Data barang
        $data_barang = [
            ["no_kode" => 1, "nama_lokasi" => "contoh lokasi", "nama_barang" => "contoh barang", "aksi" => "<a href='update.php?id=1'>Update</a> | <a href='delete.php?id=1'>Delete</a>"],
            // ... tambahkan data barang lainnya disini
        ];

        foreach ($data_barang as $barang) {
            echo "<tr>";
            echo "<td>{$barang['no_kode']}</td>";
            echo "<td>{$barang['nama_lokasi']}</td>";
            echo "<td>{$barang['nama_barang']}</td>";
            echo "<td>{$barang['aksi']}</td>";
            echo "</tr>";
        }
        ?>
        <?php
        // Data barang
        $data_barang = [
            ["no_kode" => 2, "nama_lokasi" => "contoh lokasi", "nama_barang" => "contoh barang", "aksi" => "<a href='update.php?id=1'>Update</a> | <a href='delete.php?id=1'>Delete</a>"],
            // ... tambahkan data barang lainnya disini
        ];

        foreach ($data_barang as $barang) {
            echo "<tr>";
            echo "<td>{$barang['no_kode']}</td>";
            echo "<td>{$barang['nama_lokasi']}</td>";
            echo "<td>{$barang['nama_barang']}</td>";
            echo "<td>{$barang['aksi']}</td>";
            echo "</tr>";
        }
        ?>
        <?php
        // Data barang
        $data_barang = [
            ["no_kode" => 3, "nama_lokasi" => "contoh lokasi", "nama_barang" => "contoh barang", "aksi" => "<a href='update.php?id=1'>Update</a> | <a href='delete.php?id=1'>Delete</a>"],
            // ... tambahkan data barang lainnya disini
        ];

        foreach ($data_barang as $barang) {
            echo "<tr>";
            echo "<td>{$barang['no_kode']}</td>";
            echo "<td>{$barang['nama_lokasi']}</td>";
            echo "<td>{$barang['nama_barang']}</td>";
            echo "<td>{$barang['aksi']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body> 
</html>
