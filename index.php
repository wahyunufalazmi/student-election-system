<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	  <nav class="navbar navbar-dark bg-danger">
  <!-- Navbar content --><a class="navbar-brand" href="#"><b><font face="sans-serif" size="6" color="yellow">Dinus E-Lection</font>&nbsp &nbsp &nbsp</b>
	  <font face="calibri" color="white"><i>"CHOOSE YOUR BEST CANDIDATE AS REPRESENTATIVE OF ALL DINUS STUDENTS" </i></font></a>
	  </nav>
 <style type="text/css">

        * {margin:0; padding:0}

        body {     
             background-image: url('images/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment:fixed;
            font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
            color:white;
        }

        .nav1 {
            height:50px;
            background-color:purple;
            line-height:50px;
            position:relative;
            top:0px;
            bottom: 0px;
            width:100%;
        }

        nav ul {
            list-style:none;
        }
        nav ul li a {
            float:left;
            width:302px;
            color:white;
            text-decoration:none;
            display:block;
            text-align:center;
        }
        nav ul li a:hover {
            background-color:lime;
            display:block;
        }
        /*css untuk menu hover dropdown*/
        nav ul li:hover .sub1 {display:block}

        nav ul li:hover .sub2 {display:block}

        nav ul li:hover .sub3 {display:block}



        nav ul .sub1 {
            display:none;
            position:absolute;
            left:Opx;
            top:0px;
            background-color:teal;
        }

        nav ul .sub2 {
            display:none;
            position:absolute;
            left:302px;
            top:0px;
            background-color:olive;
        }

        nav ul .sub3 {
            display:none;
            position:absolute;
            left:604px;
            top:0px;
            background-color:#4682B4;
        }

 

        .sub1 a:hover { color:blue }

        .sub2 a:hover { color:navy }

        .sub3 a:hover { color:sienna }

    

                /* [SLIDER] */
        #slider,  #slider .slide{
          width: 80%;
          height: 430px;
        }
        #slider {
          overflow: hidden;
          margin: 0 auto;
          font-size: 1.2em;
          background: green;
        }
        #slider .container {
          position: relative;
          bottom: 0;
          right: 0;
          animation: slide-animation 15s infinite;
        }
        #slider .slide {
          margin-left: 70px;
          position: relative;
          box-sizing: border-box;
          padding: 20px 20px;
        }

        @keyframes slide-animation {
          0% { 
            opacity: 0;
            bottom: 0;
          }
          11% {
            opacity: 1;
            bottom: 0; 
          }
          22% { bottom: 100%; }
          33% { bottom: 100%; }
          44% { bottom: 200%; }
          55% { bottom: 200%; }
          66% { bottom: 300%; }
          77% { bottom: 300%; }
          88% {
            opacity: 1;
            bottom: 400%; 
          }
          100% {
            opacity: 0;
            bottom: 400%;
          }

          p{
            text-align: center;
          }


       </style>
        <nav class="nav1">
        <ul><b><b>
             <li><a href="">ADMINISTRATOR</a>
                <ul class="sub1">
                    <li><a href="masuk.php">MASUK HALAMAN ADMIN</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=6281328038299">CONTACT WEBMASTER</a></li>
                </ul>
            </li>
             <li><a href="">USER</a>
                <ul class="sub2">
                    <li><a href="register.php">REGISTER</a></li>
                      <li><a href="login.php">LOGIN</a></li>
                </ul>
            </li>

           <li><a href="">INFORMATION</a>
                <ul class="sub3">
                    <li><a href="about.php">ABOUT WEBSITE</a></li>
                    <li><a href="list.php">LIST PEMILIH TERDAFTAR</a></li>
                </ul>
            </li>
        
        </ul></b></b>
    </nav><br>


   <center>
     <table bgcolor="black">
            <td>
              <font face="algerian" color="silver" size="5"><b>QUICK GUIDE FOR NEW USER</b></font>
            </td>
      </table>
    </center>

     <div id="slider">
      <div class="container">
        <div class="slide"><br><br><br><br><br><br>
          <center><h1>MENDAFTAR</h1></center>
        </div>
        <div class="slide">
          <p>
            <ol><br><br>
              
                <li>Pilih "REGISTER" pada menu dropdown di bagian "USER"</li>
                <li>Isikan data data yang diminta pada form dengan data yang valid</li>
                <li>Klik "DAFTAR"</li>
                <li>Akan ada notifikasi "anda berhasil mendaftar, silahkan login untuk melanjutkan"</li>
                <li>Klik "OK", lalu anda akan secara otomatis dibawa ke halaman login user</li>
            </ol>
          </p>
        </div>
        <div class="slide"><br><br><br><br><br><br>
          <center><h1>MASUK SEBAGAI USER</h1></center>
        </div>
        <div class="slide">
          <p>
            <ol><br><br>
                <li>Jika anda user baru, setelah proses mendaftar anda akan langsung dibawa ke halaman login user</li>
                <li>Jika anda user lama dan sudah pernah mendaftar, pilih "LOGIN" pada menu dropdown di bagian "USER"</li>
                <li>Isikan NIM dan password anda dengan benar</li>
                <li>Jika login berhasil, akan ada notifikasi "login berhasil", klik "OK" dan anda akan dibawa ke halaman user</li>
                <li>Jika gagal, ulangi login dengan memasukkan kombinasi data yang valid</li>
            </ol>
          </p>
        </div>
       <div class="slide"><br><br><br>
          <center><h1>TERAKHIR...</h1></center><br>
          <center><h3>Pilih kandidat terbaik menurut anda (^_^)</h3></center>
        </div>
      </div>
    </div><br><br>

  <table bgcolor="black" width="100%"><td>
  <font face="calibri" color="silver"><marquee direction="right"><i>Site Version : V1.0 Under Copyright Act | Coded & Created By <a href="https://student.blog.dinus.ac.id/wahyunufalazmi/blogmaster-profile/"> Wahyu Nufal Azmi </a></i></marquee></font>
  </td></table>

</body>
</html>