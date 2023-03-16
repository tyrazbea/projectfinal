<?php 

	$namahost = "localhost";
	$pengguna_mysql = "root";
	$katalaluan_mysql = "";
	$dbname = "stm2";

	$connection = mysqli_connect($namahost,$pengguna_mysql,$katalaluan_mysql) or die("Maaf pangkalan data tidak dapat disambung");
	mysqli_select_db($connection,$dbname) or die("Tidak dapat pilih pangkalan data");
 ?>