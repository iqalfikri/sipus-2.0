<?php
include'../koneksi.php';
$idtransaksi=$_GET['idtransaksi'];

mysqli_query($db,
	"DELETE FROM tbtransaksi
	WHERE idtransaksi='$idtransaksi'"
);
header("location:../index.php?p=transaksi");
