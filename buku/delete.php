<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_buku = $_POST['id_buku'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM buku WHERE `id_buku`= '$id_buku'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;