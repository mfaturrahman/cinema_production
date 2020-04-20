<?php

require_once('database.php');
$result = $koneksi->query("SELECT * FROM blog WHERE id='$_GET[id]'");
$data = $result->fetch_assoc();
$icon = $data['thumbnail'];

if (file_exists("../assets/img/blog/$icon"))
{
	unlink("../assets/img/blog/$icon");
}

$koneksi->query("DELETE FROM blog WHERE id='$_GET[id]'");

echo "<script>alert('Data berhasil di hapus!')</script>";
echo "<script>window.location.href = 'index.php?halaman=blog';</script>";

?>