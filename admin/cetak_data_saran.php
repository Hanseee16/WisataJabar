<?php
// session
session_start();

// tidak bisa ke halaman index ketika belum login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Koneksi
require '../admin/functions.php';

?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Pemesan.xls");
    ?>

    <table border="1">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Email</th>
            <th class="text-center">Nomor Telepon</th>
            <th class="text-center">Saran</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Waktu</th>
        </tr>


        <?php $i = 1; ?>
        <?php
        $data_all = tampil_saran("SELECT * FROM tbl_pemesan ");
        foreach ($data_all as $data_row) : ?>

            <tr>
                <td class="text-center"><?= $i; ?></td>
                <td class="text-center"><?= ucwords($data_row['nama']); ?></td>
                <td class="text-center"><?= ucwords($data_row['email']); ?></td>
                <td class="text-center">'<?= ucwords($data_row['no_telp']); ?>'</td>
                <td class="text-center"><?= ucwords($data_row['saran']); ?></td>
                <td class="text-center"><?= tgl_indo_2($data_row['tanggal']); ?></td>
                <td class="text-center"><?= ucwords($data_row['waktu']); ?> WIB </td>
            </tr>

            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>

</html>