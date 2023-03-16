<?php 

include('connection.php');
session_start();
if(!$_SESSION['email'])
{
	header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD PENTADBIR ASET</title>
</head>
<body>
<center> <h3>DAFTAR ASET BARU</h3>
<form action="daftar_user.php" name="form1" method="POST">
	<fieldset>
		<table width="600" border="0" align="center">
			<thead>
				<tr><th>
					
				</th></tr>
			</thead>
			<tbody>
				<tr>
					<td><label>Email :</label>
						<input type="email" name="email" placeholder="Email" required />
					</td>
				</tr>

				<tr>
					<td><label>KataLaluan :</label>
						<input type="text" name="password" placeholder="KataLaluan" required />
					</td>
				</tr>
			
				<tr>
					<td><label>Nama Pengguna :</label>
						<input type="text" name="name" placeholder="Nama" required />
					</td>
				</tr>

				<tr>																				
					<td><input type="submit" name="submit" value="Daftar" /></td>
				</tr>
			</tbody>
		</table>
	</fieldset>

<?php
if(isset($_POST["email"]))
{

	$email = $_POST["email"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	
	mysqli_query($connection,"INSERT into pelanggan (email, password, name, level) values ('$email','$password','$name','Pengguna')") or die(mysqli_error());

echo "<script>alert('Rekod telah disimpan'); window.location='page_admin.php'</script>";
}
else
{
?>

</form><br>
<a href="page_admin.php">Ke Menu Utama</a>
<a href="logout.php">Log Keluar</a>


</center>

<?php } ?>

</body>
</html>
