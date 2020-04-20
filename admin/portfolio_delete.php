<?php

require_once('database.php');
$result = $koneksi->query("SELECT * FROM portfolio WHERE id='$_GET[id]'");
$data = $result->fetch_assoc();
$icon = $data['thumbnail'];

if (file_exists("../assets/img/gallery/$icon"))
{
	unlink("../assets/img/gallery/$icon");
}

$koneksi->query("DELETE FROM portfolio WHERE id='$_GET[id]'");

echo "<script>alert('Data berhasil di hapus!')</script>";
echo "<script>window.location.href = 'index.php?halaman=portfolio';</script>";

?>