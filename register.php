<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-danger">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="yellow">Dinus E-Lection</font>&nbsp &nbsp &nbsp</b>
    <font face="calibri" color="white"><i>"CHOOSE YOUR BEST CANDIDATE AS REPRESENTATIVE OF ALL DINUS STUDENTS" </i></font></a>
    </nav><br>

    <style type="text/css">
         body {     
             background-image: url('images/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment:fixed;
            font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
            color:black;
        }
        button{
            background-color: yellow;
        }
    </style><br>

    <center><b>
        <table bgcolor="cyan">
            <td><h4>FORM REGISTRASI USER</h4></td>
        </table><br><br>

    <form action="" method="post">
    <table>
        <tr></tr>
        <tr>
            <td bgcolor="silver">NAMA</td>
        </tr>
        <tr>
            <td><input type="text" name="nama" placeholder="nama lengkap anda..." required=""></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td bgcolor="silver">NIM</td>
        </tr>
        <tr>
            <td><input type="text" name="nim" placeholder="ex : A11.2018.11292..." required=""></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td bgcolor="silver">JURUSAN</td>
        </tr>
        <tr>
            <td><input type="text" name="jurusan" placeholder="jurusan anda..." required=""></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td bgcolor="silver">FAKULTAS</td>
        </tr>
        <tr>
            <td><input type="text" name="fakultas" placeholder="fakultas anda..." required=""></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td bgcolor="silver">PASSWORD</td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="masukkan password yang rumit..." required=""></td>
        </tr>
        
    </table><br>
    <button name="daftar">DAFTAR</button>
    </form>

</body>
</html>

<?php

    include 'koneksi.php';

    if (isset($_POST['daftar'])) {
        $id = rand(1,999);
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
        $fakultas = $_POST['fakultas'];
        $password = $_POST['password'];

        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user WHERE nim='$nim' AND nama = '$nama' "));
        if ($cek > 0){
        echo "<script>window.alert('data yang anda masukkan sudah terdaftar!!!')
        window.location='index.php'</script>";
        }else {
        mysqli_query($koneksi,"INSERT INTO user (id, nama, nim, jurusan, fakultas, password)
        VALUES ('$id', '$nama', '$nim', '$jurusan', '$fakultas', '$password')");
    
        echo "<script>window.alert('berhasil login, silahkan pilih kandidat pilihan anda')
        window.location='electing.php'</script>";
        }
    
    }

?>