<?php

require_once('database.php');
$result = $koneksi->query("SELECT * FROM services WHERE id='$_GET[id]'");
$data = $result->fetch_assoc();
$icon = $data['icon'];

if (file_exists("../assets/img/icon/$icon"))
{
	unlink("../assets/img/icon/$icon");
}

$koneksi->query("DELETE FROM services WHERE id='$_GET[id]'");

echo "<script>alert('Data berhasil di hapus!')</script>";
echo "<script>window.location.href = 'index.php?halaman=services';</script>";

?>