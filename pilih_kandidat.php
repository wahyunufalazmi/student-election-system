<?php
	include 'koneksi.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		 $query = "SELECT * FROM kandidat WHERE id='$id'";
   		 $result = mysqli_query($koneksi, $query);
   		 $data = mysqli_fetch_assoc($result);
   		 $skor = $data['skor'];
   		 $newskor = $skor + 1;
   		 $update = "UPDATE kandidat SET skor = '$newskor' WHERE id = '$id'";
   		 $result = mysqli_query($koneksi, $update);
   		 if ($result) {
   		 	echo "<script>alert('anda sudah memilih.');window.location='elected.php';</script>";
   		 }
	}

?>