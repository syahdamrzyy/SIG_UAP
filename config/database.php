<?php
// Disable error display
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Ambil dari ENV Railway
$servername = getenv("MYSQLHOST");
$username   = getenv("MYSQLUSER");
$password   = getenv("MYSQLPASSWORD");
$dbname     = getenv("MYSQLDATABASE");
$port       = getenv("MYSQLPORT");

// Koneksi ke MySQL Railway
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Jangan gunakan die()
// Biarkan caller yang handle error
if (!$conn) {
    // Connection failed
}

// Set charset hanya jika connection berhasil
if ($conn) {
    mysqli_set_charset($conn, "utf8mb4");
}
?>
