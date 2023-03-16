<?php 

include('connection.php');
session_start();
if(!$_SESSION['email'])
{
	 header("Location: http://127.0.0.1/stm2/2/FLogin.php");
}
if(isset($_POST["a1"]))
{
	$a1 = $_POST["a1"];
	$a2 = $_POST["a2"];
	$a3 = $_POST["a3"];
	$a4 = $_POST["a4"];
	$a5 = $_POST["a5"];
	$a6 = $_POST["a6"];
	$a7 = $_POST["a7"];
	$a8 = $_POST["a8"];
	$a9 = $_POST["a9"];
	$a10 = $_POST["a10"];


//<!--INSERT INTO `butiran`(`id`, `No_Daftar`, `Nama`, `Emel`, `No_Tel`, `Alamat`, `Jenis_Majlis`, `Jenis_Pakej`, `Tarikh_Majlis`, `KategoriLokasiMajlis`, `JumlahTetamu`, `catatan`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->

$data = mysqli_query($connection,"INSERT into butiran (No_Daftar, Nama, Emel, No_Tel, Alamat, majlis, pakej, Tarikh_Majlis, KategoriLokasiMajlis, JumlahTetamu, catatan) values ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','daftar')") or die(mysqli_error());
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
        <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="laporan_pakej.php">Butiran Tempahan</a></li>
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
<form action="daftar_asetbaru.php" name="form1" method="POST">
	<fieldset>
		<table width="600" border="0" align="center">
			<thead>
				<tr><th>
					
				</th></tr>
			</thead>
			<tbody>
				<tr>
					<td><label>No Daftar :</label>
						<input type="text" name="a1" placeholder="xxxxxx-xx-xxxx" required />
					</td>
				</tr>

				<tr>
					<td><label>Nama :</label>
						<input type="text" name="a2" placeholder="Nama Pelanggan" required />
					</td>
				</tr>
			
				<tr>
					<td><label>Emel :</label>
						<input type="email" name="a3" placeholder="Emel" required />
					</td>
				</tr>
			
				<tr>
				<tr>
					<td><label>No Telefon :</label>
						<input type="text" name="a4" placeholder="No Telefon" required />
					</td>
				</tr>

<!--INSERT INTO `butiran`(`id`, `No_Daftar`, `Nama`, `Emel`, `No_Tel`, `Alamat`, `Jenis_Majlis`, `Jenis_Pakej`, `Tarikh_Majlis`, `KategoriLokasiMajlis`, `JumlahTetamu`, `catatan`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->						
				<tr>
					<td><label>Alamat :</label>
						<input type="text" name="a5" placeholder="Alamat" required />
					</td>
				</tr>
				<tr>

					<td><label>Jenis Majlis :</label>
						<select name="a6" required>
							<?php
								$data1 = mysqli_query($connection,"SELECT * from majlis");
								while ($info1 = mysqli_fetch_array($data1)) 
								{
									echo "<option hidden selected> -- PILIH JENIS --</option>";
									echo "<option value = '$info1[id]'>$info1[majlis]</option>";
								}
							 ?>
						</select><!-- daftar jenis baru -->
						<a href="#" onClick="window.open ('update_majlis.php','jenis','resizable','height = 450','width = 450'); return false;">Daftar Jenis Majlis</a>
					</td>
				</tr>

				<tr>
					<td><label>Jenis Pakej :</label>
						<select name="a7" required>
							<?php
								$data2 = mysqli_query($connection,"SELECT * from pakej");
								while ($info2 = mysqli_fetch_array($data2)) 
								{
									echo "<option hidden selected> -- PILIH JENIS --</option>";
									echo "<option value = '$info2[id]'>$info2[pakej]</option>";
								}
							 ?>
						</select><!-- daftar jenis baru -->
						<a href="#" onClick="window.open ('update_pakej.php','jenis','resizable','height = 450','width = 450'); return false;">Daftar Jenis Pakej</a>
					</td>
				</tr>

				<tr>
					<td><label>Tarikh Majlis :</label>
						<input type="date" name="a8" placeholder="CATATAN ASET" required />
					</td>
				</tr>
				<tr>

				<tr>
					<td><label>Kategori Lokasi Majlis :</label>
						<select name="a9">
 						<option value="Rumah">Rumah</option>
  						<option value="Pejabat">Pejabat</option>
  						<option value="Hotel">Hotel</option>
  						<option value="Dewan">Dewan</option>
  						<option value="Outdoor/Taman">Outdoor/Taman</option>
						</select>
					</td>
				</tr>

				<tr>
					<td><label>Jumlah Tetamu :</label>
						<input type="text" name="a10" placeholder="Jumlah Tetamu" required />
					</td>
				</tr>
				<tr>																				
					<td><input type="submit" name="submit" value="Daftar" /></td>
				</tr>
			</tbody>
		</table>
	</fieldset>
</form><br>

</form>
    </div>
  </div>
   </div>

<a href="page_admin.php">Ke Menu Utama</a>
<a href="logout.php">Log Keluar</a>


</center>

<?php } ?>

</body>
</html>
