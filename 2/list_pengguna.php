<?php 

	include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD PENTADBIR ASET</title>
<head>
  <title>Senarai Pengguna</title>
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
        <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="register.php">Tambah Pengguna</a></li>
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

<br><br>

<center><h3>SENARAI AKAUN PENGGUNA</h3><br><fieldset>
	<br>
        <div id="page-wrapper">

            <div class="container-fluid">


                <!-- Page Heading -->
                <div class="row">
                <div class="col-lg-1"> </div>

                    <div class="col-lg-10">
                     <div class="table-responsive">
                      <table class="table border">
                       <thead>
  <!--<table width="811" border="1" align="center"> -->
		<tr>
			<td width="40"><b>Bil.</b></td>
			<td width="243"><b>Emel Pengguna</b></td>
			<td width="150"><b>KataLaluan Pengguna</b></td>
      <td width="150"><b>Nama Pengguna</b></td>
			<td width="154"><b>Delete</b></td>
		</tr>

		<?php 

			$data1 = mysqli_query($connection,"select uid, email, password, name from pelanggan where level = 'Pengguna' ");
			$no=1;
			while ($info1 = mysqli_fetch_array($data1)) 
			{
			
//<!--INSERT INTO `pelanggan`(`uid`, `email`, `password`, `name`, `level`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5]) -->
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $info1['email']; ?></td>
			<td><?php echo $info1['password'] ?></td>
			<td><?php echo $info1['name'] ?></td>
			
      <td><a href="padam_pengguna.php?uid=<?php echo $info1['uid']; ?>"><button class="btn btn-danger">Padam Pengguna</button></td>
		</tr>
		<?php $no++;
		}
		?>
	</table>
</fieldset> <br>
<a href="page_admin.php">Halaman Utama</a> |
<a href="register.php">Tambah Pengguna</a> |
<a href="#" onClick="window.open ('http://127.0.0.1/stm2/2/senarai_aset.php','jenis','resizable','height = 200','width = 450'); return false;">Kemaskini Maklumat Pengguna</a> |
<a href="senarai_aset.php">Butiran Tempahan Pengguna</a>
</center>
</body>
</html>