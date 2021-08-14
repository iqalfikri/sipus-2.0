<?php
include '../koneksi.php';
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$status = $_POST['status'];

if (isset($_POST['simpan'])) {
    mysqli_query(
        $db,
        "UPDATE tbbuku
		SET judulbuku='$judul',kategori='$kategori',pengarang='$pengarang',penerbit='$penerbit',status='$status'
		WHERE idbuku='$id_buku'"
    );
    header("location:../index.php?p=buku");
}
