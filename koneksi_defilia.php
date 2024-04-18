<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "administrasi_surat_defilia";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} 
?>
