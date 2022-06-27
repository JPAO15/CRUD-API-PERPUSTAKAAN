<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//buku
$no_pinjam = isset($_POST['no_pinjam']) ? $_POST['no_pinjam'] : '';
$id_anggota = isset($_POST['id_anggota']) ? $_POST['id_anggota'] : '';
$id_buku = isset($_POST['id_buku']) ? $_POST['id_buku'] : '';
$tanggal_pinjam = isset($_POST['tanggal_pinjam']) ? $_POST['tanggal_pinjam'] : '';
$tgl_kembali = isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `peminjaman` (`no_pinjam`, `id_anggota`, `id_buku`, `tanggal_pinjam`, `tgl_kembali`, `jumlah`) VALUES ('$no_pinjam', '$id_anggota', '$id_buku', '$tanggal_pinjam', '$tgl_kembali', '$jumlah');";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;