<?php 

    session_start();
    if(!$_SESSION['email'])
    {
         header("Location: http://127.0.0.1/stm2/2/FLogin.php");
    }

    include('cek_admin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Admin - Cahaya Infiniti</title>

    <!-- Bootstrap Core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="page_admin.php"> Cahaya Infiniti</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['email']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Keluar</a></li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="page_admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="laporan_majlis.php"><i class="fa fa-fw fa-dashboard"></i> Laporan Majlis </a>
                    </li> 
                    <li>
                        <a href="laporan_pakej.php"><i class="fa fa-fw fa-dashboard"></i> Laporan Pakej  </a>
                    </li>  
                    <li>
                        <a href="register.php"><i class="fa fa-fw fa-dashboard"></i> Tambah User </a>
                    </li> 
                    <li>
                        <a href="list_pengguna.php"><i class="fa fa-fw fa-dashboard"></i> Senarai User  </a>
                    </li>                    
                    <li>
                        <a href="update_pakej.php"><i class="fa fa-fw fa-bar-chart-o"></i> Kemaskini Jenis Pakej</a>
                    </li>
                    <li>
                        <a href="update_majlis.php"><i class="fa fa-fw fa-table"></i> Kemaskini Jenis Majlis</a>
                    </li>                                   
                    <li>
                        <a href="senarai_aset.php"><i class="fa fa-fw fa-wrench"></i> Kemaskini Butiran Tempahan</a>
                    </li>                     
                    <li>
                        <a href="hapus_butiran.php"><i class="fa fa-fw fa-desktop"></i> Padam Butiran Tempahan</a>
                    </li>

                  <!--  <li class="active">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            HALAMAN UTAMA
                            <small>Panel Admin</small>
                        </h1> <!--
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                        <!--    <li class="active">
                                <i class="fa fa-file"></i> Blank Page 
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->

                  <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Selamat Datang</strong> ke Panel Admin  <b class="alert-link"><?php echo $_SESSION['email']; ?> </b>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!--RUANG KOSONG UTK CODING CRUD-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><center>
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Selamat Datang Ke Panel Admin</h3></center>
                            </div>
                            <img src="1.jpg" width="100%">
                        </div>
                    </div>
                </div>
                <!-- /.row -->                

                juishiuhsiu


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/js/bootstrap.min.js"></script>


</body>

</html>
