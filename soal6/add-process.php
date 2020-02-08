<?php
$name = $_POST["name"];
$id_work = $_POST["id_work"];
$id_salary = $_POST["id_salary"];

require_once "koneksi.php";
$query = "INSERT INTO name SET name='$name', id_work=$id_work, id_salary=$id_salary";
$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

if($result)
{
	echo "<script>location.href='index.php';</script>";
	die;
}
else
{
	echo "<script>alert('Gagal Simpan Data'); window.history.back();</script>";
	die;
}