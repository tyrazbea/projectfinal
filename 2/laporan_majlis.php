<?php 

    include('connection.php');
    session_start();

    if(!isset($_SESSION['email']))
    {
         header("Location: http://127.0.0.1/stm2/2/FLogin.php");
    }

    if(isset($_GET["id"]))
    {
        $data1=mysqli_query($connection,"select * from butiran where majlis='$_GET[id]'");
    }
    else
    {
        $data1=mysqli_query($connection,"select * from butiran");
    }

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
    <title>DASHBOARD USER - Cahaya Infiniti</title>
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
        <li class="active" style="font-face:Comic Sans MS;font-weight: bold;"><a href="laporan_pakej.php">Laporan Pakej</a></li>
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




        <div id="page-wrapper">

            <div class="container-fluid">


                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <center>LAPORAN MAJLIS</center>    
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="page_admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Laporan Majlis
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                    <form name="Form1">
                        <label> Jenis Majlis</label>
                        <select  name="example" size="1" onChange="go()">
                            <?php 
                                $data3 = mysqli_query($connection,"select * from majlis");
                                if(isset($_GET["id"]))
                                {
                                    echo "<option>$_GET[nama]</option>";
                                }
                                while ($info3=mysqli_fetch_array($data3)) 
                                {
                                    echo "<option hidden selected> -- PILIH MAJLIS -- </option>";
                                    echo "<option value='laporan_majlis.php?id=$info3[id]&nama=$info3[majlis]'>$info3[majlis]</option>";
                                }
                             ?>
                        </select> 
                        

                        <script type="text/javascript">
                            <!--
                            function go() {
                                location=document.Form1.example.options[document.Form1.example.selectedIndex].value
                            }
                            //-->
                        </script>
                    </form>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th ><b>Bil</b></th>
                                    <th ><b>No Daftar</b></th>
                                    <th ><b>Nama</b></th>
                                    <th ><b>Emel</b></th>
                                    <th ><b>No Telefon</b></th>
                                    <th ><b>Alamat</b></th>
                                    <th><b>Jenis_Majlis</b></th>
                                    <th ><b>Jenis_Pakej</b></th>
                                    <th ><b>Tarikh Majlis</b></th>
                                    <th ><b>Kategori Lokasi Majlis</b></th>
                                    <th ><b>Jumlah Tetamu</b></th>
                                    <th ><b>catatan</b></th>
                                    </tr>

                <?php 

                $no=1;
                while ($info1=mysqli_fetch_array($data1)) 
                {
                    $dataJenis=mysqli_query($connection,"select * from pakej where id='$info1[pakej]'"); //dataJenis
                    $infoJenis=mysqli_fetch_array($dataJenis);

                    $dataLokasi=mysqli_query($connection,"select * from majlis where id='$info1[majlis]'"); //dataLokasi
                    $infoLokasi=mysqli_fetch_array($dataLokasi);

//<!--INSERT INTO `butiran`(`id`, `No_Daftar`, `Nama`, `Emel`, `No_Tel`, `Alamat`, `Jenis_Majlis`, `Jenis_Pakej`, `Tarikh_Majlis`, `KategoriLokasiMajlis`, `JumlahTetamu`, `catatan`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->
                ?>

                                </thead>
                                <tbody>
                <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $info1['No_Daftar']; ?></td>
                <td><?php echo $info1['Nama']; ?></td>
                <td><?php echo $info1['Emel']; ?></td>
                <td><?php echo $info1['No_Tel']; ?></td>
                <td><?php echo $info1['Alamat']; ?></td>
                <td><?php echo $infoLokasi['majlis']; ?></td>
                <td><?php echo $infoJenis['pakej']; ?></td>
                <td><?php echo $info1['Tarikh_Majlis']; ?></td>
                <td><?php echo $info1['KategoriLokasiMajlis']; ?></td>
                <td><?php echo $info1['JumlahTetamu']; ?></td>
                <td><?php echo $info1['catatan']; ?></td>
                </tr>
                <?php 
                $no++;
                }

                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
<hr class="style13" style=" height: 10px;border: 0;box-shadow: 0 10px 10px -10px #8c8b8b inset;" width="100%">


<div align="center" class="style15">*Laporan Tamat*<br>Jumlah Rekod:
            <?php echo $no-1; ?></div>
            <center><br>

            <a href="page_admin.php">Ke Menu Utama</a> |
            <a href="logout.php">Log Keluar</a> |
            <a HREF="javascript:window.print()">Cetak Laporan</a>
            </center>
            <?php ?>
<br>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
