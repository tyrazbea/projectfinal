<?php

include('connection.php');

session_start();
$id = $_GET['id'];

if(!$_SESSION['email'])
{
	 header("Location: http://127.0.0.1/stm2/2/FLogin.php");
}

if(isset($_POST["a1"]))
{
	$a1 = $_POST["a1"];

	$data = mysqli_query($connection,"UPDATE majlis set majlis='$a1' where id='$id'") or die(mysqli_error());
	echo "<script>alert('Kemaskini maklumat yang telah direkodkan');
	window.location = 'update_majlis.php'</script>";
}else
{
	$query = mysqli_query($connection,"SELECT * from majlis where id = '$id'");

	while ($result = mysqli_fetch_array($query)) 
	{
		$idMajlis = $result['id']; //dataLokasi
		$dataMajlis = $result['majlis'];
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
	<br><br>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form name="form1" action="kemaskini_majlis.php?id=<?php echo $id; ?>" method="POST">
        <fieldset>


          <!-- Form Name -->
          <legend><h3>KEMASKINI JENIS MAJLIS</h3></legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nama Majlis</label>
            <div class="col-sm-10">
              <input type="text" name="a1" id="a1" value="<?php echo $dataMajlis; ?>"/ class="form-control">
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

	<a href="senarai_aset.php">Senarai Aset</a> |
	<a href="logout.php">Log Keluar</a>

</center>
<?php } ?>
</body>
</html>