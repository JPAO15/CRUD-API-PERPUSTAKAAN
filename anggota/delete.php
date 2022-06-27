<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_anggota = $_POST['id_anggota'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM anggota WHERE `id_anggota`= '$id_anggota'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;