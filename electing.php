<!DOCTYPE html>
<html>
<head>
	<title>Election Page</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	 <nav class="navbar navbar-dark bg-danger">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="yellow">Dinus E-Lection</font>&nbsp &nbsp &nbsp</b>
    <font face="calibri" color="white"><i>"CHOOSE YOUR BEST CANDIDATE AS REPRESENTATIVE OF ALL DINUS STUDENTS" </i></font></a>
    </nav><br>

    <center>
    	<h1>Pilih Kandidat Anda</h1><br><hr><br>

    	    <?php
      include 'koneksi.php';
      $query = "SELECT * FROM kandidat";
          $result = mysqli_query($koneksi, $query);
          $no = 1;
          while($row = mysqli_fetch_assoc($result))
          {

    ?>
   
    <table align="center">
  
      <tr>
        <td><h3><?php echo $no; ?>.) <?php echo $row['nama']; ?> ( <?= $row['jurusan'] ?> )</h3></td>
      </tr>
      <tr>
        <td>
          <center><img src="imguploaded/<?php echo $row['gambar']; ?>" style="width: 400px; height: 500px;"></center>
        </td>
      </tr>
      <tr>
        <td><br><b>Slogan :</b><br><br>
          <?php echo $row['slogan']; ?>
        </td>
      </tr>

      <tr>
        <td>
          <br><center><a href="pilih_kandidat.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-info" value="PILIH KANDIDAT INI"></a></center>
        </td>
      </tr>
      <tr>
        <td>
          <hr><br>
        </td>
      </tr>
    <?php
        $no++; //untuk nomor urut terus bertambah 1
        }
      ?>
    </table><br><br>
     <center><a href="logout.php"><input type="button" class="btn btn-dark" value="LOGOUT"></a><br/><br></center>
    	
    </center>

</body>
</html>