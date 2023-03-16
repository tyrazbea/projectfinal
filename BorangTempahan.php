<?php 

include('connection.php');
/*session_start();
if(!$_SESSION['email'])
{
  header("Location:index.php");
} */
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

$data = mysqli_query($connection,"INSERT into butiran (No_Daftar, Nama, Emel, No_Tel, Alamat, majlis, pakej, Tarikh_Majlis, KategoriLokasiMajlis, JumlahTetamu, catatan) values ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','Tempahan Baru')") or die(mysqli_error());
echo $data;

echo "<script>alert('Rekod telah disimpan'); window.location='index.html'</script>";
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
    <link rel="stylesheet" href="sass/Footer-with-button-logo.css"> <!--Footer punyer css-->

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
<div class="example3">
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
          <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="index.html">Halaman Utama</a></li>
          <li style="font-face:Comic Sans MS;font-weight: bold;"><a href="blog.html">Blog</a></li>
      <li style="font-face:Comic Sans MS;font-weight: bold;"><a href="contact.html">Hubungi Kami</a></li>
      <li style="font-face:Comic Sans MS;font-weight: bold;"><a href="http://127.0.0.1/stm2/borangtempahan.php">Borang Tempahan</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font style="font-face:Comic Sans MS;font-weight:bold;"></font><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#"></a></li>
              <li><a href="http://127.0.0.1/stm2/2/FLogin.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp; <font style="font-face:Comic Sans MS;font-weight:bold;">LOG MASUK</font></a></li>
              <li class="divider"></li>
        <!--  <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li> -->
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>

<!--TAB-->

<!--TAB-->
<!--*******************NAVIGATION BAR HERE***************************-->

<br>
<center><b><u><font face="Century Gothic" size="50">BORANG TEMPAHAN</font></u></b></center></br></br>
<div class="container" style="padding-top: 30px;border: 1px solid lightgray;border-radius: 5px;box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.2);vertical-align: middle; ">

  <div class="row">
    <div class="col-xs-12" id="demoContainer">
                <form id="registrationForm" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate" form name="form1" action="http://127.0.0.1/stm2/BorangTempahan.php" method="POST">

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
            <input type="email" class="form-control" name="a3" placeholder="exp : xxxx@gmail.com" required />
        </div>
    </div>
      
    <div class="form-group">
        <label class="col-xs-3 control-label">No Telefon</label>
        <div class="col-xs-5">
        <input type="number" class="form-control" name="a4" placeholder="xxx-xxxxxxx" required />
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
        <a href="#" onClick="window.open ('promosi.html','jenis','resizable','height = 450','width = 450'); return false;">Matlumat lanjut pakej</a>
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
        <label class="col-xs-3 control-label">Terma dan Syarat</label>
        <div class="col-xs-9">
            <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                <p><center>
                <font face="Arial" size="5" >Syarat Yang Ditetapkan bagi Penempahan</font></p> </center>
                <p>1. Deposit 10% dibayar pada permulaan untuk kuncikan tarikh  majlis anda.</p>
                <p>2. Pada 2 bulan sebelum majlis, 10% lagi diserahkan untuk persediaan barangan kering catering.</p>
                <p>3. Dan 70% sebulan sebelum majlis utk persediaan menyeluruh.<p>
                <p>4. Seterusnya 10% antara tempoh sebulan ke majlis berlangsung.Baki akhir hendaklah dibayar selepas pelamin siap dipasang.</p>
                <p>5. Jika tempahan dibuat 2 bulan sebelum majlis, pembayaran sama seperti diaatas iaitu 10% semasa mengunci tarikh.80% dalam tempoh seminggu.Dan bakinya selepas pelamin dipasang.</p>

                <br><br>

                <p><center>
                <font face="Arial" size="5" >Syarat Yang Ditetapkan Oleh Website</font></p> </center>
                <p>1. Rekod Penempahan Anda akan Diproses dalam 3 Hari untuk permohonan tetap</p>
                <p>2. Dalam masa 3 hari, Anda Akan mendapat email daripada kami untuk kemaskini rekod baru anda jika terdapat perubahan</p>
                <p>3. Permohonan Berjaya jika semua maklumat borang tempahan lengkap diisi <p>
                <p>4. Sila Masukkan maklumat yang tepat dan benar</p>
                <p>5. Umur Anda mestilah lingkungan 20 keatas</p>
                <p>6. Borang akan diluluskan jika anda menepati terma dan syarat diatas</p>

</p>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" value="agree" /> Mengikut Terma dan Syarat
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


<!--FOOTER--FOOTER--FOOTER--FOOTER--FOOTER--FOOTER--FOOTER--FOOTER--FOOTER-->
<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <h2 class="logo"><a href="#"><img src="sass/img/circlelogo.png" height="150" width="150"></a></h2>
                </div>
                <div class="col-xs-2">
                    <h5>Mula</h5>
                    <ul>
                        <li><a href="index.html">Halaman Utama</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <h5>Tentang Kami</h5>
                    <ul>
                        <li><a href="contact.html">Hubungi Kami</a></li>
                        <li><a href="#">0 10-2559754</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <h5>Buat Tempahan</h5>
                    <ul>
                        <li><a href="http://127.0.0.1/stm2/2/Flogin.php">Log Masuk</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-xs-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=60196503807"><button type="button" class="btn btn-default">Whatsapp Kami</button></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2017 Cahaya Infiniti </p>
        </div>
    </footer>
<!--FOOTER-->



</center>

<?php } ?>

</body>
</html>
