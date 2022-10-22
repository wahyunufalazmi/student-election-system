<!DOCTYPE html>
<html>
<head>
	<title>List Pemilih</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-danger">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="yellow">Dinus E-Lection</font>&nbsp &nbsp &nbsp</b>
    <font face="calibri" color="white"><i>"CHOOSE YOUR BEST CANDIDATE AS REPRESENTATIVE OF ALL DINUS STUDENTS" </i></font></a>
    </nav><br>

    <center><b>
    	<table bgcolor="chartreuse">
    		<td><h4>LIST CALON PEMILIH YANG TERDAFTAR</h4></td><br><br>
        
    	</table><br><br>
      <center><a href="admin.php"><input type="button" class="btn btn-dark" value="KEMBALI KE HALAMAN ADMIN"></a><br/><br></center>
   
    <table class="table table-striped ">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>JURUSAN</th>
          <th>FAKULTAS</th>
          <th>OPSI</th>
        </tr>
    </thead>
    <tbody>
      <?php
      include 'koneksi.php';
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM user";
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
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['jurusan']; ?></td>
          <td><?php echo $row['fakultas']; ?></td>
          <td>
              <a href="hapus_pemilih.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">
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

