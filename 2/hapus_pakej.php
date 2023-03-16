<?php 

include('connection.php');

session_start();
if(!$_SESSION['email'])
{
	 header("Location: http://127.0.0.1/stm2/2/FLogin.php");
}

if(isset($_GET["id"]))
{

	mysqli_query($connection,"DELETE from pakej where id='$_GET[id]'") or die(mysqli_error());

	echo "<script>alert('Rekod telah dihapuskan');
	window.location = 'update_pakej.php'</script>";
}

?>