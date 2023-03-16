<?php 
    
    session_start();
    if($_SESSION)
    {
        if($_SESSION['level']=="Admin")
        {
            header("Location : page_admin.php");
        }
        if($_SESSION['level']=="Pengguna")
        {
            header("Location : page_pengguna.php");
        }
    }
    include('login.php');


?>

<head>
    <title>PHP Login Script</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    
</head>
<body style="  background: url('blue.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
">

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CAHAYA INFINITI</a>
        </div>
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="http://127.0.0.1/stm2/index.html">Halaman Utama</a></li>
                <!--<li><a href="register.php">Daftar</a></li> -->
            </ul>
        </div>
    </div>
</nav>



<div class="container">
    <div class="row" style="margin: 60px auto;">
        <div class="col-md-4 col-md-offset-4 well" >

            <form role="form" action="" method="post" name="loginform">
                
                    <legend style="  padding: 5px;font-size: 1.4em;font-weight: bold;text-align: center;text-transform: uppercase;">Login</legend>
                    
                    <div class="form-group">
                        <label for="name">Emel</label>
                        <input type="email" name="email" placeholder="exp : xxx@gmail.com" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Masukkan KataLaluan" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">Pengguna</label>
                        <select name="level" required class="form-control">
                            <option value="">Pilih Pengguna</option>
                            <option value="1">Admin</option>
                            <option value="2">Pengguna</option>
                        </select>
                    </div>                    
                    <?php echo $error; ?>
                    <div class="form-group">
                        <input type="submit" type="submit" name="submit" style="  box-sizing: border-box;display: block;width: 100%;" value="Login" class="btn btn-primary" />
                    </div>
                
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">  

        <!--Belum Berdaftar? <a href="daftar.php">Klik disini untuk mendaftar</a> -->
        </div>
    </div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
