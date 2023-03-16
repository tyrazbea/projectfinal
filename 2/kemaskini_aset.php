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


//<!--INSERT INTO `butiran`(`id`, `No_Daftar`, `Nama`, `Emel`, `No_Tel`, `Alamat`, `Jenis_Majlis`, `Jenis_Pakej`, `Tarikh_Majlis`, `KategoriLokasiMajlis`, `JumlahTetamu`, `catatan`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->

	$data = mysqli_query($connection,"UPDATE butiran set catatan='$a1' where id='$a2'") or die(mysqli_error());
	echo "<script>alert('Kemaskini maklumat yang telah direkodkan');
	window.location = 'senarai_aset.php'</script>";
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
        <a class="navbar-brand" href="page_admin.php"><img style ="margin:-0.15em;float: left;width: 250px;height: auto;" src="sass/img/logoo.jpg" >
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

<br><br>
<center>
	  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form name="form1" action="kemaskini_aset.php" method="POST">
        <fieldset>

          <!-- Form Name -->
          <legend>KEMASKINI CATATAN</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput"> Catatan </label>
            <div class="col-sm-10">
            <input type="hidden" name="a2" id="a2" value="<?php echo $infoAset['id']; ?>"/>
            <select name="a1" id="a1" class="form-control">
				<option value="Tempahan Baru">---PILIH CATATAN---</option>
				<option value="Telah Didaftar">Telah Didaftar</option>
				<option value="Urusan Selesai">Urusan Selesai</option>
				<option value="Proses Pengurusan">Proses Pengurusan</option>
			</select>
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary" name="button" id="button" >Kemaskini</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

	<a href="page_admin.php">Halaman Utama</a> |
	<a href="senarai_aset.php">Senarai tempahan</a> 
	

</center>
<?php } ?>
</body>
</html>