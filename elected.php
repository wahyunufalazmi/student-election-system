<!DOCTYPE html>
<html>
<head>
	<title>Election Page</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript"> 
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    </script> 
</head>
<body>
	 <nav class="navbar navbar-dark bg-danger">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="yellow">Dinus E-Lection</font>&nbsp &nbsp &nbsp</b>
    <font face="calibri" color="white"><i>"CHOOSE YOUR BEST CANDIDATE AS REPRESENTATIVE OF ALL DINUS STUDENTS" </i></font></a>
    </nav><br>

    <center>
    	<h1>PEROLEHAN SUARA</h1><br><hr><br>
      <?php
        include 'koneksi.php';

        $query = "SELECT MAX(skor) FROM Kandidat";
          $result = mysqli_query($koneksi, $query);
        
          while($row = mysqli_fetch_assoc($result))
          {

            echo "<font size='6' color='green' face='verdana'>SKOR UNGGUL TERBARU : ".$row['MAX(skor)']."</font><br>";

             $highscore = $row['MAX(skor)'];
          
          $queri1 = "SELECT nama FROM kandidat WHERE skor = '$highscore'";
          $result1 = mysqli_query($koneksi, $queri1);

          while($row1 = mysqli_fetch_assoc($result1))
          {

            echo "<font size='6' color='red' face='sans-serif'>PEMENANG SAAT INI : ".$row1['nama']."</font>";
          }

          }



      ?>

   
    <table align="center">
  <?php
  include 'koneksi.php';
     $kolom = 3; 
     $i=1;    
     $query=mysqli_query($koneksi,"SELECT * FROM kandidat");
     while ($data=mysqli_fetch_array($query)) {
      if(($i) % $kolom== 1) {    
      echo'<tr>';   
      }  
      echo '<td align="center" width="500px" height="550px"><img src="imguploaded/'.$data['gambar'].'" width="50%" /><br><br><b>'.$data['nama'].'<br><br>( '.$data['jurusan'].' )<br><br><font size="6" color="red">SCORE : '.$data['skor'].'</b></td>';
      if(($i) % $kolom== 0) {    
      echo'</tr>';    
      }
     $i++;
     }
   ?>
    </table><br><br>
    <table width="450px" align="center">
                <tr>
                  <td bgcolor="black"><font size="5" color="silver" face="algerian"><center>CHATBOX<br>
                  <font face="verdana" color="white" size="3">(your opinion will be writen under here)</font>
                  </center></font></td>
                </tr>
            </table><br>
    <div style="overflow:auto; width:30%; height:320px; margin-left:35%;margin-right:35%;">
    <table class="art-article" border="0" cellspacing="0" cellpadding="0" style=" margin: 0; width: 100%;">
        <tbody>
              
            <?php
            //*koneksi ke database*//
          
            $Tampil="SELECT * FROM chat ORDER BY waktu DESC LIMIT 99";
            $query = mysqli_query($koneksi, $Tampil);
            while ($hasil = mysqli_fetch_array ($query)) {
                $komen = stripslashes ($hasil['komen']);
                $waktu = stripslashes ($hasil['waktu']);
                $nama = stripslashes ($hasil['nama']);    
            ?>    
            <style type="text/css">
                #atas {
                    border-bottom-width: 1px;
                    border-bottom-style: ridge;
                    border-bottom-color: #CCC;
                    margin-top: 1px;
                    text-align: left;
                    margin-bottom: 2px;
                    
                    padding-bottom: 1px;
                    color: green;
                }
                #pesan {
                    padding-right: 1px;
                    padding-left: 0px;
                    margin-bottom: 10px;
                    color: purple;
                }
                .waktu {
                    float: right;
                    color: red;
                    font-family: Arial;
                    font-size: 15px;
                }
            </style>
        
            <?php
            echo"
                <div id='atas'><font color='black'><b>Comment from : </font>$hasil[nama]<span class='waktu'>$hasil[waktu]</span></div></b>
                <div id='pesan'>$hasil[komen]</div>";
            }
            ?>
        </tbody>
    </table>  
</div>
<div style="width:30%; height:320px; margin-left:35%;margin-right:35%;">
  <table bgcolor="silver">
    <tr>
      <td align="center">
    <form method="POST" name="chat" action="#" enctype="application/x-www-form-urlencoded"><p><b><h5>This chat is anonymous, you can use a random username as you want</h5></b></p><br><p>USERNAME</p><input type="text" placeholder=" input username..." name="nama"  style="width: 95%;"></input><br><br><p>CHAT</p><textarea placeholder="Fill your text here..." name="komen" rows="2" cols="40" maxlength="500" style="width: 95%;"></textarea><br><br><input type="checkbox" name="cek" value="cek" class="art-button"> Confirm you are NOT a spammer</input><br><br><input type="submit" name="submit" value="Send" class="art-button"></input> <input type="reset" name="reset" value="Clear" class="art-button"></input>
       </td>
      </tr>
  </table>
    <?php
        if (isset($_POST['submit'])) {
        $nama    = $_POST['nama'];
        $komen    = $_POST['komen'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu    = date ("d-m-Y, H:i:s");
        $cek    = $_POST['cek'];
        if ($_POST['nama']=='Admin') { //validasi kata admin
    ?>
        <script language="JavaScript">
            alert('Anda bukan Admin !');
                document.location='elected.php';
        </script>
    <?php
        mysql_close($koneksi);
    }
        if (empty($_POST['nama'])||  empty($_POST['komen'])) { //validasi data
    ?>
        <script language="JavaScript">
            alert('Data yang Anda masukan tidak lengkap !');
                document.location='elected.php';
            </script>
    <?php
    }
        if (empty($_POST['cek'])) { //validasi data
    ?>
        <script language="JavaScript">
            alert('Please Checklist - Confirm you are NOT a spammer !');
                document.location='elected.php';
        </script>
    <?php
    }
    else {
        $input_chat = "INSERT INTO chat (nama, komen, waktu, cek) VALUES ('$nama', '$komen', '$waktu', '$cek')";
        $query_input =mysqli_query($koneksi,$input_chat);
        if ($query_input) {
    ?>
        <script language="JavaScript">
            document.location='elected.php';
        </script>
    <?php
    }
    else{
        echo'Dbase E';
    }
    }
    }
    mysqli_close($koneksi);
    ?>
    </form>
</div><br><br><br><br><br>

     <center><a href="logout.php"><input type="button" class="btn btn-dark" value="LOGOUT"></a><br/><br></center>
    	
    </center>

</body>
</html>

