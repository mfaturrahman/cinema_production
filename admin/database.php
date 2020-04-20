<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema_production";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

?>