<?php
session_start();
require_once('koneksi.php');
// mysql_select_db("latihandidin");
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];
if($op=="in"){
    $cek = mysqli_query($koneksi,"SELECT * FROM login WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($cek) == 1){
        $c = mysqli_fetch_array($cek);
        $_SESSION['username'] = $c['username'];
		$_SESSION['password'] = $c['password'];
		header("location:tambahproduk.php");
    } else {
        die("password salah <a href=\" javascript:history.back()\">kembali</a>");
    } 
    } else if($op == "out"){
        unset($_SESSION['username']);
        unset($_SESSION['level']);
        header("location:login.php");
    }

?>