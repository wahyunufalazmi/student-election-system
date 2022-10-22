<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where nim = '$nim' and password = '$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
  $_SESSION['nim'] = $nim;
  $_SESSION['status'] = "login";
  header("location: electing.php");
}else{
  header("location: login.php?pesan=gagal");
}
?>