<!DOCTYPE html>
<html>
<head>
	<title>Login as Administrator</title>
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
            color:blue;
        }
        button{
        	background-color: lime;
        }
    </style>
   	<form action="" method="post">
   		<center><br><br><br>
    <table width="50%" bgcolor="white">
    	<tr></tr>
    	<tr>
    		<td><h3>KATA KUNCI KEAMANAN</h3></td>
    		<td><input type="password" name="keyword" placeholder='type "admin123" ...'></td>
    	</tr>
    	<tr>
    		<td><hr></td>
    		<td><hr></td>
    	</tr>
    	<tr>
    		<td><h3>PASSWORD</h3></td>
    		<td><input type="password" name="password" placeholder='type "password123" ...'></td>
    	</tr>
    	<tr></tr>
    	
    </table><br>
    <button name="masuk">MASUK SEBAGAI ADMIN</button>
   	</form>
    

</body>
</html>

<?php

	if (isset($_POST['masuk'])) {
		$keyword = "admin123";
		$password = "password123";
		$inpkeyword = $_POST['keyword'];
		$inppassword = $_POST['password'];
		if($keyword == $inpkeyword && $password == $inppassword)
		{
			echo "<script>alert('Anda telah masuk sebagai admin');window.location='admin.php'</script>";
		}else{
			echo "<script>alert('Gagal masuk sebagai admin, kombinasi parameter yang dimasukkan salah');window.location='masuk.php'</script>";
		}
	}

?>