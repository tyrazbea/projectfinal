<?php 

include('connection.php');
session_start();
if(!$_SESSION['email'])
{
  header("Location:index.php");
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
        <a class="navbar-brand" href="index.html"><img style ="margin:-0.15em;float: left;width: 250px;height: auto;" src="sass/img/logoo.jpg" >
        </a>
    
        
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Halaman Utama</a></li>
          <li><a href="blog.html">blog</a></li>
          <li><a href="contact.html">Hubungi Kami</a></li>
          <li><a href="BorangTempahan.php">Borang Tempahan</a></li>
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
<center><b><u><font face="Century Gothic" size="50">BORANG TEMPAHAN</font></u></b></center></br></br>
<div class="container" style="padding-top: 30px;border: 1px solid lightgray;border-radius: 5px;box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.2);vertical-align: middle; ">

  <div class="row">
    <div class="col-xs-12" id="demoContainer">
                <form id="registrationForm" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate" form name="form1" action="BorangTempahan.php" method="POST">

    <div class="form-group">
        <label class="col-xs-3 control-label">No IC</label>
        <div class="col-xs-4">
            <input type="number" name="a1" placeholder="xxxxxx-xx-xxxx" class="form-control" required />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Nama Penuh</label>
        <div class="col-xs-5">
            <input type="text" name="a2" placeholder="Nama Pelanggan" class="form-control" required />
        </div>
    </div>


    <div class="form-group">
        <label class="col-xs-3 control-label">Emel</label>
        <div class="col-xs-5">
            <input type="email" class="form-control" name="a3" required />
        </div>
    </div>
      
    <div class="form-group">
        <label class="col-xs-3 control-label">No Telefon</label>
        <div class="col-xs-5">
        <input type="number" class="form-control" name="a4" required />
        </div>
    </div>

<!--INSERT INTO `butiran`(`id`, `No_Daftar`, `Nama`, `Emel`, `No_Tel`, `Alamat`, `Jenis_Majlis`, `Jenis_Pakej`, `Tarikh_Majlis`, `KategoriLokasiMajlis`, `JumlahTetamu`, `catatan`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->           

    <div class="form-group">
        <label class="col-xs-3 control-label">Alamat</label>
        <div class="col-xs-5">
        <textarea class="form-control" name="a5" placeholder="" required />
        </textarea>
        </div>
    </div>    

          <div class="form-group">
          <label class="col-xs-3 control-label">Jenis Majlis</label>
          <div class="col-xs-5">
             <select class="form-control" name="a6">
              <?php
                $data1 = mysqli_query($connection,"SELECT * from majlis");
                while ($info1 = mysqli_fetch_array($data1)) 
                {
                  echo "<option hidden selected> -- PILIH JENIS --</option>";
                  echo "<option value = '$info1[id]'>$info1[majlis]</option>";
                }
               ?>
            </select><!-- daftar jenis baru -->
         </div> 

        </div>

        <div class="form-group">
          <label class="col-xs-3 control-label">Jenis Pakej</label>
          <div class="col-xs-5">
            <select class="form-control" name="a7">
              <?php
                $data2 = mysqli_query($connection,"SELECT * from pakej");
                while ($info2 = mysqli_fetch_array($data2)) 
                {
                  echo "<option hidden selected> -- PILIH JENIS --</option>";
                  echo "<option value = '$info2[id]'>$info2[pakej]</option>";
                }
               ?>
            </select><!-- daftar jenis baru -->
         </div> 

        <div class="col-xs-4">
        <label class="col-lg-2>">
        <a href="#" onClick="window.open ('index.html','jenis','resizable','height = 450','width = 450'); return false;">Matlumat lanjut pakej</a>
        </label>
        </div>
        </div>    

    <div class="form-group">
        <label class="col-xs-3 control-label">Tarikh Majlis</label>
        <div class="col-xs-5">
            <input type="date" class="form-control" name="a8" placeholder="RM 0.00" />
        </div>
    </div>

    <div class="form-group">
    <label class="col-xs-3 control-label">Kategori Lokasi Majlis</label>
      <div class="col-xs-5">
      <select class="form-control" name="a9">
        <option value="Rumah">Rumah</option>
        <option value="Pejabat">Pejabat</option>
        <option value="Hotel">Hotel</option>
        <option value="Dewan">Dewan</option>
        <option value="Outdoor/Taman">Outdoor/Taman</option>
      </select>
      </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Jumlah Tetamu</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="a10" placeholder="xxxx" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Terms of use</label>
        <div class="col-xs-9">
            <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                <p>Lorem ipsum dolor sit amet, veniam numquam has te. No suas nonumes recusabo mea, est ut greci definitiones. His ne melius vituperata scriptorem, cum paulo copiosae conclusionemque at. Facer inermis ius in, ad brute nominati referrentur vis. Dicat erant sit ex. Phaedrum imperdiet scribentur vix no, ad latine similique forensibus vel.</p>
                <p>Dolore populo vivendum vis eu, mei quaestio liberavisse ex. Electram necessitatibus ut vel, quo at probatus oportere, molestie conclusionemque pri cu. Brute augue tincidunt vim id, ne munere fierent rationibus mei. Ut pro volutpat praesent qualisque, an iisque scripta intellegebat eam.</p>
                <p>Mea ea nonumy labores lobortis, duo quaestio antiopam inimicus et. Ea natum solet iisque quo, prodesset mnesarchum ne vim. Sonet detraxit temporibus no has. Omnium blandit in vim, mea at omnium oblique.</p>
                <p>Eum ea quidam oportere imperdiet, facer oportere vituperatoribus eu vix, mea ei iisque legendos hendrerit. Blandit comprehensam eu his, ad eros veniam ridens eum. Id odio lobortis elaboraret pro. Vix te fabulas partiendo.</p>
                <p>Natum oportere et qui, vis graeco tincidunt instructior an, autem elitr noster per et. Mea eu mundi qualisque. Quo nemore nusquam vituperata et, mea ut abhorreant deseruisse, cu nostrud postulant dissentias qui. Postea tincidunt vel eu.</p>
                <p>Ad eos alia inermis nominavi, eum nibh docendi definitionem no. Ius eu stet mucius nonumes, no mea facilis philosophia necessitatibus. Te eam vidit iisque legendos, vero meliore deserunt ius ea. An qui inimicus inciderint.</p>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" value="agree" /> Agree with the terms and conditions
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <button type="submit" class="btn btn-primary" name="submit" value="Daftar">Submit</button>
        </div>
    </div>
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
