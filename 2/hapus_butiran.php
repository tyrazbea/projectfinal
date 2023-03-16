<?php 

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}

if(isset($_GET["id"]))
{

	mysqli_query($connection,"DELETE from butiran where id='$_GET[id]'") or die(mysqli_error());

	echo "<script>alert('Rekod telah dihapuskan');
	window.location = 'page_admin.php'</script>";
}

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

</head>
<body>
<br>
<center><h3>HAPUS DATA BUTIRAN TEMPAHAN</h3>
<!--<fieldset> -->

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
			<th width="243"><b>No Daftar</b></th>
			<th width="150"><b>Nama</b></th>
			<th width="102"><b>Emel</b></th>
			<th width="154"><b>No Telefon</b></th>
			<th width="138"><b>Alamat</b></th>
			<th width="138"><b>Jenis Majlis</b></th>
			<th width="138"><b>Jenis Pakej</b></th>
			<th width="138"><b>Tarikh Majlis</b></th>
			<th width="138"><b>Kategori Lokasi Majlis</b></th>
			<th width="138"><b>Jumlah Tetamu</b></th>
			<th width="138"><b>Catatan</b></th>
		</tr>
		</thead>

		<tbody>
		<?php 
			$data1 = mysqli_query($connection,"select * from butiran");
			$no=1;
			while ($info1 = mysqli_fetch_array($data1)) {
		 		$data2 = mysqli_query($connection,"select * from pakej where id='$info1[pakej]'");
				$info2 = mysqli_fetch_array($data2);

				$data3 = mysqli_query($connection,"select * from majlis where id='$info1[majlis]'");
				$info3 = mysqli_fetch_array($data3);
			
		 ?>
		 <tr>
		 	<td><?php echo $no; ?></td>
			<td><?php echo $info1['No_Daftar']; ?></td>
			<td><?php echo $info1['Nama'] ?></td>
			<td><?php echo $info1['Emel'] ?></td>
			<td><?php echo $info1['No_Tel'] ?></td>
			<td><?php echo $info1['Alamat'] ?></td>
			<td><?php echo $info3['majlis'] ?></td>
			<td><?php echo $info2['pakej'] ?></td>
			<td><?php echo $info1['Tarikh_Majlis'] ?></td>
			<td><?php echo $info1['KategoriLokasiMajlis'] ?></td>
			<td><?php echo $info1['JumlahTetamu'] ?></td>
			<td><?php echo $info1['catatan'] ?></td>

		 	<td><a href="hapus_butiran.php?id=<?php echo $info1['id']; ?>"><button class="btn btn-danger">Hapus</button></td>
		 </tr>
		 <?php 
		 	$no++;
		 }
		 ?>
		 </tbody>
	</table>
<!--</fieldset> -->

					</div>
                	<div class="col-lg-1"> </div>
                    </div>	

<center>
<div class="row">
<div class="col-sm-12">
<a href="page_admin.php">ke Halaman utama</a> |
<a href="logout.php">Log Keluar</a>
</center>
</div>
</div>

</center>
<?php ?>
</body>
</html>