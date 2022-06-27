<?php
require_once '../koneksi.php';

$id_buku = isset($_POST['id_buku']) ? $_POST['id_buku'] : '';
$judul = isset($_POST['judul']) ? $_POST['judul'] : '';
$penerbit = isset($_POST['penerbit']) ? $_POST['penerbit'] : '';
$pengarang = isset($_POST['pengarang']) ? $_POST['pengarang'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE buku SET judul = '$judul', penerbit = '$penerbit',pengarang = '$pengarang', tanggal = '$tanggal', jenis = '$jenis' WHERE `id_buku`= '$id_buku'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;