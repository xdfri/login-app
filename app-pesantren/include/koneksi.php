<?php
$server_name = "localhost";
$username = "root";
$password ="";
$db_name ="aplikasi_pondok";

$conn = new mysqli($server_name, $username, $password, $db_name);

if($conn->connect_error) {
    die('koneksi eror :'. mysqli_connect_error());
}


?>