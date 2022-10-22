
<!DOCTYPE html>
<html>
  <head>
    <title>List Kandidat</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
       
      }
      h5{
        color: red;
        text-align: center;
      }
   
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-danger">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="yellow">Dinus E-Lection</font>&nbsp &nbsp &nbsp</b>
    <font face="calibri" color="white"><i>"CHOOSE YOUR BEST CANDIDATE AS REPRESENTATIVE OF ALL DINUS STUDENTS" </i></font></a>
    </nav><br>
    <center><h1>Data Seluruh Kandidat</h1></center>
 
    <center><a href="input_kandidat.php"><input type="button" class="btn btn-primary" value="INPUT KANDIDAT"></a><br/><br></center>
    <center><a href="admin.php"><input type="button" class="btn btn-dark" value="KEMBALI KE HALAMAN ADMIN"></a><br/><br></center>
    <table align="center" class="table table-stripped">
      <thead>
        <tr>
          <th>No</th>
          <th>NAMA KANDIDAT</th>
          <th>JURUSAN</th>
          <th>FAKULTAS</th>
          <th>SEMESTER</th>
          <th>MINAT</th>
          <th>ORGANISASI</th>
          <th>TANGGAL LAHIR</th>
          <th>HOBI</th>
          <th>SLOGAN</th>
          <th>FOTO KANDIDAT</th>
        </tr>
    </thead>
    <tbody>
      <?php
      include 'koneksi.php';
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM kandidat";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
      
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['jurusan']; ?></td>
          <td><?php echo $row['fakultas']; ?></td>
          <td><?php echo $row['semester']; ?></td>
          <td><?php echo $row['minat']; ?></td>
          <td><?php echo $row['organisasi']; ?></td>
          <td><?php echo $row['tanggallahir']; ?></td>
          <td><?php echo $row['hobi']; ?></td>
          <td><?php echo $row['slogan']; ?></td>
     
          <td><img src="imguploaded/<?php echo $row['gambar']; ?>" style="width: 130px; height: 150px;"></td>
          <td> <a href="edit_kandidat.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-info" value="EDIT DATA"></a><br><br>
              <a href="hapus_kandidat.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">
              <input type="button" class="btn btn-danger" value="HAPUS DATA">
              </a><br><br>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>