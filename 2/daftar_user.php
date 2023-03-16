<?php 

include('connection.php');
session_start();
if(!$_SESSION['email'])
{
   header("Location: http://127.0.0.1/stm2/2/FLogin.php");
}
if(isset($_POST["email"]))
{
  $email = $_POST["email"];
  $password = $_POST["password"];
  $name = $_POST["name"];




//<!--INSERT INTO `butiran`(`id`, `No_Daftar`, `Nama`, `Emel`, `No_Tel`, `Alamat`, `Jenis_Majlis`, `Jenis_Pakej`, `Tarikh_Majlis`, `KategoriLokasiMajlis`, `JumlahTetamu`, `catatan`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->

$data = mysqli_query($connection,"INSERT into pelanggan (email, password, name,level) values ('$email','$password','$name','Pengguna')") or die(mysqli_error());
echo $data;

echo "<script>alert('Rekod telah disimpan'); window.location='page_admin.php'</script>";
}
else
{
?>

<!DOCTYPE html>
<html>
<head>
  <title>DASHBOARD PENTADBIR ASET</title>
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
        <a class="navbar-brand" href="http://disputebills.com"><img style ="margin:-0.15em;float: left;width: 250px;height: auto;" src="sass/img/logoo.jpg" >
        </a>
    
        
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
        <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="senarai_aset.php">Butiran Tempahan</a></li>
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

<center> <h3>DAFTAR ASET BARU</h3>
<form action="daftar_user.php" name="form1" method="POST">
  <fieldset>
    <table width="600" border="0" align="center">
      <thead>
        <tr><th>
          
        </th></tr>
      </thead>
      <tbody>
        <tr>
          <td><label>Email :</label>
            <input type="email" name="email" placeholder="xxxxx@gmail.com" required />
          </td>
        </tr>

        <tr>
          <td><label>KataLaluan :</label>
            <input type="password" name="password" placeholder="KataLaluan" required />
          </td>
        </tr>
      
        <tr>
          <td><label>Nama Pengguna :</label>
            <input type="name" name="name" placeholder="Nama Pengguna" required />
          </td>
        </tr>

        <tr>                                        
          <td><input type="submit" name="submit" value="Daftar" /></td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</form><br>
<a href="page_admin.php">Ke Menu Utama</a>
<a href="logout.php">Log Keluar</a>


</center>

<?php } ?>

</body>
</html>
