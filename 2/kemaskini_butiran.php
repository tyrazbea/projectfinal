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


//<!--INSERT INTO `butiran`(`id`, `No_Daftar`, `Nama`, `Emel`, `No_Tel`, `Alamat`, `Jenis_Majlis`, `Jenis_Pakej`, `Tarikh_Majlis`, `KategoriLokasiMajlis`, `JumlahTetamu`, `catatan`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->



	$data = mysqli_query($connection,"UPDATE butiran set No_Tel='$a1',Alamat='$a2', majlis='$a3', pakej='$a4', Tarikh_Majlis='$a5',KategoriLokasiMajlis='$a6',JumlahTetamu='$a7' where id='$a8'") or die(mysqli_error());
	echo "<script>alert('Kemaskini maklumat yang telah direkodkan');
	window.location = 'Sbutiran_pengguna.php'</script>";
}
else
{
	$dataAset = mysqli_query($connection,"select * from butiran where id='$_GET[id]'");
	$infoAset = mysqli_fetch_array($dataAset);

	$dataJenis = mysqli_query($connection,"select * from pakej where id='$infoAset[pakej]'");
	$infoJenis = mysqli_fetch_array($dataJenis);

	$dataLokasi = mysqli_query($connection,"select * from majlis where id='$infoAset[majlis]'");
	$infoLokasi = mysqli_fetch_array($dataLokasi);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD ADMIN - Cahaya Infiniti</title>
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
        <a class="navbar-brand" href="page_pengguna.php"><img style ="margin:-0.15em;float: left;width: 250px;height: auto;" src="sass/img/logoo.jpg" >
        </a>
    
        
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
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

<center>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" name="form1" action="kemaskini_butiran.php" method="POST">
        <fieldset>

          <!-- Form Name -->
          <legend><h3>KEMASKINI BUTIRAN BAGI PENGGUNA</h3></legend>

          <!-- Text input-->
          <div class="form-group">
          <input type="hidden" name="a8" id="a8" value="<?php echo $infoAset['id']; ?>"/>
            <div class="col-sm-10">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">No Telefon</label>
            <div class="col-sm-10">
              <input type="number" name="a1" id="a1" value="<?php echo $infoAset['No_Tel']; ?>" class="form-control"/>
            </div>
          </div>          

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Alamat</label>
            <div class="col-sm-10">
              <input type="text" name="a2" id="a2" value="<?php echo $infoAset['Alamat']; ?>" class="form-control"/> 
            </div>
          </div>          

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Jenis Majlis</label>
            <div class="col-sm-10">
			<select name="a3" class="form-control" >
			<option selected value="<?php echo $infoLokasi['id']; ?>"> <?php echo $infoLokasi['majlis']; ?></option>
				<?php
				$data2 = mysqli_query($connection,"select * from majlis");
				while ($info2 = mysqli_fetch_array($data2)) {
				echo "<option value = '$info2[id]'>$info2[majlis]</option>";
							}
				?></select>&nbsp;
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Jenis Pakej</label>
            <div class="col-sm-10">
              <select name="a4" class="form-control">
			  <option selected value="<?php echo $infoJenis['id']; ?>"> <?php echo $infoJenis['pakej']; ?></option>
			   <?php
				$data1 = mysqli_query($connection,"select * from pakej where id <> '$infoAset[pakej]'");
				while ($info1 = mysqli_fetch_array($data1)) {
				echo "<option value = '$info1[id]'>$info1[pakej]</option>";
				}
			?></select>&nbsp;
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Tarikh Majlis</label>
            <div class="col-sm-4">
              <input type="date" name="a5" id="a5" value="<?php echo $infoAset['Tarikh_Majlis']; ?>" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Jumlah Tetamu</label>
            <div class="col-sm-4">
              <input type="number" name="a7" id="a7" value="<?php echo $infoAset['JumlahTetamu']; ?>" class="form-control">
            </div>
          </div>



          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Kategori Lokasi Majlis</label>
            <div class="col-sm-10">
             <select name="a6" class="form-control">
 				<option value="Rumah">Rumah</option>
  				<option value="Pejabat">Pejabat</option>
  				<option value="Hotel">Hotel</option>
  				<option value="Dewan">Dewan</option>
  				<option value="Outdoor/Taman">Outdoor/Taman</option>
			</select>
            </div>
          </div>
         

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary" name="button" id="button">Kemaskini</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<br>
	<a href="page_pengguna.php">Halaman Utama</a> |
	<a href="Laporan_pakej.php">Laporan Pakej</a> |
	<a href="Laporan_majlis.php">Laporan Majlis</a>

</center>
<?php } ?>
</body>
</html>