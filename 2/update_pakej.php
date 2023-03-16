<?php 

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	 header("Location: http://127.0.0.1/stm2/2/FLogin.php");
}

if(isset($_POST["pakej"]))
{
	$pakej = $_POST["pakej"]; //jenis
	$data = mysqli_query($connection,"INSERT into pakej (pakej) values ('$pakej')") or die(mysqli_error());

	echo "<script>alert('Jenis pakej telah direkodkan');
	window.location='page_admin.php'</script>";
}

else{
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
        <a class="navbar-brand" href="page_admin.php"><img style ="margin:-0.15em;float: left;width: 250px;height: auto;" src="sass/img/logoo.jpg" >
        </a>
    
        
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
        <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="update_majlis.php">Kemaskini Majlis</a></li>
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

<br>
<center><h3>DAFTAR JENIS PAKEJ</h3>
<form name="form1" action="update_pakej.php" method="POST">
	<fieldset>
		<label>Jenis Pakej: </label>
		<input type="text" name="pakej" value=""  />
		<input type="submit" name="Tambah" value="Tambah" class="btn btn-primary">
	</fieldset>
</form>

<br>
<h3>SENARAI JENIS PAKEJ YANG BOLEH DITEMPAH</h3>

        <div id="page-wrapper">

            <div class="container-fluid">


                <!-- Page Heading -->
                <div class="row">
                <div class="col-lg-1"> </div>

                    <div class="col-lg-10">
                     <div class="table-responsive">
                      <table class="table border">
                       <thead>
	
<tr>
	<th width="40"><b>Bil.</b></th>
	<th width="120"><b>Jenis</b></th>
	<th width="100"><b>Kemaskini</b></th>
	<th width="100"><b>Hapus</b></th>
</tr>

<?php 
	$data1 = mysqli_query($connection,"select * from pakej");
	$no=1;
	while ($info1 = mysqli_fetch_array($data1)) {
 ?>

 <tr>
 	<td><?php echo $no; ?></td>
 	<td><?php echo $info1['pakej']; ?></td>

  <td><a href="kemaskini_jenis.php?id=<?php echo $info1['id']; ?>"><button class="btn btn-warning">Kemaskini</button></td>
  <td><a href="hapus_pakej.php?id=<?php echo $info1['id']; ?>"><button class="btn btn-danger">Hapus</button></td>
 </tr>
 <?php 

 	$no++;
 }

  ?>
</table>

          </div>
                  <div class="col-lg-1">
                  </div>
                     </div>
<center>
<div class="row">
<div class="col-sm-12">
<a href="page_admin.php">ke Halaman utama</a> |
<a href="update_majlis.php">Kemaskini Majlis</a> |
<a href="logout.php">Log Keluar</a>
</center>
</div>
</div>
<br> <br>
<?php } ?>
</body>
</html>