<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//buku
$id_buku = isset($_POST['id_buku']) ? $_POST['id_buku'] : '';
$judul = isset($_POST['judul']) ? $_POST['judul'] : '';
$penerbit = isset($_POST['penerbit']) ? $_POST['penerbit'] : '';
$pengarang = isset($_POST['pengarang']) ? $_POST['pengarang'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO buku (id_buku, judul, penerbit, pengarang, tanggal, jenis) VALUES ('$id_buku', '$judul', '$penerbit', '$pengarang', '$tanggal', '$jenis')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;