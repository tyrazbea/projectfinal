<?php 

  include('connection.php');

session_start();
if(!$_SESSION['email'])
{
   header("Location: http://127.0.0.1/stm2/2/FLogin.php");
}
//include_once 'connection.php';
?>

<!doctype html>
<html>
<title>Register</title>
<head>
	<title>User Registration Script</title>
  <title>User Registration Script</title>
    <link href="sass/logo.css" rel="stylesheet"> <!--LOGO-->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!--BOOSTRAP-->
    <link href="look.css" rel="stylesheet"> <!--menu punyer CSS -->

    <link href="sass/nav.css" rel="stylesheet"> <!--SLIDER punyer css-->


    <link href='https://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
</head>
<body>

<!-----------------BACKGROUND---------------->
<body style="  background: url('blue.png') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
">
<!-----------------BACKGROUND----------------->


<!--*******************NAVIGATION BAR HERE***************************-->
<div class="example3" >
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="page_admin.php"><img style ="margin:-0.15em;float: left;width: 250px;height: auto;" src="sass/img/logoo.jpg" >
        </a>
    
        
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
        <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="senarai_aset.php">Butiran Tempahan</a></li>
        <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="list_pengguna.php">Senarai Pengguna</a></li>
          <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="page_admin.php">Halaman Utama</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; <font style="font-face:Comic Sans MS;font-weight:bold;">LOG KELUAR</font></a></li>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
<!--*******************NAVIGATION BAR HERE***************************-->

<div class="container" >
	<div class="row" style="width: 1000px auto; margin: 16px auto;">
		<div class="col-md-4 col-md-offset-4 well">
		<form action ="" method = "POST">

		<legend style="  padding: 5px;font-size: 1.4em;font-weight: bold;text-align: center;text-transform: uppercase;">Daftar Pengguna Baru</legend>

		<div class="form-group">
		<label>Emel</label>
		<input type = "email" name ="email" class="form-control" />
		</div>

		<div class="form-group">
		<label>KataLaluan</label>
		<input type = "text" name ="password" class="form-control" />
		</div>

		<div class="form-group">
		<label>Nama Pengguna</label>
		<input type = "name" name ="name" class="form-control" /> 
		<a href="#" onClick="window.open ('http://127.0.0.1/stm2/2/senarai_aset.php','jenis','resizable','height = 200','width = 450'); return false;">Senarai Penempahan</a>
    </div>



<button type="submit" class="btn btn-primary btn-lg btn-block" value = "Go!" name ="submit" >SIGN UP</button>
</form>

<?php
if(isset($_POST['submit'])) {
//mysql_real_escape_string() special character in a string for use in an SQL Statement
$email= ($_POST['email']);
$password= ($_POST['password']);
$name= ($_POST['name']);


$con = mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('stm2') or die ("cannot select DB");

$query = mysql_query("SELECT * FROM pelanggan WHERE email = '".$email."' AND name = '".$name."' ");

$numrows = mysql_num_rows($query);
if($numrows==0) {

//md5() calculate the MD5 hash of a string
//$encrypt_password = md5($KataLaluan);

$sql="INSERT INTO pelanggan (email,password,name,level) VALUES('$email','$password','$name','Pengguna')";

//$sql = "INSERT INTO pelanggan(No_IC,KataLaluan) VALUES('$No_IC','$KataLaluan')";

$result= mysql_query($sql);

if($result!=1) {
echo "Pengguna Telah didaftar";
}

else{
   echo "<script>";
   echo "alert('Akaun Pengguna Telah Didaftar ');";
   echo "</script>";
}

} else {
   echo "<script>";
   echo "alert('Email telah digunakan.. Sila Masukkan Email Lain');";
   echo "</script>";

//echo "That username already exists! Please try again with another";
}
}
?>

			</form>
		</div>
	</div>


	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		<div class="container"><center>  
<!--		<span class="highlight" ><strong>Pengguna Baru? </strong>—</span>
  &nbsp 
  <span class="highlight2"><span>DAFTAR SEKARANG </span> -->	
</div>
	
		<a href="page_admin.php">Halaman Utama</a> | <a href="senarai_aset.php"> Butiran Tempahan</a> | <a href="list_pengguna.php">Senarai Pengguna</a>
	
		</div>
	</div>
</div>


</body>
</html>