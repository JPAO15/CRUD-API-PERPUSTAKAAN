<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//anggota
$id_anggota = isset($_POST['id_anggota']) ? $_POST['id_anggota'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$kota = isset($_POST['kota']) ? $_POST['kota'] : '';
$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO anggota (id_anggota, nama, alamat, kota, no_hp, tanggal_lahir) VALUES ('$id_anggota', '$nama', '$alamat', '$kota', '$no_hp', '$tanggal_lahir')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;