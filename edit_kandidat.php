 <?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';
  



  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kandidat WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='tampil_kandidat.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id');window.location='tampil_kandidat.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Data Kandidat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <style type="text/css">

      body{
      background-image: url('images/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment:fixed;
    }

      * {
        font-family: "Trebuchet MS";
      }
      h2 {
        text-transform: uppercase;
        color: white;
      }
    button {
          background-color: orange;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 15px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 20px;
      float: left;
      text-align: left;
      width: 100%;
      color: white;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 600px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: grey;
    }
    </style>
  </head>
  <body>
    <table bgcolor="maroon" align="center">
      <td><h2>Edit Data Kandidat <?php echo $data['nama']; ?></h2></td>
    </table>
      <center>
        
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>NAMA</label>
           <input type="text" required="" name="nama" value="<?php echo $data['nama']; ?>" />
        </div>
        <div>
            <label>JURUSAN</label>
           <input type="text" name="jurusan" required="" value="<?php echo $data['jurusan']; ?>" />
        </div>
        <div>
          <label>SLOGAN</label>
           <input type="text" name="slogan" required="" value="<?php echo $data['slogan']; ?>" />
        </div>
          
        <div>
          <label>Foto Kandidat</label>
          <img src="imguploaded/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar" />
          <i style="float: left;font-size: 15px;color: yellow">Abaikan jika tidak merubah foto acara</i>
        </div>
        <div>
         <button type="submit" name="update">UPDATE DATA</button>
        </div>
        </section>
      </form>
  </body>
</html>


<?php

  if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $slogan = $_POST['slogan'];
  $gambar = $_FILES['gambar']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg', 'webm'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'imguploaded/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE kandidat SET nama = '$nama', jurusan = '$jurusan', slogan = '$slogan', gambar = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='tampil_kandidat.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, jpeg, dan webm.');window.location='edit_kandidat.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE kandidat SET nama = '$nama', jurusan = '$jurusan', slogan = '$slogan'";
                    $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='tampil_kandidat.php';</script>";
      }
    }

  }

?>

