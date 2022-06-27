<?php
require_once '../koneksi.php';

$id_anggota = isset($_POST['id_anggota']) ? $_POST['id_anggota'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$kota = isset($_POST['kota']) ? $_POST['kota'] : '';
$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE anggota SET nama = '$nama', alamat = '$alamat',kota = '$kota', no_hp = '$no_hp', tanggal_lahir = '$tanggal_lahir' WHERE `id_anggota`= '$id_anggota'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;