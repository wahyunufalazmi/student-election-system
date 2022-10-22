<!DOCTYPE html>
<html>
  <head>
    <title>User Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  </head><br>
  <body>

  <style type="text/css">

    body{
      background-color: aquamarine;
    }
</style><br>

<div class="container"><b>
      <h1><center>FORM LOGIN USER</center></h1><br>
        <div class="col-md-6 offset-md-3">
        <form action="cek_login.php" method="post">
          <div class="form-group">
            <label>NIM</label>
            <input type="text" class="form-control" name="nim"  placeholder="inputkan nim dengan benar. . . . . . ." required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password"  placeholder="inputkan password. . . . . . . " required>
          </div>
         <center><input type="submit" value="LOGIN" class="btn btn-info"><br><br>
         </form>
    </body><font size="3" color="red">
</html>

<?php
  include 'koneksi.php';

    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "Login gagal! kombinasi username dan password yang dimasukkan salah!";
      }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
      }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman admin";
      }
    }
?>