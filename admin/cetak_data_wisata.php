<?php
// session
session_start();

// tidak bisa ke halaman index ketika belum login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Koneksi
require 'functions.php';

?>
<!DOCTYPE html>
<html>

<head>
    <!-- <title>Export Data Ke Excel Dengan PHP</title> -->

</head>

<body>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Wisata.xls");
    ?>

    <table border="1">
        <tr>
            <th>No</th>
            <th class="text-center">Nama Wisata</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Deskripsi</th>
            <th class="text-center">Harga Tiket</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Waktu</th>
        </tr>
        <?php

        // menampilkan data wisata
        $data = mysqli_query($conn, "SELECT * FROM tbl_wisata");
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td class="text-center"><?= $d['nama_wisata']; ?></td>
                <td class="text-center"><?= $d['alamat']; ?></td>
                <td class="text-center"><?= $d['deskripsi']; ?></td>
                <td class="text-center">Rp. <?= $d['harga_tiket']; ?></td>
                <td class="text-center"><?= $d['kategori']; ?></td>
                <td class="text-center"><?= $d['tanggal']; ?></td>
                <td class="text-center"><?= $d['waktu']; ?> WIB </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>