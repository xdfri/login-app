<?php 

require_once 'include/koneksi.php';
$eror_pesan ="";

if(isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");

    if (mysqli_num_rows( $result) == 1) {
        
        // cek passwordny 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            header("location: user/index.php");
            exit;
        }else {
            header("location: login.php" );
        }
    }
    $eror_pesan = 'Username / Password salah ';

}

?>