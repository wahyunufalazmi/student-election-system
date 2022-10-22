
<!DOCTYPE html>
<html>
  <head>
    <title>Entri Data Kandidat</title>
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
        color: black;
      }
    button {
          background-color: chartreuse;
          color: black;
          padding: 10px;
          text-decoration: none;
          font-size: 15px;
          font-style: bold;
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
      background: navy;
    }
    </style>
  </head>
  <body>
    <table bgcolor="silver" align="center">
      <td><h2>FORM ENTRY DATA KANDIDAT</h2></td>
    </table>
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>NAMA KANDIDAT</label>
         <input type="text" name="nama" required="" placeholder="tulis nama kandidat....." />
        </div>
          <div>
          <label>JURUSAN</label>
         <input type="text" name="jurusan" required="" placeholder="tulis jurusan kandidat....." />
        </div>
        <div>
          <label>FAKULTAS</label>
         <input type="text" name="fakultas" required="" placeholder="tulis fakultas kandidat....." />
        </div>
        <div>
          <label>SEMESTER</label>
         <input type="number" min="1" name="semester" required="" placeholder="tulis semester kandidat....." />
        </div>
         <div>
          <label>MINAT</label>
         <textarea cols="77" rows="5" name="minat" required="" placeholder="minat / ketertarikan kandidat tersebut....."></textarea>
        </div>
        <div>
          <label>ORGANISASI</label>
         <textarea cols="77" rows="5" name="organisasi" required="" placeholder="organisasi yang diikuti kandidat tersebut....."></textarea>
        </div>
             <div>
          <label>TANGGAL LAHIR</label>
         <input type="text" name="tanggallahir" required="" placeholder="contoh : 1 JANUARI 2001....." />
        </div>
           <div>
          <label>HOBI</label>
         <textarea cols="77" rows="5" name="hobi" required="" placeholder="hobi kandidat tersebut....."></textarea>
        </div>
        <div>
          <label>SLOGAN</label>
         <textarea cols="77" rows="5" name="slogan" required="" placeholder="slogan unik dari kandidat tersebut....."></textarea>
        </div>
        <div>
          <label>Dokumentasi Acara</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit" name="upload">UPLOAD</button>
        </div>
        </section>
      </form>
  </body>
</html>
  <?php
  include 'koneksi.php';

  if (isset($_POST['upload'])) {
  $id = rand(1,999);
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $fakultas = $_POST['fakultas'];
  $semester = $_POST['semester'];
  $minat = $_POST['minat'];
  $organisasi = $_POST['organisasi'];
  $tanggallahir = $_POST['tanggallahir'];
  $hobi = $_POST['hobi'];
  $slogan = $_POST['slogan'];
  $gambar = $_FILES['gambar']['name'];
  $skor = 0;



//cek dulu jika ada gambar produk jalankan coding ini
if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg', 'jpeg', 'webm'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'imguploaded/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO kandidat (id, nama, jurusan, fakultas, semester, minat, organisasi, tanggallahir, hobi, slogan, gambar, skor) VALUES ('$id', '$nama', '$jurusan', '$fakultas', '$semester', '$minat', '$organisasi', '$tanggallahir', '$hobi', '$slogan', '$nama_gambar_baru', '$skor')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result)
                  {
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  }
                 else 
                 {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah');window.location='tampil_kandidat.php';</script>";
                  }

        } 
        else 
        {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, jpeg, webm');window.location='input_kandidat.php';</script>";
        }
} 
else {
   echo "<script>alert('Tolong pilih gambar untuk diupload terlebih dahulu');window.location='input_kandidat.php';</script>";
}
}

  // membuat variabel untuk menampung data dari form
  

  ?>
