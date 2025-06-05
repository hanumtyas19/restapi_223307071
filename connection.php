<?php
$hostname = "localhost";      
$database = "db_cloudpnm";    
$username = "root";         
$password = "";              

// Membuat koneksi ke server database
$connect = mysqli_connect($hostname, $username, $password, $database);

// Cek koneksi
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>
