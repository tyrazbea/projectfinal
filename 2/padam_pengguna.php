<?php 

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	 header("Location: http://127.0.0.1/stm2/2/FLogin.php");
}

if(isset($_GET["uid"]))
{

	mysqli_query($connection,"DELETE from pelanggan where uid='$_GET[uid]'") or die(mysqli_error());

	echo "<script>alert('Rekod telah dihapuskan');
	window.location = 'list_pengguna.php'</script>";
}

?>