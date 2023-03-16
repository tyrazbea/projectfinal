<?php 

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	 header("Location: http://127.0.0.1/stm2/2/FLogin.php");
}

if(isset($_POST["majlis"]))
{
	$majlis = $_POST["majlis"];
	$data = mysqli_query($connection,"INSERT into majlis (majlis) values ('$majlis')") or die(mysqli_error());

	echo "<script>alert('Jenis majlis baru telah direkodkan');
	window.location='page_admin.php'</script>";
}

else{
?>

<html>
<head>
    <!-- Custom styles for this template -->
    <link href="sass/logo.css" rel="stylesheet"> <!--LOGO-->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!--BOOSTRAP-->
    <link href="look.css" rel="stylesheet"> <!--menu punyer CSS -->
    <link rel="stylesheet" href="sass/Footer-with-button-logo.css"> <!--Footer punyer css-->
    <link href="slider.css" rel="stylesheet"> <!--SLIDER punyer css-->
    <link href="sass/nav.css" rel="stylesheet"> <!--SLIDER punyer css-->
    <link href="sass/contact.css" rel="stylesheet"> <!--CONTACT punyer css-->
    <link href="sass/tab.css" rel="stylesheet" type="text/css"> <!--TAB-->
    <link href="sass/box.css" rel="stylesheet" type="text/css"> <!--TAB-->
    <link href="sass/post.css" rel="stylesheet" type="text/css"> <!--TAB-->
    <link href='https://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title> CAHAYA INFINITI </title>
</head>
<body>

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
        <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="update_pakej.php">Kemaskini Pakej</a></li>
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


<br>
<center><h3>DAFTAR JENIS MAJLIS</h3>
<form name="form1" action="update_majlis.php" method="POST">
	<fieldset>
		<label>Jenis Majlis : </label>
		<input type="text" name="majlis" value="" />
		<input type="submit" name="Tambah" value="Tambah" class="btn btn-primary">
	</fieldset>
</form>

<br>
<h3>SENARAI JENIS MAJLIS YANG BOLEH DITEMPAH</h3>
<br>
<!--<table width="400" border="1" align="center">
	
<tr>
	<td width="40"><b>Bil.</b></td>
	<td width="120"><b>Lokasi</b></td>
	<td width="100"><b>Kemaskini</b></td>
	<td width="100"><b>Hapus</b></td>
</tr> -->


                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table border">
                                <thead>
                                    <tr>
									<th ><b>Bil.</b></th>
									<th ><b>Lokasi</b></th>
									<th ><b>Kemaskini</b></th>
									<th ><b>Hapus</b></th>
                                    </tr>

<?php 
	$data1 = mysqli_query($connection,"select * from majlis");
	$no=1;
	while ($info1 = mysqli_fetch_array($data1)) {
 ?>
</thead>
<tbody>

 <tr>
 	<td><?php echo $no; ?></td>
 	<td><?php echo $info1['majlis']; ?></td>

  <td><a href="kemaskini_majlis.php?id=<?php echo $info1['id']; ?>"><button class="btn btn-warning">Kemaskini</button></td>
  <td><a href="hapus_majlis.php?id=<?php echo $info1['id']; ?>"><button class="btn btn-danger">Hapus</button></td>
 </tr>
 <?php 

 	$no++;
 }

  ?>
</tbody>
</table>
</div>
</div>

<div class="col-lg-3">
</div>

</div>

  <br>
	<a href="page_admin.php">Ke Halaman Utama</a> |
  <a href="update_pakej.php">Kemaskini Pakej</a> |
	<a href="logout.php">Log Keluar</a>

</center>
<?php } ?>
</body>
</html>