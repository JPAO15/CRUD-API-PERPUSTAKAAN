<?php
require_once '../koneksi.php';

$no_pinjam = isset($_POST['no_pinjam']) ? $_POST['no_pinjam'] : '';
$tanggal_pinjam = isset($_POST['tanggal_pinjam']) ? $_POST['tanggal_pinjam'] : '';
$tgl_kembali = isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE peminjaman SET no_pinjam = '$no_pinjam', tanggal_pinjam = '$tanggal_pinjam',tgl_kembali = '$tgl_kembali', jumlah = '$jumlah' WHERE `no_pinjam`= '$no_pinjam'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;