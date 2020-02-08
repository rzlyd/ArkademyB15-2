<?php
$id = $_GET["id"];
$data = $_GET["data"];

require_once "koneksi.php";
$delete = mysqli_query($koneksi, "DELETE FROM name WHERE id=$id") or die(mysqli_error($koneksi));

if($delete):
	echo "<script>location.href='index.php?delete=success&data=$data';</script>";
	exit;
else:
	echo "<script>alert('Gagal Hapus Data'); window.history.back();</script>";
	exit;
endif;